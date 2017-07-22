<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_friends extends CI_Model {

	
	function insert($table,$data){
		$this->db->insert($table,$data);

	}

	function update($table,$param,$value,$data){
		$this->db->where($param,$value);
		$this->db->update($table,$data);
	}

	function delete($table,$param,$value){
		$query = $this->db->query("DELETE FROM $table WHERE $param='$value'");
	}

	function select($table){
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get();
	}

	// count data table one condition
	function countdata2c($table,$param1,$param2,$value1,$value2){
		$query = $this->db->query("SELECT * FROM $table WHERE $param1='$value1' AND $param2='$value2'");
		return $query->num_rows();
	}
	
	function unfollow($table,$param1,$param2,$value1,$value2){
		$query = $this->db->query("DELETE FROM $table WHERE $param1='$value1' AND $param2=$value2");
	}

	// get data table one condition
	function getdata1($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

	// get data profile friend by id
	function get_data_profile($id){
		$this->db->where('tutor_id', $id);
		$query = $this->db->get('t_z_profile_tutor');
		
		return $query->result();
	}

	// get data status friend by id
	function get_data_status($id){
		$this->db->where('tutor_id', $id);
		//$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_status.tutor_id', 'left');
		$query = $this->db->get('t_z_status');
		
		return $query->result();
	}

	// get data coment status friend by id
	function get_data_commentfriend($id){
		$this->db->where('tutor_id', $id);
		//$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_status.tutor_id', 'left');
		$query = $this->db->get('t_z_commentstatus');
		
		return $query->result();
	}

	// get data friend by id tutor
	function get_data_by_id($id){
		$this->db->where('tutor_id', $id);
		$query = $this->db->get('t_tutor');
		
		return $query->result();
	}

	// for message page only
	function fetch_your_friends(){
		$this->db->select('*');
		$this->db->from('t_tutor');
		//$this->db->join('t_z_profile_tutor', 't_tutor.tutor_id = t_z_profile_tutor.tutor_id', 'left');
		return $this->db->get();
	}

}
