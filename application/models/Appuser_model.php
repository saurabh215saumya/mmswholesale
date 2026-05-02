<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
class Appuser_model extends CI_Model{
	public function __construct() {
		parent::__construct();	
        $this->table = 'tbl_users';
    }

    public function allAppuser() {
        $data = array();
        $query = $this->db->select("$this->table.*")
            ->from($this->table)
                ->where($this->table.'.is_deleted', '0')
            ->get();

        if($query->num_rows() > 0 ) {
            return  $query->result_array();
        } else {
            return $data;
        }
    }


    
    public function appuserDetails($id) 
    {
        $data = array();
        $query = $this->db->select("$this->table.*")
        ->from("$this->table" )
        ->where("$this->table.id", $id)
        ->get();
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0) {
            $data = $query->row_array();         
            return $data;  
        } else {
            return $data;
        }
    }


    public function appuserPaymentHistory($id) 
    {
        $data = array();
        $query = $this->db->select("tbl_payment.*")
        ->from("tbl_payment" )
        ->where("tbl_payment.user_id", $id)
        // ->where("tbl_payment.txn_type !=", 0)
        // ->where("tbl_payment.txn_type !=", 1)
        ->get();
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0) {
            $data = $query->result_array();         
            return $data;  
        } else {
            return $data;
        }
    }



    public function appuserDetailsByUserName($name) 
    {
        $data = array();
        $query = $this->db->select("$this->table.*")
        ->from("$this->table" )
        ->where("$this->table.user_name", $name)
        ->get();
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0) {
            $data = $query->row_array();         
            return $data;  
        } else {
            return $data;
        }
    }

    public function changeStatus($statusId, $statusValue) 
    {
        $data = array();
        $values = array(
            'status' => $statusValue
        );
        if($this->db->where(array('id' => $statusId))->update($this->table, $values)){
            return TRUE;
        } else {
            return FALSE;
        }   
    }

     public function add($table = FALSE, $data = FALSE)
    {

        if($data && $table){
            
            $result = $this->db->insert($table, $data);
            if ($result) {
                return $result;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    public function update($table = FALSE, $data = FALSE, $user_id = false)
    {

        if($data && $table && $user_id){
            
            $result = $this->db->update($table, $data, array('id' => $user_id));
            return true;
        }
        return false;

    }

    public function check_duplicate_user_name($table, $user_name = false)
    {   
        if($table && $ic_no){
            $this->db->get_where($table, array('user_name' => $user_name), 1);
            return $this->db->affected_rows() > 0 ? TRUE : FALSE;
        }
        return FALSE;
    }

    public function check_duplicate_email($table, $email = false)
    {   
        if($table && $email){
            $this->db->get_where($table, array('email' => $email), 1);
            return $this->db->affected_rows() > 0 ? TRUE : FALSE;
        }
        return FALSE;   
    }


    /*public function check_duplicate_mobile($table, $mobile = false)
    {
        
        if($table && $mobile){
        $this->db->get_where($table, array('mobile' => $mobile), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;
        }
        return FALSE;
        
    }*/



    /* Frontend Start */

    /* Function for login user start */
    public function login($mobile) {
        $data = array();
        $query = $this->db->get_where($this->table, array('mobile' => $mobile,'status' => 1));
        if($query->num_rows() > 0 ) {
            return  $query->row_array();
        } else {
            return $data;
        }
    }

    public function otp_login($mobile, $otp) {
        $data = array();
        $query = $this->db->get_where($this->table, array('mobile' => $mobile, 'otp' => $otp,'status' => 1));
        if($query->num_rows() > 0 ) {
            return  $query->result();
        } else {
            return $data;
        }
    }
    // public function login($email, $password) {
    //     $data = array();
    //     $query = $this->db->get_where($this->table, array('password' => md5($password), 'email' => $email,'status' => 1));
    //     if($query->num_rows() > 0 ) {
    //         return  $query->result();
    //     } else {
    //         return $data;
    //     }
    // }
    /* Function for login user end */



    /* Function for get user billing information start */
    public function getUserBillingInfo($user_id) {
        $data = array();
        $query = $this->db->select("*")
                ->from("tbl_user_billing")
                ->where(array("tbl_user_billing.status" => 1, "tbl_user_billing.user_id" => $user_id))
                ->order_by("tbl_user_billing.id", "DESC")
                ->get();
                //echo $this->db->last_query();die;
        if($query->num_rows() > 0 ) {
            return  $query->result_array();
        } else {
            return $data;
        }
    }
    /* Function for get user billing information end */


    /* Function for get user order start */
    public function getUserOrder($user_id) {
        $data = array();
        $query = $this->db->select("*")
                ->from("tbl_order")
                ->where(array("tbl_order.user_id" => $user_id))
                ->order_by("tbl_order.id", "DESC")
                ->get();
                // echo $this->db->last_query();die;
        if($query->num_rows() > 0 ) {
            return  $query->result_array();
        } else {
            return $data;
        }
    }
    /* Function for get user order end */


    /* Function for update otp start */
    public function upDateOtp($userId, $otp) 
    {
        $data = array();
        $values = array(
            'otp' => $otp
        );
        if($this->db->where(array('id' => $userId))->update($this->table, $values)){
            return TRUE;
        } else {
            return FALSE;
        }   
    }
    /* Function for update otp end */


    
    /* Frontend End */


    

}
