<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Session_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
	
	function set_session_uservariable($data){
		$this->session->set_userdata($data);
	}
	
}


    