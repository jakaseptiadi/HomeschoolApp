<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_status extends CI_Model {

	
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

	function countdata1c($table,$param,$value){
		$query = $this->db->query("SELECT * FROM $table WHERE $param='$value'");
		return $query->num_rows();
	}

	function check_like_unlike($param,$value){
		$this->db->select('*');
		$this->db->from('t_z_likestatus');
		$this->db->where($param,$value);
		$query = $this->db->get();
		return $query->num_rows();
	}

	// show all reply count
	function count_comment_status($param,$value){
		$this->db->select('id_comment');
		$this->db->from('t_z_commentstatus');
		$this->db->where($param,$value);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function select_status_home(){
		$this->db->select('*');
		$this->db->from('t_z_status');
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_status.tutor_id', 'left');
		$this->db->order_by('date_create','desc');
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
	
	// show comment default (when see all comment without action)
	function fetch_data_comment_default(){
		$this->db->select('*');
		$this->db->from('t_z_commentstatus');
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_commentstatus.tutor_id', 'left');
		return $this->db->get();
	}

	// show comment after input comment realtime
	function select_data_comment2($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

	
}
