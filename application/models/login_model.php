<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Login_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
	
	function login_verify(){
		$user_username = $this->input->post('login_username');
		$user_password = $this->input->post('login_password');
		
		$this->db->where('email', $user_username);		
		$query = $this->db->get('user');
		
		$session_data = array();
        if($query->num_rows === 1){
			$row = $query->row();
			
			$decoded_password = $this->encrypt->decode($row->password);//decode password from database			
			
			if( $decoded_password === $user_password){
				
				$data['username'] = $row->email;
				$data['firstName'] = $row->firstName;				
				$data['lastName'] = $row->lastName;
				$data['userType'] = $row->userType;
				$data['companyID'] = $row->companyID;				
				
				return $data;			
			}
			return FALSE;
        }
		return FALSE;
	}
	
	function activate_user(){
		$session_user = $this->session->userdata('username');
		
		$data = array(
					   'isActive' => 1
					);
		
		$this->db->where('email', $session_user);
		$response = $this->db->update('user', $data);		
		return ($response ? true : false);
	}
	
	function deactivate_user(){
		$session_user = $this->session->userdata('username');
		
		$data = array(
					   'isActive' => 0
					);
		
		$this->db->where('email', $session_user);
		$response = $this->db->update('user', $data);		
		return ($response ? true : false);
	}
}


    