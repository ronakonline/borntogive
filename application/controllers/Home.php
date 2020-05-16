<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{	
		$this->load->model('CategoryM');
        $data['category']= $this->CategoryM->list_categories();
		$this->load->view('home',$data);
	}
}
