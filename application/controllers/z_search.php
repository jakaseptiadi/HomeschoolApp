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

class Z_search extends CI_Controller {
	
	//private $search_users;

	public function __construct(){
		parent::__construct();
		$this->load->model('z_model_search');
        $this->load->helper(array('form', 'url'));
        session_start();	
	}

	public function autocomplete(){
		// load model
        $search_data = $this->input->post('search_data');

        $result = $this->z_model_search->get_autocomplete($search_data);

        if (!empty($result))
        {
            foreach ($result as $row):
            	//echo "<div id='user'><img src='$row->tutor_photo' id='pic'><'$row->tutor_name'></div>";
               echo "<li><a href='".base_url()."z_friends/profile/".$row->tutor_id."'>" . $row->tutor_name . "</a></li>";
            endforeach;
               echo "<li>Click button search for all users</li>";
        }
        else
        {
            echo "<li> <em> Not found ... </em> </li>";
        }

	}

    public function search(){
        if (isset($_SESSION['tutor_id'])) {
        if($this->input->post('search_users')){
            $_SESSION['tutor_name'] = $this->input->post('search_users');
        }

        if(isset($_SESSION['tutor_name'])){
            $this->z_model_search->setSearch($_SESSION['tutor_name']);
        }

        $config = array();
        $data["results"] = array();
        $config["base_url"] = base_url() . "index.php/z_search/search_users";
        $config["total_rows"] = $this->z_model_search->record_count_users();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        $data["total_cari"] = $config["total_rows"];

        //bootstrap style
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        if ($config["total_rows"] > 0) {
            $data["results"] = $this->z_model_search->fetch($config["per_page"], $page);
        }
        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
       
            $this->load->view('z_view_tutor/t_header');
            $this->load->view('z_view_tutor/t_search_users', $data);
            $this->load->view('z_view_tutor/t_footer');

        }

    }

   
	
	
}
