<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index(){
		$this->load->view('w_header');
		$this->load->view('w_help');
		$this->load->view('w_footer');
	}

}

/* End of file Help.php */
/* Location: ./application/controllers/Help.php */
