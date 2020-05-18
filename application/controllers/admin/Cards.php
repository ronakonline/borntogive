<?php

class Cards extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Cards";
                 $this->load->view('admin/add-card',$data);
        }else{
            redirect('admin');
        }
    }

    //List Categories
    public function  list_cards(){
        if($_SESSION['admin']){
            $data['title'] = "All Cards";
            $this->load->model('CardsM');
            $data['cards']= $this->CardsM->list_cards();
            $this->load->view('admin/list-cards',$data);
        }else{
            redirect('admin');
        }
    }




    //Add Categorys (Query)
    public function add_card(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture = $this->uploadimage($_FILES['image'],"image","card");
            if($picture=="error"){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('CardsM');
                    $op = $this->CardsM->add_card($data,$picture);
                    if($op==1){
                        $_SESSION['success'] = "Inserted Successfully";
                    }else{
                        $_SESSION['error'] = "Error Inserting";
                    }
            }
            redirect('admin/Cards');

        }else{
            redirect('admin');
        }
    }


    //List Categories
    public function  update_card($id){
        if($_SESSION['admin']){
            $data['title'] = "Update Card";
            $this->load->model('CardsM');
            $data['card']= $this->CardsM->get_card($id);
            $this->load->view('admin/edit-card',$data);
        }else{
            redirect('admin');
        }
    }


    //Delete Parent(Query)
    public function deletecard($id){
        if($_SESSION['admin']){
            $this->load->model('CardsM');
            $op = $this->CardsM->delete_card($id);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Cards/list_cards');
        }else{
            redirect('admin');
        }
    }

    //Update Category
    public function edit_card(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['image']['error'] != 4 ){
                $picture = $this->uploadimage($_FILES['image'],"image","card");
                if($picture=="error"){
                    $_SESSION['error']="Error Inserting Record";
                }else{
                        $this->load->model('CardsM');
                        $op = $this->CardsM->edit_card($data,$picture);
                        if($op==1){
                            $_SESSION['success'] = "Updated Successfully";
                        }else{
                            $_SESSION['error'] = "Error Updating";
                        }
                }
                redirect('admin/Cards/update_card/'.$data['id']);
            }
            else{

                $this->load->model('CardsM');
                $op = $this->CardsM->edit_card($data);
                if($op==1){
                    $_SESSION['success'] = "Updated Successfully";
                }else{
                    $_SESSION['error'] = "Error Updating";
                }
                redirect('admin/Cards/update_card/'.$data['id']);
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