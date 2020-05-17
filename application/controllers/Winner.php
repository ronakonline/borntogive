<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Winner extends CI_Controller {


	public function index()
	{
		$data = frontend_data();
		$this->load->model('WinnerM');
		$data['img'] = $this->WinnerM->getwinner();
		$this->load->view('winner',$data);
	}
}
