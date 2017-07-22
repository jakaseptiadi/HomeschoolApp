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

class Z_resource extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_resource');	
		  $this->load->helper(array('form', 'url'));
		session_start();
	}

	// RESOURCE TUTOR
	public function resource($p = NULL, $v = NULL){
		if (isset($_SESSION['tutor_id'])) {
			if(($p != NULL) && ($v != NULL)){

				$param = $p;
				$value = $v;

				$data['grades'] = $value;

				// SHOW RESOURCE DATA WITH PARAMETER
				$data["resource_data"] = $this->z_model_resource->fetch_data_resource($param, $value);

				$this->load->view('z_view_tutor/t_header');
				$this->load->view('z_view_tutor/resource/t_resource', $data);
				$this->load->view('z_view_tutor/t_footer');
			}else{
				
				
				$data['grades'] = "Recent Activity";

				// SHOW RESOURCE DATA DEFAULT
				$data["resource_data"] = $this->z_model_resource->fetch_data_resource();

				$this->load->view('z_view_tutor/t_header');
				$this->load->view('z_view_tutor/resource/t_resource', $data);
				$this->load->view('z_view_tutor/t_footer');
			}

		}
	}

	public function my_resource(){
		if (isset($_SESSION['tutor_id'])) {

			// SHOW DATA RESOURCE
			$data["resource_data"] = $this->z_model_resource->fetch_data_tutor_resource('t_z_resource','tutor_id', $_SESSION['tutor_id']);

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/t_my_resource', $data);
			$this->load->view('z_view_tutor/t_footer');
		}
	}

	// READ PAGINATION FUNCTION
	public function read(){
		if (isset($_SESSION['tutor_id'])) {

			$this->load->library('pagination');

			$query = $this->db->get('t_z_resource', '5', $this->uri->segment(3));
			$data['data_pagination'] = $query->results();

			$query2 = $this->db->get('t_z_resource');

			$config['base_url'] = 'http://localhost/asli_skripsi/z_resource/read/';
			
			$config['total_rows'] = $query2->num_rows();
			$config['per_page'] = 5;

			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '<ul/>';

			$config['first_tag_open'] = '<li>';
			$config['last_tag_open'] = '<li>';

			$config['next_tag_open'] = '<li>';
			$config['prev_tag_open'] = '<li>';

			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '<li/>';

			$config['first_tag_close'] = '<li/>';
			$config['last_tag_close'] = '<li/>';

			$config['next_tag_close'] = '<li/>';
			$config['prev_tag_close'] = '<li/>';

			$config['cur_tag_open'] = '<li class=\"active\"><span><b>';
			$config['cur_tag_close'] = '</b></span></li>';

			$this->pagination->initialize($config);


			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/resource/t_resource', $data);
			$this->load->view('z_view_tutor/t_footer');

		}
	}

	// FORM ADD RESOURCE TUTOR
	public function form_add_resource(){
		if (isset($_SESSION['tutor_id'])) {

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/resource/t_form_resource');
			$this->load->view('z_view_tutor/t_footer');
		}
	}

	// ADD RESOURCE TUTOR
	public function add_resource(){
		 
		$config['upload_path']          = './uploads/resources';
        $config['allowed_types']        = 'webp|gif|jpg|png|bmp|tif|ico|tga|doc|html|php|epub|pdf|docx|docm|dotm|dotx|mhtml|mhtm|htm|dot|xps|xml|odt|txt|rtf|xls|xlsx|xlsm|xlsb|xltx|xltm|xlt|csv|prn|dif|xlk|xlam|xla|ods|ppt|pptx|mkv|mp4|iso|cso|3gp|avi|wmv|mpg|vob|mov|flv|swf|mp3|wma|ape|flac|aac|ac3|mmf|amr|m4a|m4r|ogg|wav|wavpack|mp2|rar|zip|7zip';
        $config['max_size']             = 25600;//25 MegaByte
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resource'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/resource', $error);
			$this->load->view('z_view_tutor/t_footer');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            
            $uploadData = $this->upload->data();
            $file = $uploadData['file_name'];
            //$variable = serialize($this->input->post('resource_grades')); //for multiple choise

            $insertdata = array(
                'title' => $this->input->post('resource_title'),
                'description' => $this->input->post('resource_description'),
                'type' => $this->input->post('resource_type'),
                //'grades' => $variable,
                'grades' => $this->input->post('resource_grades'),
                'subject' => $this->input->post('resource_subject'),
                'status_privation' => $this->input->post('resource_privation'),
                'file' => $file,
                'tutor_id' => $_SESSION['tutor_id']
               
            );
            
            $insertUserData = $this->z_model_resource->insert('t_z_resource', $insertdata);
            
             if($insertUserData){
                //$this->session->set_flashdata('success', 'Your resource have been uploaded successfully.');
                redirect('z_resource/resource','refresh');
            }else{
                //$this->session->set_flashdata('failed', 'Some problems occured, please try again.');
                redirect('z_resource/resource','refresh');
            }

            //$this->session->set_flashdata('success', 'Your resource has been uploaded');
            //$this->load->view('z_view_tutor/t_header');
			//$this->load->view('z_view_tutor/resource/t_form_resource', $data);
			//$this->load->view('z_view_tutor/t_footer');
        }
    }

    // DETAIL RESOURCE TUTOR
	public function detail_resource($id){
		if (isset($_SESSION['tutor_id'])) {
			
			//$id = $this->uri->segment(3);
			$data['data_detail'] = $this->z_model_resource->get_data_by_id($id);

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/resource/t_detail_resource', $data);
			$this->load->view('z_view_tutor/t_footer');
			
		}
	}

	// DOWNLOAD A RESOURCE
	public function download($id){
		if(!empty($id)){
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileinfo = $this->z_model_resource->getRows(array('id_resource' => $id));

			//file path
			$path = 'uploads/resources/'.$fileinfo['file_name'];

			//download file from directory
			force_download($path, NULL);

		}

	}
}
