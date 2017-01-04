<?php

class Login extends CI_Controller {	

	public function index(){
		if ( ! $this->session->userdata('username') )
		{
			$this->load->view('login_view');
		}
		else{
			redirect('dashboard');
		}
	}
	
	/**
	 * Sign-up process
	 *
	 * @param = $this->input->post('user_email')
	 * 
	 * description = Process user email and send validation link to the user's email address, and wait for the validation link to be acticated
	 * 
	 **/
	
	public function signup_process(){		
		$this->load->library('encrypt');		
		$user_email = $this->input->post('user_email');		
		$hash_mail = $this->encrypt->sha1($user_email);;
		
		//Check if already signed up
		$this->load->model('signup_model');
		$is_already_signedup = $this->signup_model->is_already_signedup($user_email);
		
		if ( ! $is_already_signedup ){
			$user_added = $this->signup_model->add_user($hash_mail, $user_email);
			
			if( $user_added ){
				$this->load->model('email_model');
				$email_response = $this->email_model->signup_mail($user_email, $hash_mail);
				
				$response_message = _('Check_your_email_for_activation_link');			
				echo json_encode(array('response_message' => $response_message, 'response' => 'Success'));
			}
			else{
				$response_message = _('Please_try_again');			
				echo json_encode(array('response_message' => $response_message, 'response' => 'Error'));
			}
			
		}
		else{
			$response_message = _('Already_signed_up_forgot_password');			
			echo json_encode(array('response_message' => $response_message, 'response' => 'Error'));
		}
	}
	
	public function signup_activate($hash_mail){				
		if( $hash_mail != ''){
			$this->load->model('signup_model');
			$is_activated = $this->signup_model->is_activated($hash_mail);						
			if( ! $is_activated ){
				
				//Setting Session Username
				$this->load->model('user_model');
				$data = $this->user_model->get_userinfo_hash($hash_mail);				
				$this->load->model('session_model');
				$this->session_model->set_session_uservariable($data);
				
				redirect('setpassword');
			}
			else{				
				redirect('login');
			}			
		}
		else{
			show_404();			
		}		
	}
	
	public function login_process(){		
		$this->load->library('encrypt');
		
		$this->load->model('login_model');
		$response = $this->login_model->login_verify();
		
		if ( ! $response )
		{			
			$response_message = _('Please_try_again');			
			echo json_encode(array('response_message' => $response_message, 'response' => 'Error'));
		}
		else {			
			$this->login_model->activate_user();
			$response_message = _('Successfully_logged-in');
			
			//Set Session
			$this->load->model('session_model');
			$this->session_model->set_session_uservariable($response);
			
			echo json_encode(array('response_message' => $response_message, 'response' => 'Success'));			
		}		
	}
	
	public function forgotpassword_process(){		
		$this->load->library('encrypt');
		$this->load->model('email_model');
		$email_response = $this->email_model->forgot_password();		
		if ( ! $email_response )
		{			
			$response_message = _('Please_try_again');			
			echo json_encode(array('response_message' => $response_message, 'response' => 'Error'));
		}
		else {			
			$response_message = _('Your_password_has_been_sent_to_your_eMail');			
			echo json_encode(array('response_message' => $response_message, 'response' => 'Success'));
		}
	}
	
	public function logout(){
		$this->load->model('login_model');
		$this->login_model->deactivate_user();
		$this->session->sess_destroy();
		redirect('login');
	}
	
}



