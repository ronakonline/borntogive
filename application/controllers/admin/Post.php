<?php

class Post extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Post";
                 $this->load->view('admin/add-post',$data);
        }else{
            redirect('admin');
        }
    }

    //List Categories
    public function  list_posts(){
        if($_SESSION['admin']){
            $data['title'] = "All Posts";
            // $this->load->model('PostM');
            // $data['category']= $this->PostM->list_posts();
            $this->load->view('admin/list-posts',$data);
        }else{
            redirect('admin');
        }
    }

}