<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtutor extends CI_Model {

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

	// login checker 
	function logincheck($table,$param,$value,$param2,$value2,$param3,$value3){
		$query = $this->db->query("SELECT * FROM $table WHERE ($param='$value' OR $param2='$value2') AND $param3='$value3'");
		return $query->num_rows();
	}

	// Get Login Session Data
	function loginsession($table,$param,$value,$param2,$value2,$param3,$value3){
		$query = $this->db->query("SELECT * FROM $table WHERE ($param='$value' OR $param2='$value2') AND $param3='$value3'");
		return $query->row();
	}

	// count data table one condition
	function countdata1c($table,$param,$value){
		$query = $this->db->query("SELECT * FROM $table WHERE $param='$value'");
		return $query->num_rows();
	}

	// get data table one condition
	function getdata1c($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

	// get data table two condition
	function getdata2c($table,$param,$value,$param2,$value2){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		$this->db->where($param2,$value2);
		return $this->db->get();
	}

	// get data table for courses
	function getdata2t($table,$table2,$on1,$on2,$param,$value){
		$this->db->select('*');
		$this->db->from($table.' a');
		$this->db->join($table2.' b','a.'.$on1.' = b.'.$on2,'inner');
		$this->db->where('a.'.$param,$value);
		return $this->db->get();
	}

	function getdatanewres($table,$param,$value,$param2,$value2,$param3,$value3){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		$this->db->where($param2,$value2);
		$this->db->where($param3,$value3);
		return $this->db->get();
	}
}

/* End of file Mtutor.php */
/* Location: ./application/models/Mtutor.php */