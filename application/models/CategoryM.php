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
}