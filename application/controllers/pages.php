<?php

class Pages extends CI_Controller {
	
	function __construct(){
			parent::__construct();
			$this->authenticate();
	}
	
	public function index(){		
			$this->load->view('templates/header');
			$this->load->view('home_view');
			$this->load->view('templates/footer');			
	}
	
	public function dashboard(){		
			$this->load->view('templates/header');
			$this->load->view('dashboard_view');
			$this->load->view('templates/footer');			
	}
	
	public function home(){		
			$this->load->view('templates/header');
			$this->load->view('dashboard_view');
			$this->load->view('templates/footer');			
	}
	
	/*public function settings(){		
			$this->load->view('templates/header');
			$this->load->view('setting_view');
			$this->load->view('templates/footer');			
	}*/
	
	public function setpassword(){					
			$this->load->view('setpassword_view');			
	}
	
	public function upload(){		
			$this->load->view('templates/header');
			$this->load->view('upload_view');
			$this->load->view('templates/footer');			
	}
	
	public function files(){		
			$this->load->view('templates/header');
			$this->load->view('file_view');
			$this->load->view('templates/footer');			
	}
	
	function authenticate()
	{
		if (!$this->session->userdata('username'))
		{
			redirect('login');
		}
	}
	
}



