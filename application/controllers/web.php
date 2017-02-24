<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct() {
        parent:: __construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('session');
		session_start();
		if (isset($_SESSION['email_tutor'])) {
        	redirect('tutor','refresh');
        }
    }
	// BIG MENU
	public function index(){
		$this->load->view('web_header');
		$this->load->view('web_landing');
		$this->load->view('web_footer');
	}

	public function cobagrocery()
	{
		$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('tb_siswa');
			$crud->set_relation('kode_paket','tb_mapel','kode_mapel');
			$crud->display_as('kode_paket','nama mapel');
			$crud->set_subject('Siswa');
			$crud->required_fields('email_siswa');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

		$this->load->view('view_grocey',$output);
		$this->load->view('web_footer');
	}

	public function signup(){
		$this->load->view('web_header');
		$this->load->view('web_signup');
		$this->load->view('web_footer');
		
		if ($this->input->post('email')) {
			$add['email_tutor'] = $this->input->post('email');
			$add['password_tutor'] = $this->input->post('password');
			$add['nama_tutor'] = $this->input->post('nama');
			$email = $add['email_tutor'];
			$count = $this->m_web->count_condition('tb_tutor','email_tutor',$email);
			if($count==0){
				$this->m_web->insert_db('tb_tutor',$add);
				redirect('web/logintutor');
			}else{
				redirect('web/signup');
			}
		}
	}


	public function logintutor()
	{
		if ($this->input->post('email')) {
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$count = $this->m_web->count_2condition('tb_tutor','email_tutor',$email,'password_tutor',$pass);
			if($count==0){
				redirect('web/logintutor');
			}else{
				$_SESSION['email_tutor']=$email;
				$_SESSION['password_tutor']=$pass;
				redirect('tutor');
			}
		}
		$this->load->view('web_header');
		$this->load->view('web_logintutor');
		$this->load->view('web_footer');
	}


}