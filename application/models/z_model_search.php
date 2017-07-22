<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_model_search extends CI_Model {

	public function get_autocomplete($search_data){
		$this->db->select('tutor_name, tutor_photo, tutor_id');
		$this->db->like('tutor_name', $search_data);

		return $this->db->get('t_tutor',10)->result();
	}

	function select(){
		$this->db->select('*');
		$this->db->from('t_tutor');
		return $this->db->get();
	}

	public function record_count_users(){
        
        if($this->search_users){
            $sql = "select *from t_tutor";
        }

        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function setSearch($search_users=''){

        $this->search_users = $search_users;
    }

    public function fetch($limit,$start){
    	
    	if($this->search_users){
        	$sql = "select *from t_tutor";
        }
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

}
