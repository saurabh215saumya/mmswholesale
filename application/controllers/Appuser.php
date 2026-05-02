<?php
// error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Author       :Mohit sharma
 * Company      :Scource Soft
 * website      :
 * date         :17-may-2017.
 * Controller   :Giver 	 
 */

class Appuser extends CI_Controller{
    function __construct() {
        parent::__construct(); 
        // $this->load->library('twilio');
        // $this->load->helper('api_helper');
        $this->load->model('admin_model');      
        $this->load->model('appuser_model');
        // $this->load->model('Category_model');
        // $this->load->model('School_model');
        // $this->load->model('Product_model');
        $this->load->helper('common_helper');
        $this->controller = $this->router->fetch_class();
        $this->table = 'tbl_users';
    }

    public function index() {
        $data['controller'] = $this->controller;
        $data['allcustomers'] = $this->appuser_model->allAppuser();
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_left');
        $this->load->view('appuser/index', $data);
        $this->load->view('template/admin_footer');
    }


    public function add() {
        if (!$this->session->userdata('logged_in')) {
            redirect('user/login');
        }
        
            if(!empty($_POST)){
            $this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('user_role', 'User Role', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            // $this->form_validation->set_rules('status', 'Status', 'trim|required');

            if($this->form_validation->run() == FALSE ){ //die("sfdsf");
                $data['controller'] = $this->controller;
                $this->load->view('template/admin_header');
                $this->load->view('template/admin_left');
                $this->load->view('appuser/add_appuser', $data);
                $this->load->view('template/admin_footer');
            } else {
                //CHECK DUPLICATE
                $user_name =  $this->input->post('user_name');
                $email = $this->input->post('email');

                if($this->appuser_model->check_duplicate_user_name($this->table, $user_name)){
                 $this->session->set_flashdata('response', '<div class="alert alert-danger">user with provided User Name already exist.</div>');
                }else if($this->appuser_model->check_duplicate_email($this->table,$email)){
                 $this->session->set_flashdata('response', '<div class="alert alert-danger">user with provided email already exist.</div>');
                }else{
                    $data = array(
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        'user_name' => $this->input->post('user_name'),
                        'email' => $this->input->post('email'),
                        'user_role' => $this->input->post('user_role'),
                        'password' => md5($this->input->post('password')),
                        'temp_password' => $this->input->post('password'),
                        'addedOn' => time(),
                    );
                    // echo "<pre>"; print_r($data); die;
                    $res = $this->appuser_model->add($this->table, $data);

                    if($res) {   
                        $this->session->set_flashdata('response', '<div class="alert alert-success">User created Successfully and mail has been sent to the provided user Email ID.</div>');
                    } else {
                        $this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to create user.</div>');
                    }   
                    redirect($this->controller, 'refresh');
                }
            }
        }

        $data['controller'] = $this->controller;
        $data['allcustomers'] = $this->appuser_model->allAppuser();
        
        $this->load->view('template/admin_header');
        $this->load->view('template/admin_left');
        $this->load->view('appuser/add_appuser', $data);
        $this->load->view('template/admin_footer');

    }


    public function check_user_exist($name){
        $userExist = $this->appuser_model->appuserDetailsByUserName($name);
        // echo '<pre>'; print_r($userExist); die;
        $userId = $userExist['id'];
        
        $this->db->where_not_in('id', $userId);
        $this->db->where('user_name',$name);
        if($this->db->count_all_results('tbl_users') > 0){
        $this->form_validation->set_message('check_user_exist', 'The User name can not be same');
            return false;
        }else{
            return true;
        }
    }

    public function details($id) {
        $data['controller'] = $this->controller;
        $data['details'] = $this->appuser_model->appuserDetails($id);
        $data['payment_history'] = $this->appuser_model->appuserPaymentHistory($id);

        $this->load->view('template/admin_header');
        $this->load->view('template/admin_left');
        $this->load->view('appuser/details', $data);
        $this->load->view('template/admin_footer');
    }


    public function edit($id) {
        if(isset($_POST)){
            // echo '<pre>'; print_r($_POST); die;

            $user_id = $this->input->post('user_id');
        
            $this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');

            $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');


            if($this->form_validation->run() == FALSE ){
                $data['controller'] = $this->controller;
                $data['details'] = $this->appuser_model->appuserDetails($id);
                $this->load->view('template/admin_header');
                $this->load->view('template/admin_left');
                $this->load->view('appuser/edit', $data);
                $this->load->view('template/admin_footer');
            } else {           
                
                $user_name =  $this->input->post('user_name');
                $email = $this->input->post('email');
                 $data = array(
                    'user_name' => $this->input->post('user_name'),
                    'first_name' => $this->input->post('user_name'),
                    'mobile' => $this->input->post('mobile'),
                    // 'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'about_me' => $this->input->post('about_me'),
                    'gender' => $this->input->post('gender'),
                    'updatedOn' => time(),
                );
                // echo '<pre>'; print_r($data); die;
                
                $res = $this->appuser_model->update($this->table, $data, $user_id);

                if($res) {

                $this->session->set_flashdata('response', '<div class="alert alert-success">User updated Successfully and mail has been sent to the provided user Email ID.</div>');
                } else {
                
                    $this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to update user.</div>');
                
                }   
              
                redirect($this->controller, 'refresh');
                
            }
        }

        $data['controller'] = $this->controller;

        $data['details'] = $this->appuser_model->appuserDetails($id);

        $this->load->view('template/admin_header');
        $this->load->view('template/admin_left');
        $this->load->view('appuser/edit', $data);
        $this->load->view('template/admin_footer');
    }


    /* Change Status data on click */
    public function changestatus() {
        if (!$this->session->userdata('logged_in')) {
                redirect('user/login');
            }

        $statusid = $this->input->post('statusid');
        $controllername = $this->input->post('controllername');
    //  $displayid = $this->input->post('displayid');
        
        if($this->input->post('statusvalue')) {
            $statusVal = 0;
            $statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.' style="color: #ff0000; cursor: pointer;"  title="In Active"><i class="fa fa-2x fa-ban" aria-hidden="true"></i></span>';
        } else {
            $statusVal = 1;
            $statusRow = '<span statusid='.$statusid.' statusvalue='.$statusVal.' controllername='.$controllername.'  style="color: #00a65a; cursor: pointer;" title="Active"><i class="fa fa-2x fa-check" aria-hidden="true"></i></span>';
        }
        
        $changes = $this->appuser_model->changeStatus($statusid, $statusVal);
        if($changes) {
          //$this->sendStatusEmail($statusid, $statusVal);
          echo $statusRow;
        } else {
          echo 'Server problem';
        }
    }


    public function delete()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('user/login');
        }

        $user_id = $this->uri->segment(3);
        $data = array(
                    'is_deleted' => '1',        
                    'updatedOn' => time(),
                );

       $res = $this->appuser_model->update($this->table, $data, $user_id);

        if($res){

        $this->session->set_flashdata('response', 'User deleted successfully.');


        }else{

        $this->session->set_flashdata('response', 'User not deleted.');

        }

        redirect($this->controller, 'refresh');


        # code...
    }


    public function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
    }

/* Create alpha numeric random Number */

    public function generateRandomNo($string = 30) {
        $this->load->helper('string');
        $randomNo = random_string('alnum', $string);
        return $randomNo;
    }



/* FRONT END FUNCTIONALITY START */

    /* Function for user signup start */
    public function sign_up() {
        $data['isActiveCategories'] = getAllCategory();
        $this->load->view('template/front/header', $data);
        $this->load->view('appuser/signup');
        $this->load->view('template/front/footer', $data);
    }
    /* Function for user signup end */

    /* Function for user signup start */
    public function user_signup() {
        if(!empty($_POST)){
            $delivery_add = $_POST['delivery_add'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $address_1 = $_POST['address_1'];
            $address_2 = $_POST['address_2'];
            $cityname = $_POST['cityname'];
            $postal_code = $_POST['postal_code'];
            $confirm_password = $_POST['confirm_password'];

            $del_first_name = $_POST['del_first_name'];
            $del_last_name = $_POST['del_last_name'];
            $del_mobile = $_POST['del_mobile'];
            $del_email = $_POST['del_email'];
            $del_postal_code = $_POST['del_postal_code'];
            $del_address_11 = $_POST['del_address_11'];
            $del_address_22 = $_POST['del_address_22'];
            $del_cityname = $_POST['del_cityname'];

            //CHECK DUPLICATE
            if($this->appuser_model->check_duplicate_email($this->table,$email)){
             // $this->session->set_flashdata('response', '<div class="alert alert-danger">User with provided email already exist.</div>');
                $res = "duplicate_email";
            }else{
                $data = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'address_1' => $address_1,
                    'address_2' => $address_2,
                    'city' => $cityname,
                    'postal_code' => $postal_code,
                    'password' => md5($confirm_password),
                );

                // echo "<pre>"; print_r($data); die;
                $result = $this->appuser_model->add($this->table, $data);

                // echo "<pre>"; print_r($result);

                if($result) {
                    $userId = $this->db->insert_id("tbl_users");
                    $delAdd1 = array(
                        'user_id' => $userId,
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'postal_code' => $postal_code,
                        'contact' => $mobile,
                        'email' => $email,
                        'address_1' => $address_1,
                        'address_2' => $address_2,
                        'city' => $cityname,
                    );
                    $this->appuser_model->add("tbl_user_billing", $delAdd1);

                    if($delivery_add == "true"){
                        $delAdd2 = array(
                            'user_id' => $userId,
                            'first_name' => $del_first_name,
                            'last_name' => $del_last_name,
                            'postal_code' => $del_postal_code,
                            'contact' => $del_mobile,
                            'email' => $del_email,
                            'address_1' => $del_address_11,
                            'address_2' => $del_address_22,
                            'city' => $del_cityname,
                        );
                        $this->appuser_model->add("tbl_user_billing", $delAdd2);
                    }
                    // Send Email to User

                    /* For Email Varification Code */
                        /*$emailData = array(
                        "name" => $first_name." ".$last_name,
                        "email" => $email,
                        "password" => $password,
                        );
                        $emailContent = $this->getVerificationMailContent("user_veryfication_code", $emailData);
                        
                        sendMail($email, $emailContent["subject"], $emailContent["content"]);*/
                    /* For Email Varification Code */

                    $res = "success";
                } else {
                    $res = "error";
                }   
            }
            echo $res;
        }
    }
    /* Function for user signup start */

    /* Function for user login start */
    public function login() {
        $data['isActiveCategories'] = getAllCategory();
        $this->load->view('template/front/header', $data);
        $this->load->view('appuser/signin');
        $this->load->view('template/front/footer', $data);
    }
    /* Function for user login end */


    /* Function for user login start */

    public function user_login() {
        if(!empty($_POST)){
            $mobile = $_POST['mobile'];
            $result = $this->appuser_model->login($mobile); // Validate Login Credentials
            if ($result) {
                    $randNum = generateRandomNumber(4);
                    $this->appuser_model->upDateOtp($result['id'], $randNum);
                    sendSmsToMobile($randNum, $mobile);
                $res = "success";
            } else {
                $res = "failed";
            }
            echo $res;
        }
    }


    public function otp_login() {
        if(!empty($_POST)){
            $mobile = $_POST['mobile'];
            $otp = $_POST['otp'];
            $result = $this->appuser_model->otp_login($mobile, $otp); // Validate Login Credentials
            if ($result) {
                $session_array = array();
                foreach ($result as $row) {
                    $session_array = array(
                        'id' => $row->id, 
                        'full_name' => $row->full_name,
                        'mobile' => $row->mobile,
                        'email' => $row->email,
                    );
                    $this->session->set_userdata('front_logged_in', $session_array); 
                }
                $res = "success";
            } else {
                $res = "failed";
            }
            echo $res;
        }
    }


    public function user_login_by_email() {
        if(!empty($_POST)){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = $this->appuser_model->user_login_by_email($email, $password); // Validate Login Credentials
            if ($result) {
                $session_array = array();
                foreach ($result as $row) {
                    $session_array = array(
                        'id' => $row->id, 
                        'first_name' => $row->first_name,
                        'last_name' => $row->last_name,
                        'mobile' => $row->mobile,
                        'email' => $row->email,
                    );
                    $this->session->set_userdata('front_logged_in', $session_array); 
                }
                $res = "success";
            } else {
                $res = "failed";
            }
            echo $res;
        }
    }


    function check_login_user_exist($password) {
        $email = $this->input->post('email');
        $result = $this->appuser_model->login($email, $password); // Validate Login Credentials
            
        if ($result) {
            $session_array = array();
            foreach ($result as $row) {
                $session_array = array(
                    'id' => $row->id, 
                    'first_name' => $row->first_name,
                    'last_name' => $row->last_name,
                    'email' => $row->email,
                    'mobile' => $row->mobile,
                    'password' => $row->password,
                    'profile_image' => $row->image
                );
                $this->session->set_userdata('front_logged_in', $session_array); 
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_user_exist', 'Username or Password Invalid'); 
            return false;
        }
    }
/* Function for user login start */



/* Function for user billing information start */
public function place_user_order_item() {
    $user_id = $this->session->userdata('front_logged_in')['id'];
    $payment_method = $_POST['payment_method'];
    
    $billing_address_id = $_POST['billing_address_id'];
    $comment = isset($_POST['comment'])?$_POST['comment']:'';

    $result = $this->Product_model->place_order($user_id, $payment_method, $billing_address_id, $comment);
    // echo "<pre>"; print_r($result);
    if($result) {
        /* delete product from cart table */
        $this->db->where('user_id', $user_id);
        $deleted = $this->db->delete('tbl_cart');
        echo $result;
        // echo $this->session->set_flashdata('response', '<div class="alert alert-success">Order placed successfully.</div>');
    } else {
        echo $this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to place order.</div>');
    }   
    // redirect($this->controller.'/signup', 'refresh');
}
/* Function for user billing information start */




/* Function for logout functionality start */
    public function logout(){
        $sessArr = $this->session->userdata('logged_in');
        $this->session->sess_destroy($sessArr);
        redirect('/', 'refresh');
    }
/* Function for logout functionality end */


/* Function for get user account details start */

    public function my_account(){
        // if (!$this->session->userdata('front_logged_in')) {
        //     redirect('appuser/login');
        // }
        // $user_id = $this->session->userdata('front_logged_in')['id'];
        $data['controller'] = $this->controller;
        // $data['loginUserArr'] = getUserDetails($user_id);
        $this->load->view('template/front/header');
        $this->load->view('appuser/my_account', $data);
        $this->load->view('template/front/footer');
    }
/* Function for get user account details end */


/* Function for update user account details start */
    public function update_user(){
        if (!$this->session->userdata('front_logged_in')) {
            redirect('appuser/login');
        }
        $data['controller'] = $this->controller;
        $user_id = $this->input->post('user_id');
        $data['loginUserArr'] = $this->session->userdata('front_logged_in');

        $this->form_validation->set_error_delimiters('<p class="help-block" style="color:red;">', '</p>');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('postal_code', 'Post Code', 'trim|required');

        
        if($this->form_validation->run() == FALSE ){ 
            $data['controller'] = $this->controller;
            $data['loginUserArr'] = $this->session->userdata('front_logged_in');

            $this->load->view('template/front/header');
            $this->load->view('appuser/my_account', $data);
            $this->load->view('template/front/footer');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'city' => $this->input->post('city'),
                'postal_code' => $this->input->post('postal_code'),
                'updatedOn' => date("Y-m-d h:i:s"),
            );

            /*$uploads_dir = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/users/";
            $image = $_FILES['image_file'];
            if (!empty($image['name']) && $image['error'] <= 0) {
                $tmp_name    = $image["tmp_name"];
                $imgName     = pathinfo($image['name']);
                $ext         = strtolower($imgName['extension']);
                $newImgName  = substr(preg_replace('/[^a-zA-Z0-9\._]/', '_',$image['name']), 0, 50);
                $newImgName  = $newImgName . time() . "." . $ext;

                if (move_uploaded_file($tmp_name, $uploads_dir . '/' . $newImgName)) {
                    $data['profile_image'] = $newImgName;
                }

                $filename = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/users/".$oldImage;
                if (file_exists($filename)) {
                    unlink($filename);
                }
            } else {
                $newImgName = $this->input->post('image_file_name');
            }*/

            // echo '<pre>'; print_r($_FILES);
            // echo '<pre>'; print_r($data); die;
            if($this->db->update($this->table, $data, array('id' => $user_id))) {
                $session_array = array(
                    'id' => $user_id, 
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email' => $this->input->post('email'),
                    'mobile' => $this->input->post('mobile'),
                    // 'profile_image' => $newImgName,
                );
                $this->session->set_userdata('logged_in', $session_array);
                $this->session->set_flashdata('response', '<div class="alert alert-success">User updated successfully.</div>');
            } else {
                $this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to updated user information.</div>');
            }    
            redirect('my-account', 'refresh');
        }
    }
/* Function for update user account details end */


/* Function for change user billing details start */
    public function billing_address(){
        if (!$this->session->userdata('front_logged_in')) {
            redirect('appuser/login');
        }
        $user_id = $this->session->userdata('front_logged_in')['id'];
        $data['controller'] = $this->controller;
        $data['userBillingInfo'] = $this->appuser_model->getUserBillingInfo($user_id);
        $this->load->view('template/front/front_header', $data);
        $this->load->view('appuser/billing_address', $data);
        $this->load->view('template/front/front_footer');
    }
/* Function for change user billing details end */


/* Function for update user billing information start */
public function update_billing_info() {
    $user_id = $this->session->userdata('front_logged_in')['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address_1 = $_POST['address_1'];
    $address_2 = $_POST['address_2'];
    $city = $_POST['city'];
    // $country = $_POST['country'];
    // $email = $_POST['email'];
    $contact = $_POST['contact'];
    $id = $_POST['id'];
    
    
    $data = array(
        'first_name' => $first_name,
        'last_name' => $last_name,
        'address_1' => $address_1,
        'address_2' => $address_2,
        'city' => $city,
        // 'country' => $country,
        // 'email' => $email,
        'contact' => $contact,
        'updatedOn' => date("Y-m-d h:i:s"),
    );
    if($this->db->update("tbl_user_billing", $data, array('id' => $id))) {
        echo "success";
        //echo $this->session->set_flashdata('response', '<div class="alert alert-success">User created Successfully and mail has been sent to the provided user Email ID.</div>');
    } else {
        echo "error";
        //echo $this->session->set_flashdata('response', '<div class="alert alert-danger">Failed to place order.</div>');
    }   
    // redirect($this->controller.'/signup', 'refresh');
}
/* Function for update user billing information start */


/* Function for change user password start */
    public function change_password(){
        if (!$this->session->userdata('front_logged_in')) {
            redirect('appuser/login');
        }
        $user_id = $this->session->userdata('front_logged_in')['id'];
        $data['loginUserArr'] = $this->session->userdata('front_logged_in');
        $data['controller'] = $this->controller;
        $data['headerMenus'] = $this->Category_model->getActiveCategoryList();
        $this->load->view('template/front/header', $data);
        $this->load->view('appuser/change_password');
        $this->load->view('template/front/footer');
    }
/* Function for change user password end */

/* Function for change user password start */
public function change_user_password() {
    $old_password = $_POST['oldPass'];
    $conf_password = $_POST['confPass'];
    $user_id = $this->session->userdata('front_logged_in')['id'];
    $userDetails = $this->appuser_model->appuserDetails($user_id);
    // Check user password
    if($userDetails['password'] != md5($old_password)){
        echo "missmatch";
    } else {
        $updateCartArr = array(
            "password" => md5($conf_password)
        );
        $whereCondArr = array("id" => $user_id);
        if($this->db->update("tbl_users", $updateCartArr, $whereCondArr)){
            echo "updated";
        } else {
            echo "error";
        }
    }
}
/* Function for change user password end */


/* Function for change user password start */
    public function my_order(){
        if (!$this->session->userdata('front_logged_in')) {
            redirect('appuser/login');
        }
        $user_id = $this->session->userdata('front_logged_in')['id'];
        $data['controller'] = $this->controller;
        $data['userOrderArr'] = $this->appuser_model->getUserOrder($user_id);
        $this->load->view('template/front/front_header');
        $this->load->view('appuser/my_order', $data);
        $this->load->view('template/front/front_footer');
    }
/* Function for change user password end */

    
    /* Get User Activation Link Content */
    public function getVerificationMailContent($templateName, $emailDataArr) {
        $emailTemplate = getTableData("tbl_email_template", "subject, description", array("name" => $templateName, "status" => 1));
        $subject = $emailTemplate["subject"];
        $emailContent = $emailTemplate["description"];
        $content = str_replace('{{contact_person}}', $emailDataArr['name'], $emailContent);
        $content = str_replace('{{email_logo_url}}', SHOW_EMAIL_LOGO, $content);
        $content = str_replace('{{app_name}}', APP_NAME, $content);
        $content = str_replace('{{site_name}}', SITE_NAME, $content);
        $content = str_replace('{{email}}', $emailDataArr['email'], $content);
        $content = str_replace('{{password}}', $emailDataArr['password'], $content);
        $content = str_replace('{{year}}', date('Y'), $content);
        $data = array();
        $data['subject'] = $subject;
        $data['content'] = $content;
        return $data;
    }
    /* Get User Activation Link Content */

/* FRONT END FUNCTIONALITY START */


}
