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
            $this->load->model('CategoryM');
            $data['category']= $this->CategoryM->list_categories();
            $this->load->view('admin/list-categories',$data);
        }else{
            redirect('admin');
        }
    }




    //Add Categorys (Query)
    public function add_category(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","category");
            if($picture=="error"){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('CategoryM');
                    $op = $this->CategoryM->add_categories($data,$picture);
                    if($op==1){
                        $_SESSION['success'] = "Inserted Successfully";
                    }else{
                        $_SESSION['error'] = "Error Inserting";
                    }
            }
            redirect('admin/Categories');

        }else{
            redirect('admin');
        }
    }


    //List Categories
    public function  update_category($id){
        if($_SESSION['admin']){
            $data['title'] = "Update Category";
            $this->load->model('CategoryM');
            $data['category']= $this->CategoryM->get_category($id);
            $this->load->view('admin/edit-category',$data);
        }else{
            redirect('admin');
        }
    }


    //Delete Parent(Query)
    public function deletecategory($id,$img){
        if($_SESSION['admin']){
            $this->load->model('CategoryM');
            $op = $this->CategoryM->delete_category($id);
            unlink("uploads/images/category/".$img);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Categories/list_categories');
        }else{
            redirect('admin');
        }
    }

    //Update Category
    public function edit_category(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","category");
            if($picture=="error"){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('CategoryM');
                    $op = $this->CategoryM->edit_categories($data,$picture);
                    if($op==1){
                        $_SESSION['success'] = "Updated Successfully";
                    }else{
                        $_SESSION['error'] = "Error Updating";
                    }
            }
            redirect('admin/Categories/update_category/'.$data['id']);

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