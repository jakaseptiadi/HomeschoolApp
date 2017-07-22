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

class Z_comment extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_status');	
		$this->load->helper(array('form', 'url'));
		session_start();
	}

	public function index(){
	
	}


	public function add_comment() {

		$insertdata = array(
				'comment' => $this->input->post('title'),
				'id_status' => $this->input->post('id'),
				'tutor_id' => $_SESSION['tutor_id']
				);

		$insertUserData = $this->z_model_status->insert('t_z_comment', $insertdata);
		$show_data= $this->z_model_status->fetch_data_comment('t_z_comment','tutor_id', $_SESSION['tutor_id']);
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

	public function delete_status_tutor(){
		
	}	

	public function add_comment(){
		$insertdata = array(
				'comment' => $this->input->post('comment')
				//'id_status'
				//'id_status' => $_SESSION['tutor_id']
				);

		$insertUserData = $this->z_model_status->insert('t_z_commentstatus', $insertdata);
	}


}
