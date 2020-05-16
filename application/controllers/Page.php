<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function index($id)
	{
		$data = frontend_data($id);
		$this->load->view('page',$data);
	}

	public function single_post($cid,$pid)
	{
		$data = frontend_data($cid,$pid);
		$this->load->view('post',$data);
	}

}
