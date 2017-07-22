<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_resource extends CI_Model {

	
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

	// for home page only
	function fetch_recent_resource($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_resource.tutor_id', 'left');
		$this->db->order_by('date_create','desc');

		return $this->db->get();
	}

	// fetch data for resource ORDER BY DATE CREATE
	function fetch_data_resource($param = NULL, $value = NULL){
		$this->db->select('*');
		$this->db->from('t_z_resource');
		$this->db->join('t_tutor', 't_tutor.tutor_id = t_z_resource.tutor_id', 'left');
		$this->db->order_by('date_create','desc');


		if (($param != NULL)&&($value != NULL)) {
			$this->db->where($param, $value);
		}
		
		return $this->db->get();
	}

	// fetch data for tutor's resource
	function fetch_data_tutor_resource($table,$param,$value){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($param,$value);
		return $this->db->get();
	}

	// fetch detail resource Tutor data
	function get_data_by_id($id){
		$this->db->where('id_resource', $id);
		$query = $this->db->get('t_z_resource');
		
		return $query->result();
	}

	 function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('t_z_resource');
        //$this->db->where('status','public');
        if(array_key_exists('id',$params) && !empty($params['id'])){
            $this->db->where('id',$params['id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }
}
