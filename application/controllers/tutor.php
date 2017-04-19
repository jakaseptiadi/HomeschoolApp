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

class Tutor extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mtutor');
		$this->load->library('grocery_CRUD');
		session_start();

		
		if (isset($_SESSION['tutor_id'])) {

			if ($_SESSION['nav_stulist']>0) {
				$data['nav_stulist']=$this->Mtutor->getdata1c('t_student','tutor_id',$_SESSION['tutor_id'])->result();

				if (!isset($_SESSION['nav_stuselect_id'])) {
					$createNewSelect = $this->Mtutor->getdata1c('t_student','tutor_id',$_SESSION['tutor_id'])->row();
					$_SESSION['nav_stuselect_id']= $createNewSelect->student_id;
					$_SESSION['nav_stuselect_name']= $createNewSelect->student_name;
				}

				$this->load->view('tutor/t_header', $data);
			}else{
				$this->load->view('tutor/t_header');
			}
		}
	}

// login [FINISH]
	public function index(){
		if (isset($_SESSION['tutor_id'])) {
			redirect('tutor/dashboard','refresh');
		}else{
			if ($this->input->post('signin')) {
				$emailorusername	= $this->input->post('emailorusername');
				$password			= $this->input->post('password');

				// if user/email and password found
				if ($this->Mtutor->logincheck('t_tutor','tutor_username',$emailorusername,'tutor_email',$emailorusername,'tutor_password',$password)>0) {
					// get login session data
					$data = $this->Mtutor->loginsession('t_tutor','tutor_username',$emailorusername,'tutor_email',$emailorusername,'tutor_password',$password);
					// get students data
					$_SESSION['nav_stulist']	= $this->Mtutor->countdata1c('t_student','tutor_id',$data->tutor_id);
					$_SESSION['tutor_id']		= $data->tutor_id;
					$_SESSION['tutor_name']		= $data->tutor_name;
					$_SESSION['tutor_email']	= $data->tutor_email;
					$_SESSION['tutor_photo']	= $data->tutor_photo;

					redirect('tutor/dashboard','refresh');

				// if user/email and password unfound
				} else{
					$this->session->set_flashdata('failed', 'Sorry! Username or Email or Password Wrong.');
					redirect('tutor');
				}
			}else{
				$this->load->view('t_login');
				$this->load->view('w_footer');
			}
		}
	}

// sidebar
	public function dashboard(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$data['studentrecord'] = $this->Mtutor->getdata1c('t_student','student_id',$_SESSION['nav_stuselect_id'])->row();

			// $data['schedule'] = $this->Mtutor->getdata1c('t_schedule','student_id',$_SESSION['nav_stuselect_id'])->row();
			$data['courses'] = $this->Mtutor->getdata2t('t_course','t_coursebank','coursebank_id','coursebank_id','student_id',$_SESSION['nav_stuselect_id'])->result();
			$data['coursec'] = $this->Mtutor->getdata1c('t_course','student_id',$_SESSION['nav_stuselect_id'])->num_rows();
			// $data['gradebook'] = $this->Mtutor->getdata1c('t_gradebook','student_id',$_SESSION['nav_stuselect_id'])->row();
			// $data['logbook'] = $this->Mtutor->getdata1c('t_logbook','student_id',$_SESSION['nav_stuselect_id'])->row();

			$this->load->view('tutor/t_dashboard',$data);
			$this->load->view('w_footer');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

// W/ GROCERY
	public function schedule(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$crud = new grocery_CRUD();
			$crud->set_table('t_schedule');
			$crud->set_subject('Schedule');
			$crud->required_fields('student_id','type_sche','repeat_sche','title_sche','date_sche');
			$crud->where('student_id', $_SESSION['nav_stuselect_id']);
			$crud->field_type('student_id', 'hidden');
			$crud->unset_columns('student_id');
			$crud->callback_add_field('student_id', function(){return '<input id="field-fecha_renovacion" name="student_id" type="hidden" value="'.$_SESSION['nav_stuselect_id'].'">';});
			$output = $crud->render();
			$output->table_title= 'Schedule';
			$this->load->view('tutor/t_schedule',$output);
			$this->load->view('w_footer');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function courses($course_id=""){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			// All Courses
			if ($course_id=="") {
				$data['counter']=$this->Mtutor->countdata1c('t_course','student_id',$_SESSION['nav_stuselect_id']);

				$data['get_course'] = $this->Mtutor->getdata2t('t_course','t_coursebank','coursebank_id','coursebank_id','student_id',$_SESSION['nav_stuselect_id'])->result();

				$this->load->view('tutor/t_courses',$data);
				$this->load->view('w_footer');

			// Selected Course
			}else if ($this->Mtutor->getdata2c('t_course','course_id',$course_id,'student_id',$_SESSION['nav_stuselect_id'])->num_rows()!=0) {
				// course data
				$data['get_course'] = $this->Mtutor->getdata2t('t_course','t_coursebank','coursebank_id','coursebank_id','course_id',$course_id)->row();

				// skill list
				$coursebank_id = $data['get_course']->coursebank_id;
				$data['skill_list'] = $this->Mtutor->getdata2t('t_skillcourse','t_coursebank','coursebank_id','coursebank_id','coursebank_id',$coursebank_id)->result();

				// resource and quiz
				$data['resources'] = $this->Mtutor->getdata2t('t_myres','t_res','res_id','res_id','course_id',$course_id)->result();
				$this->load->view('tutor/t_mycourse',$data);
				$this->load->view('w_footer');
			}else{
				redirect('tutor/courses','refresh');
			}


		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function addcourse(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$crud = new grocery_CRUD();
			$crud->set_table('t_coursebank');
			$crud->set_subject('course');
			$crud->required_fields('coursebank_name','coursebank_desc','coursebank_level','coursebank_curriculum');
			$crud->fields('coursebank_name','coursebank_desc','coursebank_level','coursebank_curriculum');
			$crud->add_action('Enroll', 'icon', 'tutor/enroll');//there is a param
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
			$output = $crud->render();
			$output->table_title= 'Enroll a course';

			$this->load->view('tutor/t_addcourse',$output);
			$this->load->view('w_footer');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function createcourse(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$this->load->view('tutor/t_createcourse');
			$this->load->view('w_footer');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}		
	}

	public function addfile($course_id="",$coursebank_id="",$skill_id=""){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0 and $course_id!="" and $skill_id!="") {
			$config['upload_path']          = './uploads/resources/';
			$config['allowed_types']        = 'webp|gif|jpg|png|bmp|tif|ico|tga|doc|html|php|epub|pdf|docx|docm|dotm|dotx|mhtml|mhtm|htm|dot|xps|xml|odt|txt|rtf|xls|xlsx|xlsm|xlsb|xltx|xltm|xlt|csv|prn|dif|xlk|xlam|xla|ods|ppt|pptx|mkv|mp4|iso|cso|3gp|avi|wmv|mpg|vob|mov|flv|swf|mp3|wma|ape|flac|aac|ac3|mmf|amr|m4a|m4r|ogg|wav|wavpack|mp2|rar|zip|7zip';
			$config['max_size']=10240;//10 MegaByte
			$config['overwrite'] = TRUE;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('filename')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('tutor/courses/'.$course_id,'refresh');
			} else {
				$get_file_ext = $this->upload->data('file_ext');
				$get_file_name = $this->upload->data('client_name');
				$addresource['coursebank_id'] = $coursebank_id;
				$addresource['skill_id']  = $skill_id;
				$addresource['res_file']  = $get_file_name['client_name'];
				$addresource['res_name']  = $this->input->post('filetitle');
				$addresource['res_type']  = $get_file_ext['file_ext'];
				$addresource['author_id'] = $_SESSION['tutor_id'];
				

				if ($this->Mtutor->insert('t_res',$addresource)) {
					$get_res_id = $this->Mtutor->getdatanewres('t_res','res_name',$this->input->post('filetitle'),'res_file',$get_file_name['client_name'],'author_id',$_SESSION['tutor_id'])->row();
					$addmyres['res_id']	= $get_res_id['res_id'];
					$addmyres['course_id'] = $course_id;
					$addmyres['tutor_id']=$_SESSION['tutor_id'];

					if ($this->Mtutor->insert('t_myres',$addmyres)) {
						$this->session->set_flashdata('success', "Success! File uploaded");
					}else{
						$this->session->set_flashdata('error', "File isn't uploaded properly");
					}

				}else{
					$this->session->set_flashdata('error', "File isn't uploaded properly");
				}
				redirect('tutor/courses/'.$course_id,'refresh');
			}
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function addquiz($course_id='',$skill_id=''){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			if ($course_id=='' or $skill_id=='' or $course_id=='0' or $skill_id=='0') {
				redirect('tutor/courses','refresh');
			}else{
				$data['get_course'] = $this->Mtutor->getdata2t('t_course','t_coursebank','coursebank_id','coursebank_id','course_id',$course_id)->row();
				$data['get_skill'] = $this->Mtutor->getdata1c('t_skillcourse','skill_id',$skill_id)->row();
				if ($this->input->post('add')) {
					
				}else if($this->input->post('add')){

				}else{
					$this->load->view('tutor/t_addquiz',$data);
				}
			}
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function gradebook(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
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
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function logbook(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$crud = new grocery_CRUD();
			$crud->set_table('t_logbook');
			$crud->set_subject('Logbook');
			$crud->required_fields('log_title');
			$crud->where('student_id', $_SESSION['nav_stuselect_id']);
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();

			$crud->fields('log_title','log_desc');
			$crud->field_type('student_id', 'hidden');
			$crud->unset_columns('student_id');
			$crud->callback_add_field('student_id', function(){return '<input id="field-fecha_renovacion" name="student_id" type="hidden" value="'.$_SESSION['nav_stuselect_id'].'">';});

			$output = $crud->render();
			$output->table_title= 'LogBook';

			$this->load->view('tutor/t_logbook',$output);
			$this->load->view('w_footer');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function studentrecord(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$a['g']=$this->Mtutor->getdata1c('t_student','student_id',$_SESSION['nav_stuselect_id'])->row();
			$this->load->view('tutor/t_studentrecord',$a);
			$this->load->view('w_footer');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

// ///////////////////////////////////////////////////////////////////////////////////////////
// ///////////////////////////////////////////////////////////////////////////////////////////
// ///////////////////////////////////////////////////////////////////////////////////////////
// ///////////////////////////////////////////////////////////////////////////////////////////
// ///////////////////////////////////////////////////////////////////////////////////////////

// navbar
	public function navselectnew($student_id=""){
		if (isset($_SESSION['tutor_id'])) {
			unset($_SESSION['nav_stuselect_id']);
			unset($_SESSION['nav_stuselect_name']);
			$createNewSelect = $this->Mtutor->getdata1c('t_student','student_id',$student_id)->row();
			$_SESSION['nav_stuselect_id']= $createNewSelect->student_id;
			$_SESSION['nav_stuselect_name']= $createNewSelect->student_name;
			redirect('tutor/dashboard','refresh');
		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

// FINISH
	public function addstudent(){
		if (isset($_SESSION['tutor_id'])) {
			$addstudent['student_name'] = "";
			$addstudent['student_username'] = "";
			$addstudent['student_email'] = "";
			$addstudent['student_password'] = "";
			$addstudent['student_religion'] = "";
			$addstudent['tutor_id'] = "";
			if ($this->input->post('add')) {
				$addstudent['student_name'] = $this->input->post('student_name');
				$addstudent['student_username'] = $this->input->post('student_username');
				$addstudent['student_email'] = $this->input->post('student_email');
				$addstudent['student_password'] = $this->input->post('student_password');
				$addstudent['student_religion'] = $this->input->post('student_religion');
				$addstudent['tutor_id'] = $_SESSION['tutor_id'];
				
				$username_check	= $this->Mtutor->countdata1c('t_student','student_username',$addstudent['student_username']);
				$email_check	= $this->Mtutor->countdata1c('t_student','student_email',$addstudent['student_email']);

				if ($email_check>0) {
					$addstudent['student_email']="";
					$this->session->set_flashdata('failed', 'Sorry! Email is already taken.');
					$this->load->view('tutor/t_addstudent',$addstudent);
					$this->load->view('w_footer');
				}elseif ($username_check>0) {
					$addstudent['student_username']="";
					$this->session->set_flashdata('failed', 'Sorry! Username is already taken.');
					$this->load->view('tutor/t_addstudent',$addstudent);
					$this->load->view('w_footer');
				}else{
					$this->Mtutor->insert('t_student',$addstudent);
					unset($_SESSION['nav_stulist']);
					unset($_SESSION['nav_stuselect_id']);
					unset($_SESSION['nav_stuselect_name']);
					
					$createNewSelect = $this->Mtutor->getdata1c('t_student','student_username',$addstudent['student_username'])->row();

					$_SESSION['nav_stuselect_id']	= $createNewSelect->student_id;
					$_SESSION['nav_stuselect_name']	= $createNewSelect->student_name;
					$_SESSION['nav_stulist']		= $this->Mtutor->countdata1c('t_student','tutor_id',$_SESSION['tutor_id']);
					redirect('tutor/dashboard','refresh');
				}
				
			}else{
				$this->load->view('tutor/t_addstudent',$addstudent);
				$this->load->view('w_footer');
			}
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function setting(){
		if (isset($_SESSION['tutor_id'])) {
			$this->load->view('tutor/t_setting');
			$this->load->view('w_footer');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function help(){
		if (isset($_SESSION['tutor_id'])) {
			$this->load->view('tutor/t_help');
			$this->load->view('w_footer');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function profile(){
		if (isset($_SESSION['tutor_id'])) {
			$data['counterq'] = $this->Mtutor->getdata1c('t_questions','author_id',$_SESSION['tutor_id'])->num_rows();
			$data['counterr'] = $this->Mtutor->getdata1c('t_myres','tutor_id',$_SESSION['tutor_id'])->num_rows();

			if ($data['counterq']>0) {
				$data['myquest'] = $this->Mtutor->getdata1c('t_questions','author_id',$_SESSION['tutor_id'])->result();
			}
			if ($data['counterr']>0) {
				$data['myres'] = $this->Mtutor->getdata1c('t_myres','tutor_id',$_SESSION['tutor_id'])->result();
			}
			if ($_SESSION['nav_stulist']>0) {
				$data['mystu'] = $this->Mtutor->getdata1c('t_student','tutor_id',$_SESSION['tutor_id'])->result();
			}

			$this->load->view('tutor/t_profile',$data);
			$this->load->view('w_footer');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function mylog(){
		if (isset($_SESSION['tutor_id']) and $_SESSION['nav_stulist']>0) {
			$crud = new grocery_CRUD();
			$crud->set_table('t_mylog');
			$crud->set_subject('Logbook');
			$crud->required_fields('log_title');
			$crud->where('tutor_id', $_SESSION['tutor_id']);
			$crud->fields('tutor_id','log_title','log_desc');
			$crud->field_type('tutor_id', 'hidden');
			$crud->callback_add_field('tutor_id', function(){return '<input id="field-fecha_renovacion" name="tutor_id" type="hidden" value="'.$_SESSION['tutor_id'].'">';});

			$output = $crud->render();
			$output->table_title= 'My LogBook';

			$this->load->view('tutor/t_logbook',$output);
			$this->load->view('w_footer');

		}else if (isset($_SESSION['tutor_id'])) {
			redirect(site_url('tutor/addstudent'),'refresh');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function community(){
		if (isset($_SESSION['tutor_id'])) {
			$this->load->view('tutor/t_community');
			$this->load->view('w_footer');
		}
		else{
			redirect(site_url(''),'refresh');
		}
	}

	public function logout(){
		unset($_SESSION['tutor_id']);
		unset($_SESSION['tutor_name']);
		unset($_SESSION['tutor_email']);
		unset($_SESSION['tutor_photo']);
		redirect(site_url(''),'refresh');
	}

}
/* End of file tutor.php */
/* Location: ./application/controllers/tutor.php */