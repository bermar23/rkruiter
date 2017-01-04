<?php

class Select extends CI_Controller {	

	public function get_function(){
		$this->load->model('select_model');
		$result = $this->select_model->jobfunction_data();		
		echo $result;
	}
	
	public function get_experience(){
		$this->load->model('select_model');
		$result = $this->select_model->jobexperience_data();		
		echo $result;
	}
	
	public function get_type(){
		$this->load->model('select_model');
		$result = $this->select_model->jobtype_data();		
		echo $result;
	}
	
	public function get_company_size(){
		$this->load->model('select_model');
		$result = $this->select_model->companysize_data();		
		echo $result;
	}
	
	public function get_company_type(){
		$this->load->model('select_model');
		$result = $this->select_model->companytype_data();		
		echo $result;
	}
	
	public function get_country(){
		$this->load->model('select_model');
		$result = $this->select_model->country_data();		
		echo $result;
	}
	
	public function get_industry(){
		$this->load->model('select_model');
		$result = $this->select_model->industry_data();		
		echo $result;
	}
}



