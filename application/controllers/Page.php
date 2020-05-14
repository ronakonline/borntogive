<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function index()
	{
		
	}

	public function list_post($id){
		$this->load->model('CategoryM');
        $data['category']= $this->CategoryM->list_categories();
        $this->load->model('PostM');
        $data['post'] =$this->PostM->show_post_category($id);
		$this->load->view('page',$data);
	}

	public function single_post($id){
		$this->load->model('CategoryM');
        $data['category']= $this->CategoryM->list_categories();
		$this->load->model('PostM');
        $data['post'] =$this->PostM->show_post($id);
        $this->load->view('post',$data);
	}
}
