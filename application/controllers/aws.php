<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aws extends CI_Controller{

	public function __construct(){
		parent::__construct();		
	}

	public function index(){
		//$this->load->spark('amazon-sdk/0.2.0');
        $s3 = $this->awslib->get_s3();
        $s3->disable_ssl_verification();
        //$result = $s3->list_buckets();
        //echo '<pre>' . print_r($result, TRUE) . '</pre>';		
		
		//Creating bucket
		//Regions [Allowed values: AmazonS3::REGION_US_E1, AmazonS3::REGION_US_W1, AmazonS3::REGION_EU_W1, AmazonS3::REGION_APAC_SE1, AmazonS3::REGION_APAC_NE1]
		$bucket = 'rkrbucketwithsub';//Underscore is not allowed
		if ( ! $s3->if_bucket_exists($bucket))
		{			
			$response = $s3->create_bucket($bucket, AmazonS3::REGION_US_W2);
			if (!$response->isOK()){
				echo 'Could not create `' . $bucket . '`.';
			}
			else{
				echo 'Bucket `' . $bucket . '` created.';
			}
		}
		else
		{
			echo 'Bucket `' . $bucket . '` already exist.';
		}		
	}

	public function s3_upload(){
		$s3 = $this->awslib->get_s3();
        $s3->disable_ssl_verification();        		
		
		//Creating bucket		
		$bucket = 'rkrbucket';//Underscore is not allowed
		if ( ! $s3->if_bucket_exists($bucket))
		{			
			$response = $s3->create_bucket($bucket, AmazonS3::REGION_US_W2);
			if (!$response->isOK()){
				echo 'Could not create `' . $bucket . '`.';
			}
			else{
				echo 'Bucket `' . $bucket . '` created.';
			}
		}
		else
		{
			echo 'Bucket `' . $bucket . '` already exist.';
		}
	}
	
	public function do_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|txt';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = 'file';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());			
			echo $error['error'];
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->model('aws_model');			
			$aws_upload_response = $this->aws_model->upload_file();
			
			if ( ! $aws_upload_response ){
				echo 'Error Occured while uploading the file!';
			}			
		}
	}
	
	function filter_file_list($arr)
	{
		return array_values(array_filter(array_map('file_path', $arr)));
	}

	// Callback used by filter_file_list()
	function file_path($file)
	{
		return !is_dir($file) ? realpath($file) : null;
	}
	
	public function get_files(){
		$this->load->helper('directory');
		$data = directory_map("./uploads/");		
		
		foreach($data as $data_file){
			$data_final['data'][] = array('name' => $data_file, 'type' =>'item');
		}
		
		//$json = json_encode($data_final);
		//echo str_replace('[','',str_replace(']','',$json));
		//return $json_toreturn[0];
		echo "{'for-sale' : {name: 'For Sale', type: 'folder'},'vehicles' : {name: 'Vehicles', type: 'folder'},'rentals' : {name: 'Rentals', type: 'folder'}	,					'real-estate' : {name: 'Real Estate', type: 'folder'}	,					'pets' : {name: 'Pets', type: 'folder'}	,					'tickets' : {name: 'Tickets', type: 'item'}	,					'services' : {name: 'Services', type: 'item'}	,					'personals' : {name: 'Personals', type: 'item'}}";
	}
}
