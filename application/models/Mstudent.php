<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstudent extends CI_Model {

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

}

/* End of file Mstudent.php */
/* Location: ./application/models/Mstudent.php */