<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index()
	{
		$data = frontend_data();
		$this->load->view('blog',$data);
	}

	public function single_blog($id){
		$data =frontend_data(null,null,$id);
		$this->load->view('single-blog',$data);
	}
}
