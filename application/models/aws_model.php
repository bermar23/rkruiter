<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Aws_model extends CI_Model {
	
	function __construct(){
        parent::__construct();
		
    }
	
	
	function upload_file(){
		
		//$list_of_files = filter_file_list(glob('./uploads/*'));
		//print_r($list_of_files);
		
		$s3 = $this->awslib->get_s3();
        $s3->disable_ssl_verification();     
		
		//Creating bucket		
		$bucket = 'rkrbucket';//Bucket Name
		if ( ! $s3->if_bucket_exists($bucket) )//Check if Bucket Exist
		{			
			$response = $s3->create_bucket($bucket, AmazonS3::REGION_US_W2);
			if ( ! $response->isOK() ){
				echo 'Could not create `' . $bucket . '`.';
			}
			else{
				echo 'Bucket `' . $bucket . '` created.';
			}
		}
		else
		{
			$individual_filenames = array();
			foreach($files as $each_file){
				$file = './uploads/'.$each_file;//filename and path of the file				
				$filename = explode('/', $file);//Explode path to get the filename				
				$filename = array_pop($filename);//filename of the file
				$individual_filenames[] = $filename;
				$s3->batch()->create_object($bucket, $filename, array('fileUpload' => $file));//Stage batch before upload
			}
			
			$file_upload_response = $s3->batch()->send();//upload batch
			if ( $file_upload_response->areOK() )
			{
				echo '-----------<br/>';
				foreach ($individual_filenames as $each_filename)
				{
					echo $s3->get_object_url($bucket, $each_filename, '5 minutes') . PHP_EOL . PHP_EOL.'<br/>';//Get the file url (This will expire)
				}
				echo '-----------<br/>';
				$aws_response = TRUE;
			}
			else{
				$aws_response = FALSE;
			}
			
		}
	}
}


    