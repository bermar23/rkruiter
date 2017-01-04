<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Email_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
		
		$this->load->library('email');
		$this->email->initialize(array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'smtp.sendgrid.net',
		  'smtp_user' => 'rKruiter',
		  'smtp_pass' => 'rKruiter1802',
		  'smtp_port' => 587,
		  'crlf' => "\r\n",
		  'newline' => "\r\n",
		  'mailtype' => 'html'
		));
    }
	
	function forgot_password(){
		$user_email = trim($this->input->post('user_email'));
		
		//Get the name and the password of the user
		$result_query = $this->db->query("SELECT 
											lastname, firstname, password
										FROM
											user
										WHERE
											user.email = '" . $user_email . "';");
		
		if( $result_query->num_rows == 1 ){
			$row_data = $result_query->row();			
			
			$decoded_password = $this->encrypt->decode($row_data->password);//decode password from database
			
			$data['message'] =  "<p>" . _('Hello') . " " . $row_data->firstname . " " . $row_data->lastname . "</p><br/>" . _('Email_Forgot_Password_Message') . $decoded_password . _('Email_Salutation');
			$email_message = $this->load->view('email/template', $data, TRUE);
			
			//Sending Mail
			$this->email->to($user_email);
			$this->email->from('admin@rkruiter.com', 'rKruiter Team');
			$this->email->subject(_('rKruiter_Password_Retrieval_Subject'));
			$this->email->message($email_message);
			$email_response = $this->email->send();
			
			if( ! $email_response ){
				return FALSE;	
			}
			return TRUE;	
		}
		
		return FALSE;		
	}
	function signup_mail($user_email, $hash_mail){
		$data['message'] =  _('Email_Active_Account_Message') . '<p>' . _('Activation_link') . ': <a href="' . base_url() . 'activate/' . $hash_mail . '">' . base_url() . 'activate/' . $hash_mail . '</a></p><br/>'
							. _('Email_Salutation');
		
		$email_message = $this->load->view('email/template', $data, TRUE);

		//Sending Mail
		$this->email->to($user_email);
		$this->email->from('admin@rkruiter.com', 'rKruiter Team');
		$this->email->subject('rKruiter Confirmation');
		$this->email->message($email_message);
		$email_response = $this->email->send();
		
		if( ! $email_response ){
			return FALSE;	
		}
		return TRUE;
	}
}


    