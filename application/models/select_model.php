<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Select_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
    }
		
	function jobfunction_data(){
		$this->db->select('id, description');
		$this->db->order_by("description", "asc"); 
		$query = $this->db->get('jobfunction');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->description));
		}		
		return $data;
	}
	
	function jobexperience_data(){
		$this->db->select('id, description');
		$this->db->order_by("description", "asc"); 
		$query = $this->db->get('experiencelevel');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->description));
		}		
		return $data;
	}
	
	function jobtype_data(){		
		$this->db->select('id, description');
		$this->db->order_by("description", "asc"); 
		$query = $this->db->get('jobtype');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->description));
		}		
		return $data;
	}
	
	function companysize_data(){
		$this->db->select('id, description');
		$this->db->order_by("id", "asc"); 
		$query = $this->db->get('companysize');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->description));
		}		
		return $data;		
	}
	
	function companytype_data(){
		$this->db->select('id, description');
		$this->db->order_by("id", "asc"); 
		$query = $this->db->get('companytype');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->description));
		}		
		return $data;	
	}
	
	function country_data(){
		$this->db->select('id, countryName');
		$this->db->order_by("countryName", "asc"); 
		$query = $this->db->get('country');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->countryName));
		}		
		return $data;
	}
	
	function industry_data(){
		$this->db->select('id, description');
		$this->db->order_by("description", "asc"); 
		$query = $this->db->get('industry');
		$data = array();
		foreach ($query->result() as $row)
		{
			array_push($data, array($row->id => $row->description));
		}		
		return $data;			
	}
}


    