<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_tutor extends CI_Model {

	
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

	function fetchuser($table,$param){
		$this->db->select('*');
		$this->db->from('t_tutor');
		$this->db->where('tutor_name');
		return $this->db->get();
	}

	function get_data_by_id($id){
		$this->db->where('id_profile', $id);
		$query = $this->db->get('t_z_profile_tutor');
		
		return $query->result();
	}

	// get data table one condition
	function getdata1($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

	// available checker for username
	function availablecheck($table,$param,$value){
		$query = $this->db->query("SELECT * FROM $table WHERE $param='$value'");
		return $query->num_rows();
	}


	// fetch profile Tutor data
	function fetch_data_profile($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

	// fetch status Tutor data
	function fetch_data_status($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		$this->db->order_by('date_create','desc');
		return $this->db->get();
	}

	// fetch settings Tutor data
	function fetch_data_settings($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

}
