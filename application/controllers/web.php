<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct(){
		parent::__construct();
		session_start();
	}

	public function index(){
		$this->load->view('w_header');
		$this->load->view('w_index');
		$this->load->view('w_footer');
	}

	public function signup(){
		if ($this->input->post('signup')) {
			// get the value from signup form
			$newtutor['tutor_name'] 		= $this->input->post('name');
			$newtutor['tutor_username'] 	= $this->input->post('username');
			$newtutor['tutor_email'] 		= $this->input->post('email');
			$newtutor['tutor_password'] 	= $this->input->post('password');

			// to make sure the username and email is available
			$usernamecheck 	= $this->Mweb->availablecheck('t_tutor', 'tutor_username', $newtutor['tutor_username']);
			$emailcheck 	= $this->Mweb->availablecheck('t_tutor', 'tutor_email', $newtutor['tutor_email']);

			// to check email and username availability
			if ($usernamecheck!=0 || $emailcheck!=0){ // If username or email is already taken
				if ($usernamecheck!=0) { // If username is already taken
					$this->session->set_flashdata('failed', 'Sorry! Username is already taken.');
				}else{ // If email is already taken
					$this->session->set_flashdata('failed', 'Sorry! Email is already taken.');
				}
				$this->load->view('w_header');
				$this->load->view('w_index',$newtutor);
				$this->load->view('w_footer');
			}
			else {	//if username and email available
				$this->Mweb->insert('t_tutor',$newtutor);
				$this->session->set_flashdata('success', 'Congratulations! You can login with your account now.');
				redirect(site_url(''),'refresh');
			}

		// if nothing post
		}else{
			redirect(site_url(''),'refresh');
		}
	}
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */