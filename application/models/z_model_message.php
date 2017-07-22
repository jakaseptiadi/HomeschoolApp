<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_message extends CI_Model {

	
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

	function fetch_friends($value1){
		$this->db->select('*');
		$this->db->from(['t_z_relationship', 't_tutor']);
		$this->db->where('t_z_relationship.user_id ='.$value1.' AND t_z_relationship.user_id2 = t_tutor.tutor_id');

		return $this->db->get();
	}
	
	// show meessage (message page only)
	function fetch_data_message($id){
		$this->db->select('*');
		$this->db->from('t_z_message');
		$this->db->where('t_z_message.id_receiver ='.$id.' OR t_z_message.id_sender ='.$id);
		//$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_message.tutor_id', 'left');
		return $this->db->get();
	}
}
