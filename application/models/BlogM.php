<?php

class BlogM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function add_blog($data,$picture){
		$q = $this->db->query('INSERT INTO `blog` VALUES (null,"'.addslashes($data['title']).'","'.$picture.'","'.addslashes($data['blog']).'",now(),0)');
		return $q;
	}

	public function list_blogs(){
		$q = $this->db->query('SELECT * FROM `blog` where isdeleted = 0');
		return $q->result();
	}
	
	public function delete_blog($id){
		$q = $this->db->query('update blog set isdeleted = 1 where id ='.$id);
		return $q;
	}

	public function get_blog($id){
		$q = $this->db->query('select * from blog where isdeleted = 0 AND id ='.$id);
		return $q->result();
	}

	public function edit_blog($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update blog set title="'.addslashes($data['title']).'",blog="'.addslashes($data['blog']).'" where id="'.$data['id'].'"');
			return $q;
		}
		else{
			$q = $this->db->query('update blog set title="'.addslashes($data['title']).'",banner="'.$img.'",blog="'.addslashes($data['blog']).'" where id="'.$data['id'].'"');
			return $q;	
		}
	}
}