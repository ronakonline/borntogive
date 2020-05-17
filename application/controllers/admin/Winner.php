<?php

class Winner extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
            $data['title']="Add Winner";
            $this->load->view('admin/add-winner',$data);
        }else{
            redirect('admin');
        }
    }


    //Insert Winner
    public function add_winner(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $data = $this->input->post();

            // Count total files
            $countfiles = count($_FILES['files']['name']);

            // Looping all files
            for($i=0;$i<$countfiles;$i++){

                if(!empty($_FILES['files']['name'][$i])){

                    // Define new $_FILES array - $_FILES['file']
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                    // Set preference
                    $config['upload_path'] = 'uploads/images/winner';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size'] = '5000'; // max_size in kb
                    $config['file_name'] = $_FILES['files']['name'][$i];

                    //Load upload library
                    $this->load->library('upload',$config);

                    // File upload
                    if($this->upload->do_upload('file')){
                        // Get data about the file
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];

                        // Initialize array
                        $data['filenames'][] = $filename;
                    }
                }

            }


            
            // $pic['picture1'] = $this->uploadimage($_FILES[''],"file1","destination");
             $this->load->model("WinnerM");


             $qu = $this->WinnerM->insert_winner($data);
             echo $qu;
             if ($qu==1) {
                  $_SESSION['success']="Inserted Successfully";
             }
             else{
                  $_SESSION['error']="Error Inserting Record";
             }
             redirect('admin/Winner');
        }
        else{
            redirect('admin');
        }        
    }


    

    //List-Winner(Page)
    public function list_winner(){
        if($_SESSION['admin']){
            $data['title']="List Winner";
            $this->load->model('WinnerM');
            $data['img'] = $this->WinnerM->getwinner();
            $this->load->view('admin/list-winner',$data); 
        }
        else{
            redirect('admin');
        }
    }


    public function update_winner(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if($_FILES['img']['error']==4){
                $_SESSION['error']="No Image Selected";
                redirect('admin/Winner/list_winner');
            }else{
                $data['img'] = $this->uploadimage($_FILES['img'],"img","winner");
                $this->load->model("WinnerM");
                $qu = $this->WinnerM->update_winner($data);
                if ($qu==1) {
                    $_SESSION['success']="Updated Successfully";
                }
                else{
                    $_SESSION['error']="Error Updating Record";
                }
                //echo $qu;
                redirect('admin/Winner/list_winner');
            }
        }
        else{
            redirect('admin');
        }
    }


    public function delete_winner(){
        if($_SESSION['admin']){
            $id = $_POST['id'];
            $this->load->model("WinnerM");
            $qu = $this->WinnerM->delete_winner($id);
            $_SESSION['success']="Deleted Successfully";
        }
        else{
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
