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
		$q = $this->db->query('INSERT INTO `post`VALUES (null,"'.addslashes($data['title']).'","'.addslashes($data['category']).'","'.addslashes($pic1).'","'.addslashes($data['youwill']).'","'.addslashes($data['youget']).'","'.addslashes($pic2).'","'.addslashes($data['whohelp']).'","'.addslashes($pic3).'","'.addslashes($data['details']).'",0,now())');
		return $q;
	}
	
	public function list_posts(){
		$q = $this->db->query('SELECT post.id, post.title, category.name FROM post, category where post.cid = category.id AND post.isdeleted = 0');
		return $q->result();
	}

	public function get_post($id){
		$q = $this->db->query('SELECT category.`name`, post.`id`, post.`title`, post.`cid`, post.`banner_img1`, post.`youwill`, post.`youget`, post.`banner_img2`, post.`whohelp`, post.`banner_img3`, post.`details` FROM `post`,`category` WHERE post.cid = category.id AND post.isdeleted = 0 AND post.id='.$id);
		return $q->result();
	}

	//Update General Tag
	public function edit_general($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update post set title= "'.addslashes($data['title']).'",cid="'.$data['category'].'",youwill="'.addslashes($data['youwill']).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
		else{
			$q = $this->db->query('update post set title= "'.addslashes($data['title']).'",cid="'.$data['category'].'", banner_img1 = "'.addslashes($img).'",youwill="'.addslashes($data['youwill']).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
	}

	//Update Get Tag
	public function edit_get($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update post set youget= "'.addslashes($data['youget']).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
		else{
			$q = $this->db->query('update post set youget= "'.addslashes($data['youget']).'", banner_img2 = "'.addslashes($img).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
	}

	//Update Help Tag
	public function edit_help($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update post set whohelp= "'.addslashes($data['whohelp']).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
		else{
			$q = $this->db->query('update post set whohelp= "'.addslashes($data['whohelp']).'", banner_img3 = "'.addslashes($img).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
	}

	//Update Details Tag
	public function edit_details($data){
		$q = $this->db->query('update post set details= "'.addslashes($data['details']).'" where id = "'.$data['id'].'" AND isdeleted = 0');
		return $q;
		
	}

	public function delete_post($id){
		$q = $this->db->query('update post set isdeleted = 1 where id ='.$id);
		return $q;
	}

	public function show_post_category($id){
		$q = $this->db->query('SELECT category.`name`, post.`id`, post.`title`, post.`cid`, post.`banner_img1`, post.`youwill`, post.`youget`, post.`banner_img2`, post.`whohelp`, post.`banner_img3`, post.`details`, post.`created` FROM `post`,`category` WHERE post.cid = category.id AND post.isdeleted = 0 AND post.cid='.$id);
		return $q->result();
	}

	public function show_post($id){
		$q = $this->db->query('SELECT category.`name`, post.`id`, post.`title`, post.`cid`, post.`banner_img1`, post.`youwill`, post.`youget`, post.`banner_img2`, post.`whohelp`, post.`banner_img3`, post.`details`, post.`created` FROM `post`,`category` WHERE post.cid = category.id AND post.isdeleted = 0 AND post.id='.$id);
		return $q->result();
	}
}