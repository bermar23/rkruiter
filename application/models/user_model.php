<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: User model class
 */

class User_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
	
	function init_set_userinfo( $data, $userName ){		
		$this->db->where( 'email', $userName );
		$this->db->update( 'user', $data );		
		return ( $this->db->affected_rows() ? TRUE : FALSE );
	}	
	
	function get_userinfo( $userName ){
		$query = $this->db->get_where('user', array('email' => $userName));
		$result = $query->row_array();
		$email = $result['email'];
				
		$data['username'] = $result['email'];
		$data['firstName'] = $result['firstName'];				
		$data['lastName'] = $result['lastName'];
		$data['userType'] = $result['userType'];
		$data['companyID'] =$result['companyID'];
		
		return ( ! $email ? FALSE : $data );	
	}
	
	function get_userinfo_hash( $hash_mail ){
		$query = $this->db->get_where('user', array('randomKey' => $hash_mail));
		$result = $query->row_array();
		$email = $result['email'];
				
		$data['username'] = $result['email'];
		$data['firstName'] = $result['firstName'];				
		$data['lastName'] = $result['lastName'];
		$data['userType'] = $result['userType'];
		$data['companyID'] =$result['companyID'];
		
		return ( ! $email ? FALSE : $data );	
	}
	
}


    