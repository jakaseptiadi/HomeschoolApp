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

class Z_home extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_tutor');
		$this->load->model('z_model_status');	
		$this->load->model('z_model_resource');	
		$this->load->model('z_model_forum');	
		$this->load->helper(array('form', 'url'));
		session_start();
	}

	public function index(){
		if (isset($_SESSION['tutor_id'])) {

			redirect('z_tutor/profile','refresh');
		}
	}
	
	// HOME BERANDA
	public function home(){
		if (isset($_SESSION['tutor_id'])) {

			// Fetch Data 
			$data['status_data'] = $this->z_model_status->select_status_home();
			$data["comment_data"] = $this->z_model_status->fetch_data_comment_default();
			$data['recent_resource'] = $this->z_model_resource->fetch_recent_resource('t_z_resource');
			$data['discussion_data'] = $this->z_model_forum->select_all_question('t_z_forum');

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/t_home', $data);
			$this->load->view('z_view_tutor/t_footer');
			
		}else{
			redirect(site_url(''),'refresh');
		}
	}
	
}
