<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// SESSION LIST
// $_SESSION['student_id']
// $_SESSION['student_name']
// $_SESSION['student_photo']

class Student extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mstudent');
		$this->load->model('Mtutor');
		$this->load->library('grocery_CRUD');
		session_start();
	}

	public function index(){
		if (isset($_SESSION['student_id'])) {
			redirect('student/dashboard','refresh');
		}else{
			if ($this->input->post('signin')) {
				$emailorusername	= $this->input->post('emailorusername');
				$password			= $this->input->post('password');
				// if user/email and password found
				if ($this->Mstudent->logincheck('t_student','student_username',$emailorusername,'student_email',$emailorusername,'student_password',$password)>0) {
					// get login session data
					$data = $this->Mstudent->loginsession('t_student','student_username',$emailorusername,'student_email',$emailorusername,'student_password',$password);

					$_SESSION['student_id']		= $data->student_id;
					$_SESSION['student_name']		= $data->student_name;
					$_SESSION['student_photo']	= $data->student_photo;

					redirect('student/dashboard','refresh');

				// if user/email and password unfound
				} else{
					$this->session->set_flashdata('failed', 'Sorry! Username or Email or Password Wrong.');
					redirect('student');
				}
			}else{
				$this->load->view('s_login');
				$this->load->view('w_footer');
			}
		}
	}

	public function dashboard(){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			$this->load->view('student/s_dashboard');
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function schedule(){
		if (isset($_SESSION['student_id'])) {
			$crud = new grocery_CRUD();
			$crud->set_table('t_schedule');
			$crud->set_subject('schedule');
			$crud->required_fields('student_id','type_sche','repeat_sche','title_sche','date_sche');
			$crud->where('student_id', $_SESSION['student_id']);
			$crud->field_type('student_id', 'hidden');
			$crud->unset_columns('student_id');
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
			$crud->callback_add_field('student_id', function(){return '<input id="field-fecha_renovacion" name="student_id" type="hidden" value="'.$_SESSION['student_id'].'">';});
			$output = $crud->render();
			$output->table_title= 'schedule';
			$this->load->view('student/s_header');
			$this->load->view('student/s_schedule',$output);
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function courses($course_id=""){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			// All Courses
			if ($course_id=="") {
				$data['counter']=$this->Mtutor->countdata1c('t_course','student_id',$_SESSION['student_id']);

				$data['get_course'] = $this->Mtutor->getdata2t('t_course','t_coursebank','coursebank_id','coursebank_id','student_id',$_SESSION['student_id'])->result();

				$this->load->view('student/s_courses',$data);
				$this->load->view('w_footer');

			// Selected Course
			}else if ($this->Mtutor->getdata2c('t_course','course_id',$course_id,'student_id',$_SESSION['student_id'])->num_rows()!=0) {
				// course data
				$data['get_course'] = $this->Mtutor->getdata2t('t_course','t_coursebank','coursebank_id','coursebank_id','course_id',$course_id)->row();

				// skill list
				$coursebank_id = $data['get_course']->coursebank_id;
				$data['skill_list'] = $this->Mtutor->getdata2t('t_skillcourse','t_coursebank','coursebank_id','coursebank_id','coursebank_id',$coursebank_id)->result();

				// resource and quiz
				$data['resources'] = $this->Mtutor->getdata2t('t_myres','t_res','res_id','res_id','course_id',$course_id)->result();
				$this->load->view('student/s_mycourse',$data);
				$this->load->view('w_footer');
			}else{
				redirect('student/courses','refresh');
			}

		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function gradebook(){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			$crud = new grocery_CRUD();
			$crud->set_table('t_course');
			$crud->set_subject('Gradebook');
			$crud->required_fields('student_id','coursebank_id');
			$crud->where('student_id', $_SESSION['nav_stuselect_id']);

			$crud->set_relation('coursebank_id','t_coursebank','{coursebank_name} (Grade {coursebank_level})');
			$crud->display_as('coursebank_id','Course Name');
			
			$crud->fields('coursebank_id','student_id');
			$crud->field_type('student_id', 'hidden');
			$crud->unset_columns('student_id');
			$crud->callback_add_field('student_id', function(){return '<input id="field-fecha_renovacion" name="student_id" type="hidden" value="'.$_SESSION['nav_stuselect_id'].'">';});

			$crud->unset_add();
			$crud->unset_delete();
			$output = $crud->render();
			$output->table_title= 'Gradebook';
			$this->load->view('tutor/t_gradebook',$output);
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function logbook(){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			
			$crud = new grocery_CRUD();
			$crud->set_table('t_logbook');
			$crud->set_subject('Logbook');
			$crud->required_fields('log_title');
			$crud->where('student_id', $_SESSION['student_id']);

			$crud->fields('student_id','log_title','log_desc');
			$crud->field_type('student_id', 'hidden');
			$crud->callback_add_field('student_id', function(){return '<input id="field-fecha_renovacion" name="student_id" type="hidden" value="'.$_SESSION['student_id'].'">';});

			$output = $crud->render();
			$output->table_title= 'LogBook';

			$this->load->view('student/s_logbook',$output);
			$this->load->view('w_footer');
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function help(){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			$this->load->view('student/s_help');
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function profile(){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			$this->load->view('student/s_profile');
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function community(){
		if (isset($_SESSION['student_id'])) {
			$this->load->view('student/s_header');
			$this->load->view('student/s_community');
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function logout(){
		if (isset($_SESSION['student_id'])) {
			unset($_SESSION['student_id']);
			unset($_SESSION['student_name']);
			unset($_SESSION['student_photo']);
			redirect(site_url(''),'refresh');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

}

/* End of file Student.php */
/* Location: ./application/controllers/Student.php */
