<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Z_message extends CI_Controller {
	
	public $user;

	public function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
        $this->load->helper(array('url', 'form'));
         
        $this->load->model('z_model_message');   
		session_start();
	}

	public function index(){
		if (isset($_SESSION['tutor_id'])) {

			$this->load->view('z_view_tutor/t_header');
            $this->load->view('z_view_friends/chat', $data);
            $this->load->view('z_view_tutor/t_footer');
		}
	}
	
	public function message_view(){
		if (isset($_SESSION['tutor_id'])) {

			//CHECK LOGIN AS TUTOR OR STUDENT
			$param1 = ($_SESSION['type_id']=='idtutor'?'tutor_id':'student_id'); // IF versi pendek
			$value1 = @($param1=='tutor_id'?$_SESSION['tutor_id']:$_SESSION['student_id']);

			if($param1 == 'tutor_id'){
				$data['fetch_friends'] = $this->z_model_message->fetch_friends($value1);
			}	


			$data['fetch_friends'] = $this->z_model_message->fetch_friends($value1);
			
			$this->load->view('z_view_tutor/t_header');
            $this->load->view('z_view_tutor/message/t_message', $data);
            $this->load->view('z_view_tutor/t_footer');
		}
	}

	public function detail_message($id){
		if (isset($_SESSION['tutor_id'])) {

			//CHECK LOGIN AS TUTOR OR STUDENT
			$param1 = ($_SESSION['type_id']=='idtutor'?'tutor_id':'student_id'); // IF versi pendek
			$value1 = @($param1=='tutor_id'?$_SESSION['tutor_id']:$_SESSION['student_id']);

			if($param1 == 'tutor_id'){
				$data['fetch_friends'] = $this->z_model_message->fetch_friends($value1);
			}	
			
			$data['fetch_friends'] = $this->z_model_message->fetch_friends($value1);
			
			$data['fetch_message'] = $this->z_model_message->fetch_data_message($id);


			$this->load->view('z_view_tutor/t_header');
            $this->load->view('z_view_tutor/message/t_detail_message', $data);
            $this->load->view('z_view_tutor/t_footer');
		}
	}

	
}
