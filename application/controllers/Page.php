<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function index()
	{
		
	}

	public function list_post($id){
		$this->load->model('CategoryM');
        $data['category']= $this->CategoryM->list_categories();
        $data['catid'] = $id;
        $this->load->model('PostM');
        $data['post'] =$this->PostM->show_post_category($id);
		$this->load->view('page',$data);
	}

	public function single_post($id){
		$this->load->model('CategoryM');
        $data['category']= $this->CategoryM->list_categories();
		$this->load->model('PostM');
        $data['post'] =$this->PostM->show_post($id);
        $cid = $data['post'][0]->cid;
        $data['slider'] = $this->PostM->show_post_category($cid);

        $this->load->view('post',$data);
	}
}
