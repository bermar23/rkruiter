<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Security model restrictions
 */

class Security_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
	
	function init_set_userinfo( $data, $userName ){		
		return ( $this->db->affected_rows() ? TRUE : FALSE );
	}	
	
}


    