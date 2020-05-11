<?php

class Seo extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add SEO";
                 $this->load->view('admin/add-seo',$data);
        }else{
            redirect('admin');
        }
    }

    //List SEO
    public function  list_seo(){
        if($_SESSION['admin']){
            $data['title'] = "All SEO";
            $this->load->model('SeoM');
            $data['seo']= $this->SeoM->list_seo();
            $this->load->view('admin/list-seo',$data);
        }else{
            redirect('admin');
        }
    }
    
    //Add SEO
    public function add_SEO(){
        if($_SESSION['admin']){
            $data['title'] = "Add-SEO";
            // $this->load->model('SeoM');
            // $data['seo']= $this->SeoM->add_seo();
            $this->load->view('admin/add-seo',$data);
        }else{
            redirect('admin');
        }
    }

    //Update SEO
    public function update_seo(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $this->load->model("SeoM");
            $qu = $this->SeoM->update_seo($data);
            if ($qu==1) {
                $_SESSION['success']="Updated Successfully";
            }
            else{
                $_SESSION['error']="Error Updating Record";
            }
            //echo $qu;
            redirect('admin/Seo/add_SEO');
        }
        else{
            redirect('admin');
        }
    }

    
    
}
