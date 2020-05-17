<?php

class Testimonial extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Testimonial";
                 $this->load->view('admin/add-testimonial',$data);
        }else{
            redirect('admin');
        }
    }

    //List Categories
    public function  list_testimonial(){
        if($_SESSION['admin']){
            $data['title'] = "All Testimonial";
            $this->load->model('TestimonialM');
            $data['testimonial']= $this->TestimonialM->list_testimonial();
            $this->load->view('admin/list-testimonial',$data);
        }else{
            redirect('admin');
        }
    }




    //Add Categorys (Query)
    public function add_testimonial(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture = $this->uploadimage($_FILES['profile'],"profile","testimonial");
            if($picture=="error"){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('TestimonialM');
                    $op = $this->TestimonialM->add_testimonial($data,$picture);
                    if($op==1){
                        $_SESSION['success'] = "Inserted Successfully";
                    }else{
                        $_SESSION['error'] = "Error Inserting";
                    }
            }
            redirect('admin/Testimonial');

        }else{
            redirect('admin');
        }
    }


    //List Categories
    public function  update_testimonial($id){
        if($_SESSION['admin']){
            $data['title'] = "Update Testimonial";
            $this->load->model('TestimonialM');
            $data['testimonial']= $this->TestimonialM->get_testimonial($id);
            $this->load->view('admin/edit-testimonial',$data);
        }else{
            redirect('admin');
        }
    }


    //Delete Parent(Query)
    public function deletetestimonial($id){
        if($_SESSION['admin']){
            $this->load->model('TestimonialM');
            $op = $this->TestimonialM->delete_testimonial($id);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Testimonial/list_testimonial');
        }else{
            redirect('admin');
        }
    }

    //Update Category
    public function edit_testimonial(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['profile']['error'] != 4 ){
                $picture = $this->uploadimage($_FILES['profile'],"profile","testimonial");
                if($picture=="error"){
                    $_SESSION['error']="Error Inserting Record";
                }else{
                        $this->load->model('TestimonialM');
                        $op = $this->TestimonialM->edit_testimonial($data,$picture);
                        if($op==1){
                            $_SESSION['success'] = "Updated Successfully";
                        }else{
                            $_SESSION['error'] = "Error Updating";
                        }
                }
                redirect('admin/Testimonial/update_testimonial/'.$data['id']);
            }
            else{

                $this->load->model('TestimonialM');
                $op = $this->TestimonialM->edit_testimonial($data);
                if($op==1){
                    $_SESSION['success'] = "Updated Successfully";
                }else{
                    $_SESSION['error'] = "Error Updating";
                }
                redirect('admin/Testimonial/update_testimonial/'.$data['id']);
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