<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Author       :Mohit sharma
 * Company      :Scource Soft
 * website      :http://www.sourcesoftsolutions.com/
 * date         :17-may-2017.
 * Controller   :Giver 	 
 */

class Testimonial extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->table = 'tbl_client_testimonial';        
		$this->load->model('Testimonial_model');
		$this->controller = $this->router->fetch_class();
	}

// ========================= Admin Section Start ====================
	/* Get all list of circle */
	public function index() {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['controller'] = $this->controller;

		$data['alltestimonials'] = $this->Testimonial_model->allTestimonials();
		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('testimonial/index', $data);
		$this->load->view('template/admin_footer');
	}


	/* Open add new workout type form */
	public function  addTestimonial(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['controller'] = $this->controller;

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('testimonial/add_testimonial', $data);
		$this->load->view('template/admin_footer');
	}

	/* Add new workout type form data with validation */
	public function add_newtestimonial(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$data['controller'] = $this->controller;
		$this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
		// $this->form_validation->set_rules('category_type', 'Category Type', "trim|required");
		$this->form_validation->set_rules('name', 'Client Name', "trim|required");
		$this->form_validation->set_rules('designation', 'Designation', "trim|required");
		$this->form_validation->set_rules('description', 'Description', "trim|required");
		$this->form_validation->set_rules('status', 'Status', 'trim|required|integer');

		if($this->form_validation->run() == FALSE ){
			$data['controller'] = $this->controller;

			$this->load->view('template/admin_header');
			$this->load->view('template/admin_left');
			$this->load->view('testimonial/add_testimonial', $data);
			$this->load->view('template/admin_footer');
		} else {

			$insert_data = array(
				// 'category_type' => $cType,
				'name' => $this->input->post('name'),
				'designation' => $this->input->post('designation'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status'),
				'addedOn' => date("Y-m-d H:i:s"),
			);

			$uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/testimonials/";
			$image = $_FILES['image_file'];
			if (!empty($image['name']) && $image['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image["tmp_name"];
				$imgName     = pathinfo($image['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$insert_data['image'] = $newImgName;
				}
			}

			if($this->db->insert($this->table, $insert_data)){
				$this->session->set_flashdata('response', '<div class="alert alert-success">Testimonial Added Successfully</div>');
			} else {
				$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to Add New Testimonial.</div>');
			}
			redirect($this->controller, 'refresh');
		}
	}
	

	/* Open edit workout type form by workout type ID */
	public function edit($id){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['details'] = $this->Testimonial_model->testimonialDetails($id);
		$data['controller'] = $this->controller;

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('testimonial/edit', $data);
		$this->load->view('template/admin_footer');
	}



	/* Update workout type form data by workout type ID */
	public function update_testimonial(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$data['controller'] = $this->controller;
		$testimonial_id = $this->input->post('testimonial_id');
		$data['details'] = $this->Testimonial_model->testimonialDetails($testimonial_id);

		$this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
		$this->form_validation->set_rules('name', 'Name', "trim|required");
		$this->form_validation->set_rules('designation', 'Designation', "trim|required");
		$this->form_validation->set_rules('description', 'Description', "trim|required");
		$this->form_validation->set_rules('status', 'Status', 'trim|required|integer');
		$oldImage = $this->input->post('image_file_name');	
		

		if($this->form_validation->run() == FALSE ){ 
			$data['controller'] = $this->controller;
			$data['details'] = $this->Testimonial_model->testimonialDetails($testimonial_id);

			$this->load->view('template/admin_header');
			$this->load->view('template/admin_left');
			$this->load->view('testimonial/edit', $data);
			$this->load->view('template/admin_footer');
		} else {
			$data = array(
				'name' => $this->input->post('name'),
				'designation' => $this->input->post('designation'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status'),
				// 'updatedOn' => $current_time,
			);

			$uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/testimonials/";
			$image = $_FILES['image_file'];
			if (!empty($image['name']) && $image['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image["tmp_name"];
				$imgName     = pathinfo($image['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$data['image'] = $newImgName;
				}

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/testimonials/".$oldImage;
				if (file_exists($filename)) {
				    unlink($filename);
				}
			}

			if($this->db->update($this->table, $data, array('id' => $testimonial_id))) {
				$this->session->set_flashdata('response', '<div class="alert alert-success">Testimonial Updated Successfully</div>');
			} else {
				$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to updated testimonial.</div>');
			}
			redirect($this->controller, 'refresh');
			
		}
	}


	/* Change Status data on click */
	public function changestatus() {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$statusid = $this->input->post('statusid');
		$controllername = $this->input->post('controllername');
		//$displayid = $this->input->post('displayid');

		if($this->input->post('statusvalue')) {
			$statusVal = '0';
			$statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.' style="color: #ff0000; cursor: pointer;"  title="In Active"><i class="fa fa-2x fa-ban" aria-hidden="true"></i></span>';
		} else {
			$statusVal = '1';
			$statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.'  style="color: #00a65a; cursor: pointer;" title="Active"><i class="fa fa-2x fa-check" aria-hidden="true"></i></span>';
		}

		$changes = $this->Testimonial_model->changeStatus($statusid, $statusVal);
		if($changes) {
			echo $statusRow;
		} else {
			echo 'Server problem';
		}
	}

	

	/* Delete data on click */
	public function delete($id) {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$deleted = $this->Testimonial_model->deleteRecord($id);
		if($deleted) {
			redirect($this->controller, 'refresh');
		} else {
			redirect($this->controller, 'refresh');
		}
	}

// ========================= Admin Section End ====================



}
