<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Signup_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
	
	//Check first if already have signup and waiting only for activation
	function is_already_signedup($user_email){
		$this->db->where('email', $user_email);
		$this->db->where('hasValidEmail', 0);		
		$query = $this->db->get('user');

		return ( $query->num_rows != 0 ? TRUE : FALSE);
	}
	
	//Add New user
	function add_user($hash_mail, $user_email){
		$data = array(
		   'email' => $user_email,
		   'randomKey' => $hash_mail,
		   'hasValidEmail' => 0
		);		
		$query = $this->db->insert('user', $data); 

		return ( $query ? TRUE : FALSE);		
	}
	
	//Query if Already Activated
	function is_activated($hash_mail){		
		$query = $this->db->get_where('user', array('randomKey' => $hash_mail, 'hasValidEmail' => 1));
		$result = $query->row_array();
		$email = $result['email'];
		
		return ( ! $email ? FALSE : $email );		
	}

	
}


    