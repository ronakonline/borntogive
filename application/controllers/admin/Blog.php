<?php

class Blog extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Blog";
                 $this->load->view('admin/add-blog',$data);
        }else{
            redirect('admin');
        }
    }

    //List Categories
    public function  list_blog(){
        if($_SESSION['admin']){
            $data['title'] = "All Blogs";
            $this->load->model('BlogM');
            $data['blog']= $this->BlogM->list_blogs();
            $this->load->view('admin/list-blog',$data);
        }else{
            redirect('admin');
        }
    }




    //Add Categorys (Query)
    public function add_blog(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","blog");
            if($picture=="error"){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('BlogM');
                    $op = $this->BlogM->add_blog($data,$picture);
                    if($op==1){
                        $_SESSION['success'] = "Inserted Successfully";
                    }else{
                        $_SESSION['error'] = "Error Inserting";
                    }
            }
            redirect('admin/Blog');

        }else{
            redirect('admin');
        }
    }


    //List Categories
    public function  update_blog($id){
        if($_SESSION['admin']){
            $data['title'] = "Update Blog";
            $this->load->model('BlogM');
            $data['blog']= $this->BlogM->get_blog($id);
            $this->load->view('admin/edit-blog',$data);
        }else{
            redirect('admin');
        }
    }


    //Delete Parent(Query)
    public function deleteblog($id){
        if($_SESSION['admin']){
            $this->load->model('BlogM');
            $op = $this->BlogM->delete_blog($id);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Blog/list_blog');
        }else{
            redirect('admin');
        }
    }

    //Update Blog
    public function edit_blog(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['banner']['error'] != 4){
                $picture = $this->uploadimage($_FILES['banner'],"banner","blog");
                if($picture=="error"){
                    $_SESSION['error']="Error Inserting Record";
                }else{
                        $this->load->model('BlogM');
                        $op = $this->BlogM->edit_blog($data,$picture);
                        if($op==1){
                            $_SESSION['success'] = "Updated Successfully";
                        }else{
                            $_SESSION['error'] = "Error Updating";
                        }
                }
                redirect('admin/Blog/update_blog/'.$data['id']);
            }
            else{
                $this->load->model('BlogM');
                $op = $this->BlogM->edit_blog($data);
                if($op==1){
                    $_SESSION['success'] = "Updated Successfully";
                }else{
                    $_SESSION['error'] = "Error Updating";
                }
                redirect('admin/Blog/update_blog/'.$data['id']);
            }

        }else{
            redirect('admin');
        }
    }

    //Common Image Uploader
    public  function  uploadimage($img,$name,$dest){
        $config['upload_path'] = 'uploads/images/'.$dest;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $img['name'];

        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if($this->upload->do_upload($name)){
            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];
            return $picture;
        }else{
            return "error";
        }
    }
}