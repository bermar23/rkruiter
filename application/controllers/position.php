<?php

class Position extends CI_Controller {	
	
	function __construct(){
			parent::__construct();
			$this->authenticate();
	}
	
	public function index(){
		$this->load->model('position_model');
		$companyID = $this->session->userdata('companyID');
		$data['positionAll'] = $this->position_model->get_positions( $companyID );
		$this->load->view('templates/header', $data);
		$this->load->view('position_view', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function newpos(){
		$this->load->model('select_model');
		//Dropdown Datasources
		$data['select_jobfunction'] = $this->select_model->jobfunction_data();
		$data['select_jobexperience'] = $this->select_model->jobexperience_data();
		$data['select_jobtype'] = $this->select_model->jobtype_data();		
		$data['select_companysize'] = $this->select_model->companysize_data();
		$data['select_companytype'] = $this->select_model->companytype_data();
		$data['select_country'] = $this->select_model->country_data();
		$data['select_industry'] = $this->select_model->industry_data();
		
		$this->load->view('templates/header', $data);
		$this->load->view('newpos_view', $data);
		$this->load->view('templates/footer', $data);	
	}
	
	public function viewpos( $code ){//$positionID
		$codeExploded = explode('-', $code);
		$companyID = $codeExploded[0];
		$positionID = intval(end($codeExploded));
		
		$this->load->model('position_model');
		
		$data['positionData'] = $this->position_model->get_position( $positionID );///to check 
		$data['hiringProcessData'] = $this->position_model->get_hiring_process( $positionID );
		$data['locationData'] = $this->position_model->get_job_location( $positionID );
		
		if( ! $data['positionData'] == FALSE ){
			
			$this->load->model('select_model');
			
			//Dropdown Datasources
			$data['select_jobfunction'] = $this->select_model->jobfunction_data();
			$data['select_jobexperience'] = $this->select_model->jobexperience_data();
			$data['select_jobtype'] = $this->select_model->jobtype_data();		
			$data['select_companysize'] = $this->select_model->companysize_data();
			$data['select_companytype'] = $this->select_model->companytype_data();
			$data['select_country'] = $this->select_model->country_data();
			$data['select_industry'] = $this->select_model->industry_data();
			
			$this->load->view('templates/header', $data);
			$this->load->view('viewpos_view', $data);
			$this->load->view('templates/footer', $data);		
		}
		else{
			show_404();			
		}
	}

	public function add_position(){
		$this->load->model('position_model');
		$positionData = $this->input->post('position');
		$hiringProcessData = $this->input->post('hiringProcess');
		$locationData = $this->input->post('location');
		
		$positionData[0]['postingDate'] = date("Y-m-d", strtotime($positionData[0]['postingDate']));
		$companyID = $this->session->userdata('companyID');
		$positionData[0]['companyID'] = $companyID;
		
		//Process new position Data
		$this->db->trans_begin();
		$positionID = $this->position_model->set_position($positionData[0]);
		$response['positionID'] = $positionID;
		$locationData[0]['positionID'] = $positionID;
		$locationData[0]['companyID'] = $companyID;
		$this->position_model->set_location($locationData[0]);				
		$this->position_model->set_hiring_process($hiringProcessData, $positionID, $companyID);
		$response['positionCode'] = $this->position_model->set_position_url($positionID, $companyID, $positionData[0]['position']);
		
		if ( $this->db->trans_status() === FALSE )
		{
			$this->db->trans_rollback();
			echo json_encode(array('status' => 'Error'));
		}
		else
		{	
			$this->db->trans_commit();
			echo json_encode(array('status' => 'Success', 'response' => $response));
		}
	}
	
	public function delete_position(){
		$this->load->model('position_model');
		$positionID = $this->input->post('positionID');
		
		//Process Position Deletion
		$this->db->trans_begin();
		$response['positionResponse'] = $this->position_model->remove_position( $positionID );
		$response['hiringprocessResponse'] = $this->position_model->remove_hiringprocess( $positionID );
		
		if ( $this->db->trans_status() === FALSE || $response['positionResponse'] === FALSE  || $response['hiringprocessResponse'] === FALSE )
		{
			$this->db->trans_rollback();
			echo json_encode(array('status' => 'Error'));
		}
		else
		{	
			$this->db->trans_commit();
			echo json_encode(array('status' => 'Success', 'response' => $response));
		}
	}
	
	public function edit_position_editable(){		
		$positionID = $this->input->post('pk');
		
		if( ! empty($positionID) ){
			$this->load->model('position_model');
			$field = $this->input->post('name');
			$value = $this->input->post('value');
			
			$this->db->trans_begin();		
			$response = $this->position_model->set_position_edit($positionID, $field, $value);
			
			if ( $this->db->trans_status() === FALSE )
			{
				$this->db->trans_rollback();
				echo 'Error';
			}
			else
			{	
				$this->db->trans_commit();
				echo 'Success';
			}
		}
		else{
			echo 'Error';
		}
	}
	public function edit_position_hiringprocess(){
		$positionID = $this->input->post('positionID');		
		
		if( ! empty( $positionID ) ){
			$this->load->model('position_model');
			$value = $this->input->post('value');
			
			$this->db->trans_begin();		
			$this->position_model->set_hiringprocess_edit($positionID, $value);
			
			if ( $this->db->trans_status() === FALSE )
			{
				$this->db->trans_rollback();
				echo 'Error';
			}
			else
			{	
				$this->db->trans_commit();
				echo 'Success';
			}
		}
		else{
			echo 'Error';
		}	
	}
	
	public function edit_location_editable(){		
		$locationID = $this->input->post('pk');
		
		if( ! empty( $locationID ) ){
			$this->load->model('position_model');
			$field = $this->input->post('name');
			$value = $this->input->post('value');
			
			$this->db->trans_begin();		
			$response = $this->position_model->set_location_edit( $locationID, $field, $value );
			
			if ( $this->db->trans_status() === FALSE || $response <= 0 )
			{
				$this->db->trans_rollback();
				echo 'Error';
			}
			else
			{	
				$this->db->trans_commit();
				echo 'Success';
			}
		}
		else{
			echo 'Error';
		}
	}
	
	public function delete_hiringprocess_step(){		
		$stepID = $this->input->post('id');
		
		if( ! empty($stepID) ){
			$this->load->model('position_model');
			
			$this->db->trans_begin();		
			$response = $this->position_model->remove_hiringprocess_step($stepID);
			
			if ($response !== FALSE)
			{
				$this->db->trans_commit();
				echo $stepID;
			}
			else
			{	
				$this->db->trans_rollback();
				echo 'Error';
			}
		}
		else{
			echo 'Error';
		}
	}
	
	public function add_hiringprocess_step(){						
		$positionID = $this->input->post('positionID');
		$sequenceNo = $this->input->post('sequenceNo');
		$process = $this->input->post('process');
		
		if( ! empty($positionID) && ! empty($sequenceNo) ){
			$this->load->model('position_model');
			
			$this->db->trans_begin();		
			$response = $this->position_model->insert_hiringprocess_step($positionID, $sequenceNo, $process);
			
			if ( $response === FALSE )
			{
				$this->db->trans_rollback();
				echo 'Error';
			}
			else
			{	
				$this->db->trans_commit();
				echo $response;
			}
		}
		else{
			echo 'Error';
		}
	}
	
	public function edit_hiringprocess_stepname(){				
		$stepName = $this->input->post('stepName');
		$stepID = $this->input->post('stepID');
		
		if( ! empty( $stepID ) && ! empty( $stepName ) ){
			$this->load->model('position_model');
			
			$this->db->trans_begin();		
			$response = $this->position_model->set_hiringprocess_stepname($stepID, $stepName);
			
			if ( $this->db->trans_status() === FALSE || $response <= 0 )
			{
				$this->db->trans_rollback();
				echo 'Error';
			}
			else
			{	
				$this->db->trans_commit();
				echo $response;
			}
		}
		else{
			echo 'Error';
		}
	}

	function authenticate()
	{
		if (!$this->session->userdata('username'))
		{
			redirect('login');
		}
	}
	
}



