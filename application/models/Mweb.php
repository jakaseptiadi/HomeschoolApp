<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mweb extends CI_Model {

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

	// available checker for username and email
	function availablecheck($table,$param,$value){
		$query = $this->db->query("SELECT * FROM $table WHERE $param='$value'");
		return $query->num_rows();
	}

	// Get three news
	function getlimit($table,$orderby,$limit){
		$query = $this->db->query("SELECT * FROM $table ORDER BY $orderby DESC LIMIT $limit");
		return $query->result();
	}

	function gettables(){
		$query = $this->db->query("show tables");
		return $query->result();
	}

}

/* End of file Mweb.php */
/* Location: ./application/models/Mweb.php */
