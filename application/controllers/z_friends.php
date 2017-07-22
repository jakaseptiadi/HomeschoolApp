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

class Z_friends extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_friends');	
		$this->load->model('z_model_status');	
		$this->load->helper(array('form', 'url'));
		session_start();
	}

	public function index(){
		if (isset($_SESSION['tutor_id'])) {

			redirect('z_friends/profile','refresh');
		}
	}
	
	// PROFILE FRIENDS
	public function profile($id){
		if (isset($_SESSION['tutor_id'])) {
			
			//$data["fetch_data"] = $this->z_model_tutor->fetch_data_profile('t_z_profile_tutor','tutor_id', $_SESSION['tutor_id']);
			//$id = $this->uri->segment(3);

			$data['profile_data'] = $this->z_model_friends->get_data_profile($id);
			$data['status_data'] = $this->z_model_friends->get_data_status($id);
			$data['comment_data'] = $this->z_model_friends->get_data_commentfriend($id);
			

			//	relationship
			$data['data'] = $this->z_model_friends->get_data_by_id($id);
			$data['id'] = $id;


			$data['status'] = $this->check_friends($id, $data['data'][0]->type_id); 	//cek pertemanan
			//print_r($data['data'][0]->type_id);
			//die;

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_friends/t_profile_friends', $data);
			$this->load->view('z_view_tutor/t_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}
	
	public function follow($id, $type_id){
		
		$param1 = ($_SESSION['type_id']=='idtutor'?'tutor_id':'student_id'); // IF versi pendek
		$value1 = @($param1=='tutor_id'?$_SESSION['tutor_id']:$_SESSION['student_id']);

		$follow = array(
            'user_id' => $value1,
            'user_id2' => $id
        );
		
		
		$insertData = $this->z_model_friends->insert('t_z_relationship', $follow);
		$data['data'] = $this->z_model_friends->get_data_by_id($id);
		$data['id'] = $id;

		$data['status'] = $this->check_friends($id, $type_id); 	//cek pertemanan

		redirect('z_friends/profile/'.$id,'refresh');
		/*$this->load->view('z_view_tutor/t_header');
		$this->load->view('z_view_friends/t_profile_friends', $data);
		$this->load->view('z_view_tutor/t_footer');*/

	}

	public function check_friends($id, $type_id){

		$param1 = ($_SESSION['type_id']=='idtutor'?'tutor_id':'student_id'); // IF versi pendek
		$param2 = ($type_id=='idtutor'?'tutor_id2':'student_id2'); // IF versi pendek
		
		$value1 = @($param1=='tutor_id'?$_SESSION['tutor_id']:$_SESSION['student_id']);
		$value2 = $id;

		// seperti if diatas 

		/*if($param1==$tutor_id){
			echo $_SESSION['tutor_id'];
		}else{
			echo $_SESSION['student_id'];
		}*/

		$data = $this->z_model_friends->countdata2c('t_z_relationship', 'user_id', 'user_id2', $value1, $value2);

		if($data > 0){
			return 1;
		}else{
			//return FALSE;
			
			$data = $this->z_model_friends->countdata2c('t_z_relationship', 'user_id', 'user_id2', $value2, $value1);

			if($data > 0){
				return 2;
			}else{
				return 0;
			}
		}

	}

	public function unfollow($id, $type_id){

		$param1 = ($_SESSION['type_id']=='idtutor'?'tutor_id':'student_id'); // IF versi pendek
		$param2 = ($type_id=='idtutor'?'tutor_id2':'student_id2'); // IF versi pendek
		
		$value1 = @($param1=='tutor_id'?$_SESSION['tutor_id']:$_SESSION['student_id']);
		$value2 = $id;


		$data = $this->z_model_friends->unfollow('t_z_relationship', 'user_id', 'user_id2', $value1, $value2);

		redirect('z_friends/profile/'.$id,'refresh');

	}

	
	
}
