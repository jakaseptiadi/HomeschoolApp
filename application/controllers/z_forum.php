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

class Z_forum extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();	
		$this->load->model('z_model_forum');	
		$this->load->helper(array('form', 'url'));
		session_start();
	}

	public function index(){
		if (isset($_SESSION['tutor_id'])) {

			redirect('z_tutor/profile','refresh');
		}
	}
	
	// FORUM PAGE
	public function forum($p = NULL, $v = NULL){
		if (isset($_SESSION['tutor_id'])) {
			if(($p != NULL) && ($v != NULL)){

				$param = $p;
				$value = $v;

				$data['classification'] = $value;

				$data["discussion_data"] = $this->z_model_forum->fetch_data_discussion($param, $value);

				$this->load->view('z_view_tutor/t_header');
				$this->load->view('z_view_tutor/forum/t_forum', $data);
				$this->load->view('z_view_tutor/t_footer');

			}else{

				$data['classification'] = "All";

				$data["discussion_data"] = $this->z_model_forum->fetch_data_discussion();

				$this->load->view('z_view_tutor/t_header');
				$this->load->view('z_view_tutor/forum/t_forum', $data);
				$this->load->view('z_view_tutor/t_footer');
			}
			
		}
	}

	// ADD DISCUSSION
	public function add_discussion(){
		
		$config['upload_path']          = './uploads/discussion';
        $config['allowed_types']        = 'gif|jpg|png|bmp';
        $config['max_size']             = 25600;//25 MegaByte
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        // If condition is not upload.
        if ( ! $this->upload->do_upload('file_image')){

            $data["discussion_data"] = $this->z_model_forum->fetch_data_discussion();

            $insertdata = array(
                'title' => $this->input->post('discussion_title'),
                'grades' => $this->input->post('discussion_grades'),
                'categories' => $this->input->post('discussion_categories'),
                'description' => $this->input->post('discussion_description'),
                'tutor_id' => $_SESSION['tutor_id']
            );
            
            $insertUserData = $this->z_model_forum->insert('t_z_forum', $insertdata);
            
             if($insertUserData){
                //$this->session->set_flashdata('success', 'Your resource have been uploaded successfully.');
                redirect('z_forum/forum','refresh');
            }else{
                //$this->session->set_flashdata('failed', 'Some problems occured, please try again.');
                redirect('z_forum/forum','refresh');
            }
        }else{

        	// If condition is upload.
            $data = array('upload_data' => $this->upload->data());
            
            $uploadData = $this->upload->data();
            $file = $uploadData['file_name'];
            
            $insertdata = array(
                'title' => $this->input->post('discussion_title'),
                'grades' => $this->input->post('discussion_grades'),
                'categories' => $this->input->post('discussion_categories'),
                'description' => $this->input->post('discussion_description'),
                'file_image' => $file,
                'tutor_id' => $_SESSION['tutor_id']
            );
            
            $insertUserData = $this->z_model_forum->insert('t_z_forum', $insertdata);
            
             if($insertUserData){
                //$this->session->set_flashdata('success', 'Your resource have been uploaded successfully.');
                redirect('z_forum/forum','refresh');
            }else{
                //$this->session->set_flashdata('failed', 'Some problems occured, please try again.');
                redirect('z_forum/forum','refresh');
            }

            //$this->session->set_flashdata('success', 'Your resource has been uploaded');
            //$this->load->view('z_view_tutor/t_header');
			//$this->load->view('z_view_tutor/resource/t_form_resource', $data);
			//$this->load->view('z_view_tutor/t_footer');
        }
	}

	public function detail_discussion($id){
		if (isset($_SESSION['tutor_id'])) {

			$data['detail_data'] = $this->z_model_forum->get_data_detail_by_id($id);
			$data["comment_data"] = $this->z_model_forum->fetch_data_comment_default($id);

			$this->load->view('z_view_tutor/t_header');
			$this->load->view('z_view_tutor/forum/t_detail_forum', $data);
			$this->load->view('z_view_tutor/t_footer');
		}
	}

	public function add_comment_forum2(){
		 $insertdata = array(
                'title' => $this->input->post('discussion_title'),
                'grades' => $this->input->post('discussion_grades'),
                'tutor_id' => $_SESSION['tutor_id']
            );
            
            $insertUserData = $this->z_model_forum->insert('t_z_forum', $insertdata);
            
             if($insertUserData){
                //$this->session->set_flashdata('success', 'Your resource have been uploaded successfully.');
                redirect('z_forum/forum','refresh');
            }else{
                //$this->session->set_flashdata('failed', 'Some problems occured, please try again.');
                redirect('z_forum/forum','refresh');
            }
	}

	public function add_comment_forum(){
		$insertdata = array(
				'comment' => $this->input->post('comment'),
				'id_forum' => $this->input->post('id'),
				'tutor_id' => $_SESSION['tutor_id']
				);

		$insertUserData = $this->z_model_forum->insert('t_z_commentforum', $insertdata);
		$show_data= $this->z_model_forum->select_data_comment2('t_z_commentforum','id_forum', $insertdata['id_forum'] );
		$data_amount = count($show_data->result());
		$i = 0;

		// String With JSON Format
		echo '{"data":[';

		foreach($show_data->result() as $row){
			echo "{";
			echo '"comment":"'.$row->comment.'",';
			echo '"date":"'.$row->date_create.'",';
			echo '"name":"'.$_SESSION['tutor_name'].'",';
			echo '"photo":"'.base_url($_SESSION['photo_profile']).'"';
			echo "}";
			
			$i+=1;
			if ($i < $data_amount) {
				echo ",";
			}
		}

		echo ']}';
	}
	
}
