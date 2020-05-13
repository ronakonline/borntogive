<?php

class CategoryM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function add_categories($data,$picture){
		$q = $this->db->query('INSERT INTO `category` VALUES (null,"'.$data['name'].'","'.$data['tagline'].'","'.$picture.'",0)');
		return $q;
	}

	public function list_categories(){
		$q = $this->db->query('SELECT * FROM `category` where isdeleted = 0');
		return $q->result();
	}
	
	public function delete_category($id){
		$q = $this->db->query('update category set isdeleted = 1 where id ='.$id);
		return $q;
	}

	public function get_category($id){
		$q = $this->db->query('select * from category where isdeleted = 0 AND id ='.$id);
		return $q->result();
	}

	public function edit_categories($data,$picture){
		$q = $this->db->query('update category set name="'.$data['name'].'",tagline="'.$data['tagline'].'",banner_img="'.$picture.'" where id="'.$data['id'].'"');
		return $q;
	}
}