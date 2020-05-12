<?php

class Categories extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Category";
                 $this->load->view('admin/add-category',$data);
        }else{
            redirect('admin');
        }
    }

    //List Categories
    public function  list_categories(){
        if($_SESSION['admin']){
            $data['title'] = "All Categories";
            // $this->load->model('CategoryM');
            // $data['category']= $this->CategoryM->list_categories();
            $this->load->view('admin/list-categories',$data);
        }else{
            redirect('admin');
        }
    }

}