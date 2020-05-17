<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{
		$data = frontend_data();
		$this->load->view('about',$data);
	}
}
