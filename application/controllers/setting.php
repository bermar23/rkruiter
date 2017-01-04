<?php

class Setting extends CI_Controller {
	
	function __construct(){
			parent::__construct();
			$this->authenticate();
	}
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('setting_view');
		$this->load->view('templates/footer');	
	}
	
	public function initial_userinfo(){
		$firstname = trim( $this->input->post('firstname') );
		$lastname = trim( $this->input->post('lastname') );
		$password = trim( $this->input->post('password') );
		$initialCompanyName = $firstname . ' ' . $lastname . ' Company'; //Initial Company Name
		$this->load->library( 'encrypt' );
		$encrypt_password = $this->encrypt->encode( $password ); //Encrypt password
		$userName = $this->session->userdata('username');
		
		$this->load->model( 'user_model' );
		$this->load->model( 'company_model' );
		
		$this->db->trans_start();
		$companyID = $this->company_model->add_company( array( 'name' => $initialCompanyName ) );
		
		$userData = array(
					   'firstName' => $firstname,
					   'lastName' => $lastname,
					   'password' => $encrypt_password,
					   'companyID' => $companyID,
					   'hasValidEmail' => 1
					);
		
		$userUpdateResponse = $this->user_model->init_set_userinfo( $userData, $userName );
		
		if( ! $this->db->trans_complete() || $userUpdateResponse === FALSE ){
			redirect('setpassword');
		}
		
		//To add dataverification if there is data in $userInfoData
		$userInfoData = $this->user_model->get_userinfo($userName);				
		$this->load->model('session_model');
		$this->session_model->set_session_uservariable( $userInfoData );
		$this->load->model('login_model');
		$this->login_model->activate_user();
		redirect('position/new');
	}
	
	function authenticate()
	{
		if (!$this->session->userdata('username'))
		{
			redirect('login');
		}
	}
	
}



