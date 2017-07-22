<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_forum extends CI_Model {

	
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

	function select_all_question($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_forum.tutor_id', 'left');
		$this->db->order_by('date_create','desc');
		return $this->db->get();
	}

	// show all reply count in T_forum page
	function count_comment_discussion($param,$value){
		$this->db->select('id_forum');
		$this->db->from('t_z_commentforum');
		$this->db->where($param,$value);
		$query = $this->db->get();
		return $query->num_rows();
	}

	// fetch data for discussion ORDER BY DATE CREATE
	function fetch_data_discussion($param = NULL, $value = NULL){
		$this->db->select('*');
		$this->db->from('t_z_forum');
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_forum.tutor_id', 'left');
		$this->db->order_by('date_create','desc');


		if (($param != NULL)&&($value != NULL)) {
			$this->db->where($param, $value);
		}
		
		return $this->db->get();
	}

	// FETCH DETAIL DISCUSSION BY ID
	function get_data_detail_by_id($id){
		$this->db->where('id_forum', $id);
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_forum.tutor_id', 'left');
		$query = $this->db->get('t_z_forum');
		
		return $query->result();
	}

	// SHOW COMMENT IN DETAIL DISCUSSION
	function fetch_data_comment_default($id){
		$this->db->select('*');
		$this->db->from('t_z_commentforum');
		$this->db->where('id_forum', $id);
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_commentforum.tutor_id', 'left');
		return $this->db->get();
	}

	// SHOW COMMENT AFTER INPUT COMMENT REALTIME
	function select_data_comment2($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}
}
