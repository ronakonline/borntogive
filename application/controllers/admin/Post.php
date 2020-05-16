<?php

class Post extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
            $data['title']="Add Post";
            $this->load->model("PostM");
            $data["post"] = $this->PostM->show_category();
            $this->load->view('admin/add-post',$data);
        }else{
            redirect('admin');
        }
    }

    //List Categories
    public function  list_posts(){
        if($_SESSION['admin']){
            $data['title'] = "All Posts";
            $this->load->model('PostM');
            $data['post']= $this->PostM->list_posts();
            $this->load->view('admin/list-posts',$data);
        }else{
            redirect('admin');
        }
    }

    //Add Post (Query)
    public function add_post(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture1 = $this->uploadimage($_FILES['bannerimg1'],"bannerimg1","post");
            $picture2 = $this->uploadimage($_FILES['bannerimg2'],"bannerimg2","post");
            $picture3 = $this->uploadimage($_FILES['bannerimg3'],"bannerimg3","post");
            if($picture1=="error" || $picture2=="error" || $picture3=="error" ){
                $_SESSION['error']="Error Inserting Record";
            }else{
                $this->load->model('PostM');
                $op = $this->PostM->add_post($data,$picture1,$picture2,$picture3);
                if($op==1){
                    $_SESSION['success'] = "Inserted Successfully";
                }else{
                    $_SESSION['error'] = "Error Inserting";
                }
            }
            redirect('admin/Post');

        }else{
            redirect('admin');
        }
    }

    //Update general TAB
    public function edit_general(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['bannerimg1']['error'] != 4){
                $picture = $this->uploadimage($_FILES['bannerimg1'],"bannerimg1","post");

                if($picture=="error"){
                    $_SESSION['error']="Error Updating Record";
                    redirect('admin/Post/update_post/'.$data['id']);
                }
                else{
                    $this->load->model('PostM');
                    $op = $this->PostM->edit_general($data,$picture);        
                    if($op==1){
                        $_SESSION['success']="Successfully Update";
                    }
                    else{
                        $_SESSION['error']="Error Updating";
                    }

                    redirect('admin/Post/update_post/'.$data['id']);
                }
            }          
            else{

                $this->load->model('PostM');
                $op = $this->PostM->edit_general($data);
                echo $op;
                if($op==1){
                $_SESSION['success']="Successfully Updated";
                }else{
                    $_SESSION['error']="Error updating";
                }
                redirect('admin/Post/update_post/'.$data['id']);
            }
        }
        else{
            redirect('admin');   
        }
    }

    //Update get TAB
    public function edit_get(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['bannerimg2']['error'] != 4){
                $picture = $this->uploadimage($_FILES['bannerimg2'],"bannerimg2","post");

                if($picture=="error"){
                    $_SESSION['error']="Error Updating Record";
                    redirect('admin/Post/update_post/'.$data['id']);
                }
                else{
                    $this->load->model('PostM');
                    $op = $this->PostM->edit_get($data,$picture);        
                    if($op==1){
                        $_SESSION['success']="Successfully Update";
                    }
                    else{
                        $_SESSION['error']="Error Updating";
                    }

                    redirect('admin/Post/update_post/'.$data['id']);
                }
            }          
            else{

                $this->load->model('PostM');
                $op = $this->PostM->edit_get($data);
                echo $op;
                if($op==1){
                $_SESSION['success']="Successfully Updated";
                }else{
                    $_SESSION['error']="Error updating";
                }
                redirect('admin/Post/update_post/'.$data['id']);
            }
        }
        else{
            redirect('admin');   
        }
    }

    //Update help TAB
    public function edit_help(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['bannerimg3']['error'] != 4){
                $picture = $this->uploadimage($_FILES['bannerimg3'],"bannerimg3","post");

                if($picture=="error"){
                    $_SESSION['error']="Error Updating Record";
                    redirect('admin/Post/update_post/'.$data['id']);
                }
                else{
                    $this->load->model('PostM');
                    $op = $this->PostM->edit_help($data,$picture);        
                    if($op==1){
                        $_SESSION['success']="Successfully Update";
                    }
                    else{
                        $_SESSION['error']="Error Updating";
                    }

                    redirect('admin/Post/update_post/'.$data['id']);
                }
            }          
            else{

                $this->load->model('PostM');
                $op = $this->PostM->edit_help($data);
                
                if($op==1){
                $_SESSION['success']="Successfully Updated";
                }else{
                    $_SESSION['error']="Error updating";
                }
                redirect('admin/Post/update_post/'.$data['id']);
            }
        }
        else{
            redirect('admin');   
        }
    }

    //Update help TAB
    public function edit_details(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $this->load->model('PostM');
            $op = $this->PostM->edit_details($data);
            
            if($op==1){
            $_SESSION['success']="Successfully Updated";
            }else{
                $_SESSION['error']="Error updating";
            }
            redirect('admin/Post/update_post/'.$data['id']);
        }
        else{
            redirect('admin');   
        }
    }

    //List Posts
    public function  update_post($id){
        if($_SESSION['admin']){
            $data['title'] = "Update Post";
            $this->load->model('CategoryM');
            $data['category']= $this->CategoryM->list_categories();
            $this->load->model('PostM');
            $data['post']= $this->PostM->get_post($id);
            $this->load->view('admin/edit-post',$data);
        }else{
            redirect('admin');
        }
    }

    //Delete Post(Query)
    public function deletepost($id){
        if($_SESSION['admin']){
            $this->load->model('PostM');
            $op = $this->PostM->delete_post($id);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Post/list_posts');
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