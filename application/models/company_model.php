<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Company_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
	
	function add_company($data){		
		$this->db->insert('company', $data);
        $companyID = $this->db->insert_id();
        return ( ! $companyID  ? FALSE : $companyID );
	}
}


    