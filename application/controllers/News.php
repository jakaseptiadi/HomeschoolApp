<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index(){
		$this->load->view('w_header');
		$data['threenews']=$this->Mweb->getlimit('t_news','news_id','3');
		$this->load->view('w_news',$data);
		$this->load->view('w_footer');
	}

}

/* End of file News.php */
/* Location: ./application/controllers/News.php */
