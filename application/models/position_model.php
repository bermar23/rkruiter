<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Description: Login model class
 */

class Position_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function set_position( $data ){
		$this->db->insert('position', $data);
        $positionID = $this->db->insert_id();
        return ( ! $positionID  ? FALSE : $positionID );
	}
	
	public function set_hiring_process( $data, $positionID ){
		foreach($data as $row){
			$row['positionID'] = $positionID;
			//$row['companyID'] = $companyID;
			$row['locationID'] = '';
			$this->db->insert('hiringprocess', $row);
			$hiringProcessID = $this->db->insert_id();			
		}                
	}
	
	public function set_location( $data ){
		$response = $this->db->insert('joblocation', $data);
        $locationID = $this->db->insert_id();
        return ( ! $locationID  ? FALSE : $locationID );
	}
		
	public function get_position( $positionID ){
		$this->db->select('pos.id as positionID,
						  pos.position as position,
						  pos.postingDate as postingDate,
						  pos.description as description,
						  pos.educationAndTraining as educationAndTraining,
						  pos.skillsAndExperience as skillsAndExperience,
						  pos.responsibilities as responsibilities,
						  pos.positionURL as positionURL,
						  pos.jobFunctionID as jobFunctionID,
						  pos.experienceLevelID as experienceLevelID,
						  pos.jobTypeID as jobTypeID,
						  pos.companyID as companyID');
		$this->db->from('position as pos');
		//$this->db->where(array('pos.id' => $positionID, 'pos.companyID' => $companyID));
		$this->db->where(array('pos.id' => $positionID));
		$query = $this->db->get();
		return ( ! $query ? FALSE : $query->row_array() );
	}
	
	public function get_positions( $companyID ){
		$this->db->select('pos.id as positionID,
						  pos.position as position,
						  pos.postingDate as postingDate,
						  pos.description as description,
						  pos.positionURL as positionURL');
		$this->db->from('position as pos');
		$this->db->where(array('pos.companyID' => $companyID));
		$query = $this->db->get();
		return ( ! $query ? FALSE : $query->result() );
	}
	
	public function get_hiring_process( $positionID ){
		$this->db->select('id, sequenceNo, process');
		$this->db->from('hiringprocess');
		$this->db->where(array('positionID' => $positionID));
		$this->db->order_by("sequenceNo", "asc");
		$query = $this->db->get();
		return ( ! $query ? FALSE : $query->result() );
	}
	
	public function get_job_location( $positionID ){
		$this->db->select('com.id as locationID,
						  com.name as companyName,
						  com.description as companyDescription,
						  com.address as companyAddress,
						  com.address2 as companyAddress2,
						  com.city as companyCity,
						  com.state as companyState,
						  com.zip as companyZip,
						  com.phone1 as companyPhone1,
						  com.phone2 as companyPhone2,
						  com.email as companyEmail,
						  com.website as companyWebsite,
						  com.countryID as countryID,
						  com.industryID as industryID,
						  com.companyTypeID as companyTypeID,
						  com.companySizeID as companySizeID');
		$this->db->from('joblocation as com');
		$this->db->where(array('com.positionID' => $positionID));
		$query = $this->db->get();
		return ( ! $query ? FALSE : $query->row_array() );
	}
	
	public function set_position_url( $positionID, $companyID, $position ){
		$positionCode = $companyID . '-'. url_title($position, '-', TRUE) . '-'. str_pad($positionID, 4, '0', STR_PAD_LEFT);
		$positionURL = base_url() . $positionCode;		
		
		$data = array(
					'positionURL' => $positionURL
				);

		$this->db->where('id', $positionID);
		$response = $this->db->update('position', $data);
		//change to rows affected
        return ( ! $this->db->affected_rows() > 0  ? FALSE : $positionCode );
	}
	
	public function set_position_edit( $positionID, $field, $value ){
		
		$data = array(
					$field =>  $value
				);

		$this->db->where('id', $positionID);
		$response = $this->db->update('position', $data);
		//change to rows affected
        return ( ! $this->db->affected_rows() > 0  ? FALSE : $response );
	}
	
	public function set_hiringprocess_edit( $positionID, $value ){
		
		foreach($value as $row){			
			$data = array(
						'sequenceNo' => $row['sequenceNo'],
						'process' => $row['process']						
					);
			$this->db->where( array( 'id' => $row['id'], 'positionID' => $positionID) );
			$this->db->update('hiringprocess', $data);
		}
		//change to rows affected
	}
	
	public function remove_hiringprocess_step( $stepID ){
		$response = $this->db->delete('hiringprocess', array('id' => $stepID)); 
		return ( ! $this->db->affected_rows() > 0  ? FALSE : $response );
	}
	
	public function remove_position( $positionID ){
		$response = $this->db->delete('position', array( 'id' => $positionID ) ); 
		return ( ! $this->db->affected_rows() > 0  ? FALSE : $response );
	}
	
	public function remove_hiringprocess( $positionID ){
		$response = $this->db->delete('hiringprocess', array( 'positionID' => $positionID ) ); 
		return ( ! $this->db->affected_rows() > 0  ? FALSE : $response );
	}	
	
	public function insert_hiringprocess_step($positionID, $sequenceNo, $process){
		
		$row['positionID'] = $positionID;		
		$row['sequenceNo'] = $sequenceNo;
		$row['process'] = $process;
		$row['locationID'] = '';
		$this->db->insert('hiringprocess', $row);
		$hiringProcessID = $this->db->insert_id();		
		
		return ( ! $hiringProcessID  ? FALSE : $hiringProcessID );
	}
	
	public function set_hiringprocess_stepname( $stepID, $stepName ){
		$data = array(					
					'process' => $stepName						
				);
		$this->db->where( array( 'id' => $stepID ) );
		$this->db->update('hiringprocess', $data);		
		return $this->db->affected_rows();
	}
	
	public function set_location_edit( $locationID, $field, $value ){		
		$data = array(
					$field => $value
				);

		$this->db->where( array('id' => $locationID) );
		$response = $this->db->update('joblocation', $data);
		//change to rows affected
        return $this->db->affected_rows();
	}
	
}


    