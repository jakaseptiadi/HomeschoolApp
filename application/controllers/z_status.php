<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// SESSION LIST
// $_SESSION['nav_stulist']
// $_SESSION['nav_stuselect_id']
// $_SESSION['nav_stuselect_name']

// $_SESSION['tutor_id']
// $_SESSION['tutor_name']
// $_SESSION['tutor_email']
// $_SESSION['tutor_photo']

class Z_status extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_status');	
		$this->load->helper(array('form', 'url'));
		session_start();
	}

	public function index(){
	
	}


	public function add_status_tutor() {

		$insertdata = array(
				'status_label' => $this->input->post('label'),
				'status_description' => $this->input->post('description'),
				'tutor_id' => $_SESSION['tutor_id']
				);

		$insertUserData = $this->z_model_status->insert('t_z_status', $insertdata);
		$show_data= $this->z_model_status->fetch_data_status('t_z_status','tutor_id', $_SESSION['tutor_id']);
		$data_amount = count($show_data->result());
		$i = 0;
		// String With JSON Format
		echo '{"data":[';

		foreach($show_data->result() as $row){
			echo "{";
			echo '"label":"'.$row->status_label.'",';
			echo '"description":"'.$row->status_description.'",';
			echo '"date":"'.$row->date_create.'",';
			echo '"name":"'.$_SESSION['tutor_name'].'",';
			echo '"photo":"'.base_url($_SESSION['photo_profile']).'"';
			echo "}";
			
			$i+=1;
			if ($i < $data_amount) {
				echo ",";
			}
		}

		echo ']}';	
	}

	public function delete_status_tutor($id){
		$data = $this->z_model_status->delete('t_z_status', $id);
		redirect('z_view_tutor/t_profile/'.$id,'refresh');
	}

	public function check_like(){
	
	}

	public function add_comment_status(){
		$insertdata = array(
				'comment' => $this->input->post('comment'),
				'id_status' => $this->input->post('id'),
				'tutor_id' => $_SESSION['tutor_id']
				);

		$insertUserData = $this->z_model_status->insert('t_z_commentstatus', $insertdata);
		$show_data= $this->z_model_status->select_data_comment2('t_z_commentstatus','id_status', $insertdata['id_status'] );
		$data_amount = count($show_data->result());
		$i = 0;
		// String With JSON Format
		echo '{"data":[';

		foreach($show_data->result() as $row){
			echo "{";
			echo '"comment":"'.$row->comment.'",';
			echo '"date":"'.$row->date_create.'",';
			echo '"name":"'.$_SESSION['tutor_name'].'",';
			echo '"photo":"'.base_url($_SESSION['photo_profile']).'"';
			echo "}";
			
			$i+=1;
			if ($i < $data_amount) {
				echo ",";
			}
		}

		echo ']}';
	}

	public function savelikes(){
		$ipaddress = $_SERVER['REMOTE_ADDR'];
		$status_id = $this->input->post('Status_id'); //from javascript


		$fetchlikes = $this->db->query('select likes from t_z_status where id_status="'.$status_id.'"');
		$result = $fetchlikes->result();

		$checklikes = $this->db->query('select * from t_z_likestatus 
			                            where id_status="'.$status_id.'" 
			                            and ipaddress = "'.$ipaddress.'"');
		$resultchecklikes = $checklikes->num_rows();

		if($resultchecklikes == '0' ){
			if($result[0]->likes == "" || $result[0]->likes == "NULL"){
				$this->db->query('update t_z_status set likes = 1 where id_status="'.$status_id.'"');
			}else{
				$this->db->query('update t_z_status set likes = likes+1 where id_status="'.$status_id.'"');
			}

			$data = array('id_status'=>$status_id, 'ipaddress'=>$ipaddress, 'tutor_id'=>$_SESSION['tutor_id']);
			$this->db->insert('t_z_likestatus', $data);
		}else{
			$this->db->delete('t_z_likestatus', array('id_status'=>$status_id,
												  'ipaddress'=>$ipaddress));
			$this->db->query('update t_z_status set likes=likes-1 where id_status="'.$status_id.'"');
		}

			$this->db->select('likes');
			$this->db->from('t_z_status');
			$this->db->where('id_status',$status_id);
			$query = $this->db->get();
			$result = $query->result();

			echo $result[0]->likes;
	}


}
