<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		session_start();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		if (isset($_SESSION['admin_id'])) {
			redirect('admin/table/t_tutor','refresh');
		}else{
			if ($this->input->post('signin')) {
				$_SESSION['admin_id'] = 1;
				$_SESSION['admin_name'] = 'Fitri Ana Dewi';
				$_SESSION['admin_photo'] = 'uploads/user.jpg';
				$_SESSION['tablename'] = 't_news';
				redirect('admin/table/t_tutor','refresh');
			}else{
				$this->load->view('a_login');
				$this->load->view('w_footer');
			}
		}
	}

	public function table($tablename){
		if (isset($_SESSION['admin_id'])) {
			unset($_SESSION['tablename']);
			$_SESSION['tablename'] = $tablename;
			$data['tablelist'] = $this->Mweb->gettables();
			$this->load->view('admin/a_header', $data);

			try{
				$crud = new grocery_CRUD();

				$crud->set_theme('datatables');
				$crud->set_table($_SESSION['tablename']);
				$crud->set_subject($_SESSION['tablename']);

				if ($_SESSION['tablename']=="t_news") {
					$crud->set_field_upload('news_photo','uploads/news');
					$crud->required_fields('news_title','news_date','news_content');
				}else if ($_SESSION['tablename']=="t_res") {
					$crud->set_field_upload('res_file','uploads/resources');
					$crud->required_fields('coursebank_id','skill_id','author_id','res_name','res_file');
				}

				$output = $crud->render();

			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
			$this->load->view('admin/a_dashboard',$output);
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
		
	}

	public function inbox(){
		if (isset($_SESSION['admin_id'])) {
			$this->load->view('admin/a_header');
			$this->load->view('admin/a_inbox');
			$this->load->view('w_footer');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

	public function logout(){
		if (isset($_SESSION['admin_id'])) {
			unset($_SESSION['admin_id']);
			unset($_SESSION['admin_name']);
			unset($_SESSION['admin_photo']);
			redirect(site_url(''),'refresh');
		}else{
			redirect(site_url(''),'refresh');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
