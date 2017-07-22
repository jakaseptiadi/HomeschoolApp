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

class Z_tutor extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_tutor');
		$this->load->model('z_model_status');	
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

			$data['fetch_data'] = $this->z_model_tutor->select('t_tutor');

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/t_home', $data);
			$this->load->view('z_view_tutor/t_footer');
			
		}else{
			redirect(site_url(''),'refresh');
		}
	}
	
	// PROFILE TUTOR
	public function profile(){
		if (isset($_SESSION['tutor_id'])) {
			
			$data["profile_data"] = $this->z_model_tutor->fetch_data_profile('t_z_profile_tutor','tutor_id', $_SESSION['tutor_id']);
			$data["status_data"] = $this->z_model_status->fetch_data_status('t_z_status','tutor_id', $_SESSION['tutor_id']);
			$data["comment_data"] = $this->z_model_status->fetch_data_comment_default();
			//$data["count_coment_status"] = $this->z_model_status->count_comment_status(); 

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/t_profile', $data);
			$this->load->view('z_view_tutor/t_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}
	
	// SETTINGS PROFILE TUTOR
	public function settings(){
		if(isset($_SESSION['tutor_id'])){

			$data["fetch_data"] = $this->z_model_tutor->fetch_data_profile('t_z_profile_tutor','tutor_id', $_SESSION['tutor_id']);
			
			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/profile/t_settings', $data);
			$this->load->view('z_view_tutor/t_footer');
		}
	}
	
	// EDIT PROFILE TUTOR
	public function edit_profile_tutor(){
		

		//LEFT from database field        RIGHT from get the value from settings form
		$editprofile['username'] 			= $this->input->post('tutor_username');
		//$editprofile['born'] 				= $this->input->post('tutor_born');
		$editprofile['gender'] 				= $this->input->post('tutor_gender');
		$editprofile['religion'] 			= $this->input->post('tutor_religion');
		$editprofile['last_education'] 		= $this->input->post('tutor_leducation');
		$editprofile['profession'] 			= $this->input->post('tutor_profession');
		$editprofile['location'] 			= $this->input->post('tutor_location');
		$editprofile['about'] 				= $this->input->post('tutor_about');
		//$editprofile['tutor_id'] 			= $_SESSION['tutor_id'];

		//check id profile
		//$data['cek_id'] = $this->z_model_tutor->getdata1('t_z_profile_tutor', 'id_profile', $_SESSION['tutor_id'])->num_rows();
		$data = $this->z_model_tutor->get_data_by_id($id);
		//print_r($data); 
		//die;

			if($data > 0){
				$this->z_model_tutor->update('t_z_profile_tutor', 'id_profile', $_SESSION['tutor_id'], $editprofile);
			
				$this->session->set_flashdata('success', 'Your profile has been updated');
				redirect('z_tutor/settings','refresh');
			}else{
				$this->z_model_tutor->insert('t_z_profile_tutor', $editprofile);

				$this->session->set_flashdata('success', 'Your profile has been created');
				redirect('z_tutor/settings','refresh');
			}
	}

	// CHANGE AVATAR TUTOR
	public function change_avatar(){
		
			$config['upload_path']          = './uploads/tutor/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10240;//10 MegaByte
        	$config['max_width']            = 1024;
        	$config['max_height']           = 768;


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('change_photo'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('z_view_tutor/t_header');
					$this->load->view('z_view_tutor/t_settings', $error);
					$this->load->view('z_view_tutor/t_footer');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $editavatar = $this->upload->data();
          			$file = $editavatar['file_name'];
                    
                    $insertdata = array('photo' => $file);

                    $insertUserData = $this->z_model_tutor->insert('t_z_profile_tutor', $insertdata);

                    $this->session->set_flashdata('success', 'Your avatar has been updated');
                    $this->load->view('z_view_tutor/t_header');
					$this->load->view('z_view_tutor/t_settings', $insertUserData);
					$this->load->view('z_view_tutor/t_footer');
            }
	}
/*
	public function add_status() {

		$insertdata = array(
				'status_title' => $this->input->post('title'),
				'status_description' => $this->input->post('description'),
				'tutor_id' => $_SESSION['tutor_id']
				);

		$insertUserData = $this->z_model_tutor->insert('t_z_status', $insertdata);
		$show_data= $this->z_model_tutor->fetch_data_status('t_z_status','tutor_id', $_SESSION['tutor_id']);
		$data_amount = count($show_data->result());
		$i = 0;
		// String With JSON Format
		echo '{"data":[';

		foreach($show_data->result() as $row){
			echo "{";
			echo '"title":"'.$row->status_title.'",';
			echo '"description":"'.$row->status_description.'",';
			echo '"name":"'.$_SESSION['tutor_name'].'",';
			echo '"photo":"'.$_SESSION['tutor_photo'].'"';
			echo "}";
			
			$i+=1;
			if ($i < $data_amount) {
				echo ",";
			}
		}

		echo ']}';	
	}*/
	
}
