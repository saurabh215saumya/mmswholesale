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

class Product extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->table = 'tbl_products';        
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('Subcategory_model');
		$this->load->model('Home_model');
		$this->controller = $this->router->fetch_class();
		$this->load->library("pagination");
	}

	/* Get all list of user interest */
	public function index() {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['controller'] = $this->controller;

		$data['allproducts'] = $this->Product_model->allproducts();
		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('product/index', $data);
		$this->load->view('template/admin_footer');
	}


	public function gallerylist($id) {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['controller'] = $this->controller;

		$data['service_id'] = $id;
		$data['allservicegallery'] = $this->Service_model->allServiceGallery($id);
		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('service/gallery_list', $data);
		$this->load->view('template/admin_footer');
	}

	/* Get workout details by workout type ID */
	public function details($id) {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['controller'] = $this->controller;
		$data['details'] = $this->Service_model->serviceDetails($id);
		if(count($data['details']) > 0 ){
			$data['service_added'] = changeDateFormat($data['details']['addedOn']);
			$data['service_updated'] = changeDateFormat($data['details']['updatedOn']);
		}	

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('service/details', $data);
		$this->load->view('template/admin_footer');
	}

	/* Open edit workout type form by workout type ID */
	public function  edit($id){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$subCatId = getSubCatIdByProductId($id);
		$data['categoryDataArr'] = getAllCategory();
		$data['subCategoryDataArr'] = getAllSubCategory($subCatId);
		// $data['packageDataArr'] = getAllPackages();
		$data['details'] = $this->Product_model->productDetails($id);
		$data['controller'] = $this->controller;

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('product/edit', $data);
		$this->load->view('template/admin_footer');
	}


	public function  edit_gallery($id){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$data['details'] = $this->Service_model->serviceGalleryDetails($id);
		$data['controller'] = $this->controller;

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('service/edit_gallery', $data);
		$this->load->view('template/admin_footer');
	}

	/* Update workout type form data by workout type ID */
	public function update_product(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$data['controller'] = $this->controller;
		$product_id = $this->input->post('product_id');
		$data['details'] = $this->Product_model->productDetails($product_id);

		$this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
		// $this->form_validation->set_rules('category_type', 'Category Type', "trim|required");

		$this->form_validation->set_rules('category_id', 'Category Name', "trim|required");
		$this->form_validation->set_rules('sub_category_id', 'Sub Category Name', "trim|required");
		$this->form_validation->set_rules('product_name', 'Product Name', "trim|required");
		$this->form_validation->set_rules('product_code', 'Product Code', "trim|required");
		$this->form_validation->set_rules('quantity', 'Quantity', "trim|required");
		$this->form_validation->set_rules('wholesale_price', 'Wholesale Price', "trim|required");
		$this->form_validation->set_rules('retailer_price', 'Retailer Price', "trim|required");
		$this->form_validation->set_rules('price', 'Traider Price', "trim|required");
		$this->form_validation->set_rules('status', 'Status', 'trim|required|integer');
			$oldImage = $this->input->post('image_file_name');
			$oldImage_1 = $this->input->post('image_file_name_1');
			$oldImage_2 = $this->input->post('image_file_name_2');
			$oldImage_3 = $this->input->post('image_file_name_3');
			$oldImage_4 = $this->input->post('image_file_name_4');
		// $oldImage_5 = $this->input->post('image_file_name_5');
		// $banneroldImage = $this->input->post('banner_image_file_name');

		if($this->form_validation->run() == FALSE ){ 
			$data['controller'] = $this->controller;
			$data['categoryDataArr'] = getAllCategory();
			$data['subCategoryDataArr'] = getAllSubCategories();
			$data['details'] = $this->Product_model->productDetails($product_id);

			$this->load->view('template/admin_header');
			$this->load->view('template/admin_left');
			$this->load->view('product/edit', $data);
			$this->load->view('template/admin_footer');
		} else {
			$meta_title = $this->input->post('meta_title');
			$meta_description = $this->input->post('meta_description');
			$meta_keywords = $this->input->post('meta_keywords');
			$h1_tag = $this->input->post('h1_tag');
			$h2_tag = $this->input->post('h2_tag');
			$h3_tag = $this->input->post('h3_tag');
			$image_alt_1 = $this->input->post('image_alt_1');
			$image_alt_2 = $this->input->post('image_alt_2');
			$image_alt_3 = $this->input->post('image_alt_3');
			$image_alt_4 = $this->input->post('image_alt_4');
			$image_alt_5 = $this->input->post('image_alt_5');
			$robots = $this->input->post('robots');
			$revisit_after = $this->input->post('revisit_after');
			$og_local = $this->input->post('og_local');
			$og_type = $this->input->post('og_type');
			$og_image = $this->input->post('og_image');
			$og_tag = $this->input->post('og_tag');
			$og_title = $this->input->post('og_title');
			$og_url = $this->input->post('og_url');
			$og_description = $this->input->post('og_description');
			$og_site_name = $this->input->post('og_site_name');
			$author = $this->input->post('author');
			$canonical = $this->input->post('canonical');
			$geo_region = $this->input->post('geo_region');
			$geo_place_name = $this->input->post('geo_place_name');
			$geo_position = $this->input->post('geo_position');
			$icbm = $this->input->post('icbm');
			$data = array(
				'meta_title' => $meta_title,
				'meta_description' => $meta_description,
				'meta_keywords' => $meta_keywords,
				'h1_tag' => $h1_tag,
				'h2_tag' => $h2_tag,
				'h3_tag' => $h3_tag,
				'image_alt_1' => $image_alt_1,
				'image_alt_2' => $image_alt_2,
				'image_alt_3' => $image_alt_3,
				'image_alt_4' => $image_alt_4,
				'image_alt_5' => $image_alt_5,
				'robots' => $robots,
				'revisit_after' => $revisit_after,
				'og_local' => $og_local,
				'og_type' => $og_type,
				'og_image' => $og_image,
				'og_tag' => $og_tag,
				'og_title' => $og_title,
				'og_url' => $og_url,
				'og_description' => $og_description,
				'og_site_name' => $og_site_name,
				'author' => $author,
				'canonical' => $canonical,
				'geo_region' => $geo_region,
				'geo_place_name' => $geo_place_name,
				'geo_position' => $geo_position,
				'icbm' => $icbm,
				'category_id' => $this->input->post('category_id'),
				'sub_cat_id' => $this->input->post('sub_category_id'),
				'product_name' => $this->input->post('product_name'),
				'product_code' => $this->input->post('product_code'),
				'quantity' => $this->input->post('quantity'),
				'wholesale_price' => $this->input->post('wholesale_price'),
				'retailer_price' => $this->input->post('retailer_price'),
				'price' => $this->input->post('price'),
				'page_title' => $this->input->post('page_title'),
				'page_slug' => $this->input->post('page_slug'),
				'product_slug' => $this->input->post('product_slug'),
				'description' => $this->input->post('description'),
				'long_description' => $this->input->post('long_description'),
				'status' => $this->input->post('status'),
				// 'updatedOn' => date("Y-m-d h:i:s"),
			);

			$uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/";
			$image = $_FILES['image_file'];
			$image_1 = $_FILES['image_file_1'];
			$image_2 = $_FILES['image_file_2'];
			$image_3 = $_FILES['image_file_3'];
			$image_4 = $_FILES['image_file_4'];
			// $image_5 = $_FILES['image_file_5'];
			// $banner_image = $_FILES['banner_image_file'];

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

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/".$oldImage;
				if (file_exists($filename)) {
				    unlink($filename);
				}
			}


			if (!empty($image_1['name']) && $image_1['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_1["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_1["tmp_name"];
				$imgName     = pathinfo($image_1['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_1['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$data['image_1'] = $newImgName;
				}

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/".$oldImage_1;
				if (file_exists($filename)) {
				    unlink($filename);
				}
			}


			if (!empty($image_2['name']) && $image_2['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_2["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_2["tmp_name"];
				$imgName     = pathinfo($image_2['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_2['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$data['image_2'] = $newImgName;
				}

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/".$oldImage_2;
				if (file_exists($filename)) {
				    unlink($filename);
				}
			}


			if (!empty($image_3['name']) && $image_3['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_3["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_3["tmp_name"];
				$imgName     = pathinfo($image_3['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_3['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$data['image_3'] = $newImgName;
				}

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/".$oldImage_3;
				if (file_exists($filename)) {
				    unlink($filename);
				}
			}


			if (!empty($image_4['name']) && $image_4['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_4["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_4["tmp_name"];
				$imgName     = pathinfo($image_4['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_4['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$data['image_4'] = $newImgName;
				}

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/".$oldImage_4;
				if (file_exists($filename)) {
				    unlink($filename);
				}
			}

			// echo "<pre>"; print_r($data); die;
			if($this->db->update($this->table, $data, array('id' => $product_id))) {
				$this->session->set_flashdata('response', '<div class="alert alert-success">Product Updated Successfully</div>');
			} else {
				$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to updated Product.</div>');
			}   

			redirect($this->controller, 'refresh');
		}
	}


	public function update_gallery(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$data['controller'] = $this->controller;
		$service_id = $this->input->post('service_id');
		$gallery_id = $this->input->post('gallery_id');
		$data['details'] = $this->Service_model->serviceGalleryDetails($gallery_id);

		$this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
		
		$this->form_validation->set_rules('status', 'Status', 'trim|required|integer');			
		$oldImage = $this->input->post('image_file_name');
		if($this->form_validation->run() == FALSE ){ 
			$data['controller'] = $this->controller;
			$data['details'] = $this->Service_model->serviceGalleryDetails($gallery_id);

			$this->load->view('template/admin_header');
			$this->load->view('template/admin_left');
			$this->load->view('service/edit_gallery', $data);
			$this->load->view('template/admin_footer');
		} else {
			$data = array(
				'status' => $this->input->post('status'),
			);

			//echo '<pre>'; print_r($_FILES); die;
			 $uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/services/";
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

				$filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/services/".$oldImage;
				if (file_exists($filename)) {
				    unlink($filename);
				}

				if ($width == "1000" && $height == "1020") {
					if($this->db->update("tbl_gallery", $data, array('id' => $gallery_id))) {
						$this->session->set_flashdata('response', '<div class="alert alert-success">Galley Image Updated Successfully</div>');
					} else {
						$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to updated gallery image.</div>');
					}    
					redirect('service/gallerylist/'.$service_id, 'refresh');
				} else {
					$this->session->set_flashdata('response', '<div class="alert alert-danger">Image dimension should be within 1020X1000.</div>');
			        $this->load->view('template/admin_header');
					$this->load->view('template/admin_left');
					$this->load->view('service/edit_gallery', $data);
					$this->load->view('template/admin_footer');
				}
			} else {
				if($this->db->update("tbl_gallery", $data, array('id' => $gallery_id))) {
					$this->session->set_flashdata('response', '<div class="alert alert-success">Galley Image Updated Successfully</div>');
				} else {
					$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to updated gallery image.</div>');
				}    
				redirect('service/gallerylist/'.$service_id, 'refresh');
			}
		}
	}



	public function name_check($name){
		$subCategoryId = $this->input->post('sub_category_id');

		$this->db->where_not_in('id', $subCategoryId);
		$this->db->where('sub_category_name',$name);
		if($this->db->count_all_results($this->table) > 0){
			$this->form_validation->set_message('name_check', 'The name can not be same');
			return false;
		}else{
			return true;
		}
	}

	/* Change Status data on click */
	public function changestatus() {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$statusid = $this->input->post('statusid');
		$controllername = $this->input->post('controllername');
		//	$displayid = $this->input->post('displayid');

		if($this->input->post('statusvalue')) {
			$statusVal = 0;
			$statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.' style="color: #ff0000; cursor: pointer;"  title="In Active"><i class="fa fa-2x fa-ban" aria-hidden="true"></i></span>';
		} else {
			$statusVal = 1;
			$statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.'  style="color: #00a65a; cursor: pointer;" title="Active"><i class="fa fa-2x fa-check" aria-hidden="true"></i></span>';
		}

		$changes = $this->Subcategory_model->changeStatus($statusid, $statusVal);
		if($changes) {
			echo $statusRow;
		} else {
			echo 'Server problem';
		}
	}


	/* Change Status data on click */
	public function changegallerystatus() {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$statusid = $this->input->post('statusid');
		$controllername = $this->input->post('controllername');
		//	$displayid = $this->input->post('displayid');

		if($this->input->post('statusvalue')) {
			$statusVal = 0;
			$statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.' style="color: #ff0000; cursor: pointer;"  title="In Active"><i class="fa fa-2x fa-ban" aria-hidden="true"></i></span>';
		} else {
			$statusVal = 1;
			$statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.'  style="color: #00a65a; cursor: pointer;" title="Active"><i class="fa fa-2x fa-check" aria-hidden="true"></i></span>';
		}

		$changes = $this->Service_model->changeGalleryStatus($statusid, $statusVal);
		if($changes) {
			echo $statusRow;
		} else {
			echo 'Server problem';
		}
	}

	/* Open add new workout type form */
	public function  addproduct(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		// $data['productCode'] = generateProductCode(6);
		$data['categoryDataArr'] = getAllCategory();
		$data['subCategoryDataArr'] = getAllSubCategories();
		$data['controller'] = $this->controller;

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('product/add_product', $data);
		$this->load->view('template/admin_footer');
	}

	/* Add new workout type form data with validation */
	public function add_newproduct(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['controller'] = $this->controller;
		$this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
		// $this->form_validation->set_rules('category_type', 'Category Type', "trim|required");
		$this->form_validation->set_rules('category_id', 'Category Name', "trim|required");
		$this->form_validation->set_rules('sub_category_id', 'Sub Category Name', "trim|required");
		$this->form_validation->set_rules('product_name', 'Product Name', "trim|required");
		$this->form_validation->set_rules('product_code', 'Product Code', "trim|required");
		$this->form_validation->set_rules('quantity', 'Quantity', "trim|required");
		$this->form_validation->set_rules('wholesale_price', 'Wholesale Price', "trim|required");
		$this->form_validation->set_rules('retailer_price', 'Retailer Price', "trim|required");
		$this->form_validation->set_rules('price', 'Traider Price', "trim|required");
		$this->form_validation->set_rules('status', 'Status', 'trim|required|integer');
		// $cType = $this->input->post('category_type');
		$cType = 2;
		if($this->form_validation->run() == FALSE ){
			$data['controller'] = $this->controller;
			$data['categoryDataArr'] = getAllCategory();
			$data['subCategoryDataArr'] = getAllSubCategories();
			$this->load->view('template/admin_header');
			$this->load->view('template/admin_left');
			$this->load->view('subcategory/add_subcategory', $data);
			$this->load->view('template/admin_footer');
		} else {
			$meta_title = $this->input->post('meta_title');
			$meta_description = $this->input->post('meta_description');
			$meta_keywords = $this->input->post('meta_keywords');
			$h1_tag = $this->input->post('h1_tag');
			$h2_tag = $this->input->post('h2_tag');
			$h3_tag = $this->input->post('h3_tag');
			$image_alt_1 = $this->input->post('image_alt_1');
			$image_alt_2 = $this->input->post('image_alt_2');
			$image_alt_3 = $this->input->post('image_alt_3');
			$image_alt_4 = $this->input->post('image_alt_4');
			$image_alt_5 = $this->input->post('image_alt_5');
			$robots = $this->input->post('robots');
			$revisit_after = $this->input->post('revisit_after');
			$og_local = $this->input->post('og_local');
			$og_type = $this->input->post('og_type');
			$og_image = $this->input->post('og_image');
			$og_tag = $this->input->post('og_tag');
			$og_title = $this->input->post('og_title');
			$og_url = $this->input->post('og_url');
			$og_description = $this->input->post('og_description');
			$og_site_name = $this->input->post('og_site_name');
			$author = $this->input->post('author');
			$canonical = $this->input->post('canonical');
			$geo_region = $this->input->post('geo_region');
			$geo_place_name = $this->input->post('geo_place_name');
			$geo_position = $this->input->post('geo_position');
			$icbm = $this->input->post('icbm');

			$insert_data = array(
				'category_id' => $this->input->post('category_id'),
				'sub_cat_id' => $this->input->post('sub_category_id'),
				'product_name' => $this->input->post('product_name'),
				'product_code' => $this->input->post('product_code'),
				'wholesale_price' => $this->input->post('wholesale_price'),
				'retailer_price' => $this->input->post('retailer_price'),
				'price' => $this->input->post('price'),
				'quantity' => $this->input->post('quantity'),
				'page_title' => $this->input->post('page_title'),
				'page_slug' => $this->input->post('page_slug'),
				'product_slug' => $this->input->post('product_slug'),
				'description' => $this->input->post('description'),
				'long_description' => $this->input->post('long_description'),
				'meta_title' => $meta_title,
				'meta_description' => $meta_description,
				'meta_keywords' => $meta_keywords,
				'h1_tag' => $h1_tag,
				'h2_tag' => $h2_tag,
				'h3_tag' => $h3_tag,
				'image_alt_1' => $image_alt_1,
				'image_alt_2' => $image_alt_2,
				'image_alt_3' => $image_alt_3,
				'image_alt_4' => $image_alt_4,
				'image_alt_5' => $image_alt_5,
				'robots' => $robots,
				'revisit_after' => $revisit_after,
				'og_local' => $og_local,
				'og_type' => $og_type,
				'og_image' => $og_image,
				'og_tag' => $og_tag,
				'og_title' => $og_title,
				'og_url' => $og_url,
				'og_description' => $og_description,
				'og_site_name' => $og_site_name,
				'author' => $author,
				'canonical' => $canonical,
				'geo_region' => $geo_region,
				'geo_place_name' => $geo_place_name,
				'geo_position' => $geo_position,
				'icbm' => $icbm,
				'status' => $this->input->post('status'),
			);
			
			$uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/products/";
			$image = $_FILES['image_file'];
			$image_1 = $_FILES['image_file_1'];
			$image_2 = $_FILES['image_file_2'];
			$image_3 = $_FILES['image_file_3'];
			$image_4 = $_FILES['image_file_4'];
			$image_5 = $_FILES['image_file_5'];
			// $bannerimage = $_FILES['banner_image_file'];

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

			if (!empty($image_1['name']) && $image_1['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_1["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_1["tmp_name"];
				$imgName     = pathinfo($image_1['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_1['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$insert_data['image_1'] = $newImgName;
				}
			}

			if (!empty($image_2['name']) && $image_2['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_2["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_2["tmp_name"];
				$imgName     = pathinfo($image_2['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_2['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$insert_data['image_2'] = $newImgName;
				}
			}

			if (!empty($image_3['name']) && $image_3['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_3["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_3["tmp_name"];
				$imgName     = pathinfo($image_3['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_3['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$insert_data['image_3'] = $newImgName;
				}
			}

			if (!empty($image_4['name']) && $image_4['error'] <= 0) {
				// Get Image Dimension
			    $fileinfo = @getimagesize($image_4["tmp_name"]);
			    $width = $fileinfo[0];
			    $height = $fileinfo[1];

				$tmp_name    = $image_4["tmp_name"];
				$imgName     = pathinfo($image_4['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_4['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				
				if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
					$insert_data['image_4'] = $newImgName;
				}
			}

			// if (!empty($image_5['name']) && $image_5['error'] <= 0) {
			// 	// Get Image Dimension
			//     $fileinfo = @getimagesize($image_5["tmp_name"]);
			//     $width = $fileinfo[0];
			//     $height = $fileinfo[1];

			// 	$tmp_name    = $image_5["tmp_name"];
			// 	$imgName     = pathinfo($image_5['name']);
			// 	$ext         = strtolower($imgName['extension']);
			// 	$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_5['name']), 0, 50);
			// 	$newImgName  = $newImgName . time() . "." . $ext;
				
			// 	if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
			// 		$insert_data['image_5'] = $newImgName;
			// 	}
			// }


			/*if(!empty($image['name']) && $image['error'] <= 0){
				$tmp_name    = $image["tmp_name"];
				$imgName     = pathinfo($image['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				$uploadPath = $uploads_dir . '/' . $newImgName;
				
				if (move_uploaded_file($tmp_name, $uploadPath)) {
					$newFile = $uploads_dir .'/'. $newImgName;

					$source_properties = getimagesize($uploadPath);
					$image_type = $source_properties[2];

					if( $image_type == IMAGETYPE_JPEG ) {
						$uploadPath = imagecreatefromjpeg($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagejpeg($uploadPath, $newFile);
					} else if( $image_type == IMAGETYPE_GIF )  {  
						$uploadPath = imagecreatefromgif($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagegif($uploadPath, $newFile);
					} elseif( $image_type == IMAGETYPE_PNG )  {  
						$uploadPath = imagecreatefrompng($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagepng($uploadPath, $newFile);
					}
					$insert_data['image'] = $newImgName;
				}
			}


			if(!empty($image_2['name']) && $image_2['error'] <= 0){
				$tmp_name    = $image_2["tmp_name"];
				$imgName     = pathinfo($image_2['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_2['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				$uploadPath = $uploads_dir . '/' . $newImgName;
				
				if (move_uploaded_file($tmp_name, $uploadPath)) {
					$newFile = $uploads_dir .'/'. $newImgName;

					$source_properties = getimagesize($uploadPath);
					$image_type = $source_properties[2];

					if( $image_type == IMAGETYPE_JPEG ) {
						$uploadPath = imagecreatefromjpeg($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagejpeg($uploadPath, $newFile);
					} else if( $image_type == IMAGETYPE_GIF )  {  
						$uploadPath = imagecreatefromgif($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagegif($uploadPath, $newFile);
					} elseif( $image_type == IMAGETYPE_PNG )  {  
						$uploadPath = imagecreatefrompng($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagepng($uploadPath, $newFile);
					}
					$insert_data['image_2'] = $newImgName;
				}
			}


			if(!empty($image_3['name']) && $image_3['error'] <= 0){
				$tmp_name    = $image_3["tmp_name"];
				$imgName     = pathinfo($image_3['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_3['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				$uploadPath = $uploads_dir . '/' . $newImgName;
				
				if (move_uploaded_file($tmp_name, $uploadPath)) {
					$newFile = $uploads_dir .'/'. $newImgName;

					$source_properties = getimagesize($uploadPath);
					$image_type = $source_properties[2];

					if( $image_type == IMAGETYPE_JPEG ) {
						$uploadPath = imagecreatefromjpeg($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagejpeg($uploadPath, $newFile);
					} else if( $image_type == IMAGETYPE_GIF )  {  
						$uploadPath = imagecreatefromgif($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagegif($uploadPath, $newFile);
					} elseif( $image_type == IMAGETYPE_PNG )  {  
						$uploadPath = imagecreatefrompng($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagepng($uploadPath, $newFile);
					}
					$insert_data['image_3'] = $newImgName;
				}
			}


			if(!empty($image_4['name']) && $image_4['error'] <= 0){
				$tmp_name    = $image_4["tmp_name"];
				$imgName     = pathinfo($image_4['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_4['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				$uploadPath = $uploads_dir . '/' . $newImgName;
				
				if (move_uploaded_file($tmp_name, $uploadPath)) {
					$newFile = $uploads_dir .'/'. $newImgName;

					$source_properties = getimagesize($uploadPath);
					$image_type = $source_properties[2];

					if( $image_type == IMAGETYPE_JPEG ) {
						$uploadPath = imagecreatefromjpeg($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagejpeg($uploadPath, $newFile);
					} else if( $image_type == IMAGETYPE_GIF )  {  
						$uploadPath = imagecreatefromgif($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagegif($uploadPath, $newFile);
					} elseif( $image_type == IMAGETYPE_PNG )  {  
						$uploadPath = imagecreatefrompng($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagepng($uploadPath, $newFile);
					}
					$insert_data['image_4'] = $newImgName;
				}
			}


			if(!empty($image_5['name']) && $image_5['error'] <= 0){
				$tmp_name    = $image_5["tmp_name"];
				$imgName     = pathinfo($image_5['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image_5['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				$uploadPath = $uploads_dir . '/' . $newImgName;
				
				if (move_uploaded_file($tmp_name, $uploadPath)) {
					$newFile = $uploads_dir .'/'. $newImgName;

					$source_properties = getimagesize($uploadPath);
					$image_type = $source_properties[2];

					if( $image_type == IMAGETYPE_JPEG ) {
						$uploadPath = imagecreatefromjpeg($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagejpeg($uploadPath, $newFile);
					} else if( $image_type == IMAGETYPE_GIF )  {  
						$uploadPath = imagecreatefromgif($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagegif($uploadPath, $newFile);
					} elseif( $image_type == IMAGETYPE_PNG )  {  
						$uploadPath = imagecreatefrompng($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],280,280);
						$newImageName = imagepng($uploadPath, $newFile);
					}
					$insert_data['image_5'] = $newImgName;
				}
			} */

			// if (!empty($bannerimage['name']) && $bannerimage['error'] <= 0) {
			// 	// Get Image Dimension
			//     $fileinfo = @getimagesize($bannerimage["tmp_name"]);
			//     $width = $fileinfo[0];
			//     $height = $fileinfo[1];

			// 	$tmp_name    = $bannerimage["tmp_name"];
			// 	$imgName     = pathinfo($bannerimage['name']);
			// 	$ext         = strtolower($imgName['extension']);
			// 	$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$bannerimage['name']), 0, 50);
			// 	$newImgName  = $newImgName . time() . "." . $ext;
				
			// 	if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
			// 		$insert_data['service_banner_image'] = $newImgName;
			// 	}
			// }


			/* if(!empty($bannerimage['name']) && $bannerimage['error'] <= 0){
				$tmp_name    = $bannerimage["tmp_name"];
				$imgName     = pathinfo($bannerimage['name']);
				$ext         = strtolower($imgName['extension']);
				$newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$bannerimage['name']), 0, 50);
				$newImgName  = $newImgName . time() . "." . $ext;
				$uploadPath = $uploads_dir . '/' . $newImgName;
				
				if (move_uploaded_file($tmp_name, $uploadPath)) {
					$newFile = $uploads_dir .'/'. $newImgName;

					$source_properties = getimagesize($uploadPath);
					$image_type = $source_properties[2];

					if( $image_type == IMAGETYPE_JPEG ) {
						$uploadPath = imagecreatefromjpeg($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],1350,490);
						$newImageName = imagejpeg($uploadPath, $newFile);
					} else if( $image_type == IMAGETYPE_GIF )  {  
						$uploadPath = imagecreatefromgif($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],1350,490);
						$newImageName = imagegif($uploadPath, $newFile);
					} elseif( $image_type == IMAGETYPE_PNG )  {  
						$uploadPath = imagecreatefrompng($uploadPath); 
						$uploadPath = fn_resize($uploadPath,$source_properties[0],$source_properties[1],1350,490);
						$newImageName = imagepng($uploadPath, $newFile);
					}
					$insert_data['service_banner_image'] = $newImgName;
				}
			} */


			
			echo "<pre>"; print_r($insert_data);
			if($this->db->insert($this->table, $insert_data)){
				// $insert_id = $this->db->insert_id();
				// $subcategoryArr = $this->SubCategory_model->subcategoryDetails($insert_id);
				// $insert_gallery_data = array(
				// 	'service_id' => $insert_id,
				// 	'image' => $serviceArr['image'],
				// );
				// $this->db->insert("tbl_gallery", $insert_gallery_data);
				$this->session->set_flashdata('response', '<div class="alert alert-success">Product Successfully Added</div>');
			} else {
				$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to Add Sub Category.</div>');
			}
			redirect($this->controller, 'refresh');
		}
	}



	public function  addgallery(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		$data['service_id'] = $this->uri->segment(3);
		$data['controller'] = $this->controller;

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_left');
		$this->load->view('service/add_gallery', $data);
		$this->load->view('template/admin_footer');
	}

	/* Add new workout type form data with validation */
	public function add_newgallery(){
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}
		
		$data['controller'] = $this->controller;
		$this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|integer');

		if($this->form_validation->run() == FALSE ){
			$data['controller'] = $this->controller;

			$this->load->view('template/admin_header');
			$this->load->view('template/admin_left');
			$this->load->view('service/add_gallery', $data);
			$this->load->view('template/admin_footer');
		} else {
			$service_id = $this->input->post('service_id');
			$insert_data = array(
				'service_id' => $this->input->post('service_id'),
				'status' => $this->input->post('status'),
			);
			
			$uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/services/";
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

			//echo '<pre>'; print_r($insert_data); die;
			if ($width == "1000" && $height == "1020") {
				if($this->db->insert("tbl_gallery", $insert_data)){
					$this->session->set_flashdata('response', '<div class="alert alert-success">New Gallery Image Successfully Added</div>');
				} else {
					$this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to Add New Gallery Image.</div>');
				}
				redirect('service/gallerylist/'.$service_id, 'refresh');
			} else {
				$this->session->set_flashdata('response', '<div class="alert alert-danger">Image dimension should be within 1020X1000.</div>');
				$this->load->view('template/admin_header');
				$this->load->view('template/admin_left');
				$this->load->view('service/add_gallery', $data);
				$this->load->view('template/admin_footer');
			}
		}
	}


	/* Delete data on click */
	public function delete($id) {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$deleted = $this->Subcategory_model->deleteRecord($id);
		if($deleted) {
			redirect($this->controller, 'refresh');
		} else {
			redirect($this->controller, 'refresh');
		}
	}


	/* Delete gallery data on click */
	public function delete_gallery($id) {
		if (!$this->session->userdata('logged_in')) {
			redirect('user/login');
		}

		$deleted = $this->Service_model->deleteGalleryRecord($id);
		if($deleted) {
			redirect($this->controller, 'refresh');
		} else {
			redirect($this->controller, 'refresh');
		}
	}



/* Function Start For Front-End Code */

/* Function for get service details start */
	public function serviceDetail___($id){
		$packageId = $this->uri->segment(3);
		$serviceId = $this->uri->segment(4);
		$data['controller'] = $this->controller;
		$data['serviceId'] = $serviceId;
		$data['packageId'] = $packageId;
		// $data['allPackages'] = $this->Home_model->getAllPackages();
		$data['footerContent'] = $this->Home_model->getPageData('footer_content');
		$data['aboutCompany'] = $this->Home_model->getPageData('about-company');
		$data['whyWeBest'] = $this->Home_model->getPageData('why_we_best');
		$data['serviceDetails'] = $this->Service_model->getServiceDetails($serviceId);
		$data['allPackageServices'] = $this->Package_model->getPackageServices($packageId);

		$this->load->view('template/front/inner-header', $data);
		$this->load->view('service/service_detail', $data);
		$this->load->view('template/front/footer', $data);
	}


	public function product_detail($slug){
		$data['isActiveCategories'] = getAllCategory();
		// $serviceId = $id;
		// $data['controller'] = $this->controller;
		// $data['serviceId'] = $serviceId;
		// $packageId = getDetailByProductSlug($serviceId);
		// $data['packageId'] = $packageId;
		// // $data['allPackages'] = $this->Home_model->getAllPackages();
		// $data['footerContent'] = $this->Home_model->getPageData('footer_content');
		// $data['aboutCompany'] = $this->Home_model->getPageData('about-company');
		// $data['whyWeBest'] = $this->Home_model->getPageData('why_we_best');
		$data['produictDetails'] = $this->Product_model->getProductDetails($slug);
		// $data['allPackageServices'] = $this->Package_model->getPackageServices($packageId);
		$data['allBanners'] = $this->Home_model->getHomeBanners();

		$this->load->view('template/front/header', $data);
		$this->load->view('template/front/home_banner', $data);
		$this->load->view('product/product_detail', $data);
		$this->load->view('template/front/footer', $data);
	}
/* Function for get service details end */


/* Function for get user cart list start */
	public function cart_list(){
		$data['isActiveCategories'] = getAllCategory();
		$data['controller'] = $this->controller;
		$user_id = $this->session->userdata('front_logged_in')['id'];
		$data['allCartProducts'] = $this->Product_model->getUserCartProduct($user_id);
		$this->load->view('template/front/header', $data);
		$this->load->view('product/cart_list', $data);
		$this->load->view('template/front/footer', $data);
	}
/* Function for get user cart list end */

/* Function for get user cart list start */
	public function wish_list(){
		$data['isActiveCategories'] = getAllCategory();
		$this->load->view('template/front/header', $data);
		$this->load->view('product/wish_list', $data);
		$this->load->view('template/front/footer', $data);
	}
/* Function for get user cart list end */

/* Function for get user cart list start */
	public function cart_checkout(){
		$data['isActiveCategories'] = getAllCategory();
		$data['controller'] = $this->controller;
		$user_id = $this->session->userdata('front_logged_in')['id'];
		// $data['billingArr'] = getUserBillingDetails($user_id);
		// $data['subTotal'] = $this->Laundryprice_model->getUserCartSubTotal($user_id);
		$this->load->view('template/front/header', $data);
		$this->load->view('product/cart_checkout', $data);
		$this->load->view('template/front/footer', $data);
	}
/* Function for get user cart list end */


/* Function for Add Single Item Into CART start */
	public function addItemIntoCart() {
		$product_id = $_POST['product_id'];
		$user_id = $_POST['user_id'];
		$quantity = $_POST['quantity'];
		$cat_id = $_POST['cat_id'];
		$sub_cat_id = $_POST['sub_cat_id'];
		// $totalProductAmount = $_POST['product_price'];

		$productDetailArr = $this->Product_model->getProductDetailsById($product_id);
		// echo $product_id;
		// echo "<pre>"; print_r($productDetailArr); die;
		$totalProductAmount = $quantity*$productDetailArr['price'];
		// $totalCodProductAmount = $quantity*$productDetailArr['old_price'];

		$checkCartProduct = $this->Product_model->checkCartOtherProduct($cat_id, $sub_cat_id, $product_id, $user_id);
		// echo '<pre>'; print_r($checkCartProduct); die;
		if(count($checkCartProduct)>0){
            // $updatedQuantity = ($checkCartProduct['quantity']+$quantity);
            $updatedQuantity = $quantity;
            $totUpdatedAmount = $updatedQuantity*$productDetailArr['price'];
            // $totCodUpdatedAmount = $updatedQuantity*$productDetailArr['old_price'];
            $updateCartArr = array(
                "quantity" => $updatedQuantity,
                "amount" => $totUpdatedAmount,
            );
            $whereCondArr = array("cat_id" => $cat_id, "sub_cat_id" => $sub_cat_id, "product_id" => $product_id, "user_id" => $user_id);
            if($this->db->update("tbl_cart", $updateCartArr, $whereCondArr)){
            	echo "updated";
            }
		} else {
			$insert_data = array(
				'cat_id' => $cat_id,
				'sub_cat_id' => $sub_cat_id,
				'product_id' => $product_id,
				'user_id' => $user_id,
				'quantity' => $quantity,
				'amount' => $totalProductAmount,
				'addedOn' => date('Y-m-d h:i:s'),
			);
			if($this->db->insert('tbl_cart', $insert_data)){
				echo "added";
			}
		}
	}
/* Function for Add Single Item Into CART end */


/* Delete Cart List Product Start */
	public function delete_cart_list_product($id) {
		if (!$this->session->userdata('front_logged_in')) {
			redirect('appuser/login');
		}
		$deleted = $this->Product_model->deleteCartProduct($id);
		if($deleted) {
			redirect('cart-list', 'refresh');
		} else {
			redirect('cart-list', 'refresh');
		}
	}

	public function delete_all_user_cart_list_product($userId) {
		if (!$this->session->userdata('front_logged_in')) {
			redirect('appuser/login');
		}
		$deleted = $this->Product_model->deleteAllUserCartProduct($userId);
		if($deleted) {
			redirect('cart-list', 'refresh');
		} else {
			redirect('cart-list', 'refresh');
		}
	}
/* Delete Cart List Product End */

/* Function End For Front-End Code */	

}
