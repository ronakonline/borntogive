<?php

class PostM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function show_category(){
		$q = $this->db->query('SELECT * FROM `category` where isdeleted = 0');
		return $q->result();
	}

	public function add_post($data,$pic1,$pic2,$pic3){
		$q = $this->db->query('INSERT INTO `post`VALUES (null,"'.$data['title'].'","'.$data['category'].'","'.$pic1.'","'.$data['youwill'].'","'.$data['youget'].'","'.$pic2.'","'.$data['whohelp'].'","'.$pic3.'","'.$data['details'].'",0)');
		return $q;
	}
	
	public function list_posts(){
		$q = $this->db->query('SELECT post.id, post.title, category.name FROM post, category where post.cid = category.id AND post.isdeleted = 0');
		return $q->result();
	}

	public function delete_post($id){
		$q = $this->db->query('update post set isdeleted = 1 where id ='.$id);
		return $q;
	}
}