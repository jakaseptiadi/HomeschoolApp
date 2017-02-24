<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutor extends CI_Controller {

	public function __construct() {
        parent:: __construct();
        $this->load->model('m_tutor');
        $this->load->library('session');
        session_start();
        if (!isset($_SESSION['email_tutor'])) {
        	redirect('web/logintutor','refresh');
        }
    }
	// BIG MENU
	public function index(){
		redirect('tutor/dashboard');
	}
	public function dashboard(){
		$email = $_SESSION['email_tutor'];
		$pass = $_SESSION['password_tutor'];
		$data['tutor'] = $this->m_tutor->select_2condition('tb_tutor','email_tutor',$email,'password_tutor',$pass)->result();
		$data['siswa'] = $this->m_tutor->select_condition('tb_siswa','email_tutor',$email)->result();
		$this->load->view('tutor_header');
		$this->load->view('tutor_home',$data);
		$this->load->view('tutor_footer');
	}

	public function logout(){
		unset($_SESSION['email_tutor']);
		unset($_SESSION['password_tutor']);
		redirect("web/logintutor");
	}


	public function myclass($tab){
		$s='b';
		if ($this->input->post('email_siswa')) {
			$s=1;
			$_SESSION['email_siswa']=$this->input->post('email_siswa');
		}else if(!isset($_SESSION['email_siswa'])){
			$s='a';
		}

		if ($s='a') {
			$email_siswa = $_SESSION['email_siswa'];
			$data['siswa'] = $this->m_tutor->select_condition('tb_siswa','email_siswa',$email_siswa)->result();
			$this->load->view('tutor_header');
			switch ($tab) {
				case 'summary':
					$this->load->view('tutor_class_sum',$data);break;
				case 'schedule':
					$this->load->view('tutor_class_sch',$data);break;
				case 'lessonlpan':
					$this->load->view('tutor_class_les',$data);break;
				case 'gradebook':
					$this->load->view('tutor_class_grad',$data);break;
				case 'records':
					$this->load->view('tutor_class_rec',$data);break;
				case 'logbook':
					$this->load->view('tutor_class_log',$data);break;
				case 'reports':
					$this->load->view('tutor_class_rep',$data);break;				
				default:
					$this->load->view('tutor_class_sum',$data);break;			}
			$this->load->view('tutor_footer');
		}else{
			redirect('tutor/dashboard','refresh');
		}
	}

}
