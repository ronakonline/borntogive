<?php

class SeoM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function add_seo(){
		$q = $this->db->query('');
		return $q->result();
	}

	public function list_seo(){
		$q = $this->db->query('SELECT * FROM `seotag`');
		return $q->result();
	}

	public function update_seo($data){
		$q = $this->db->query('update seotag set tags="'.$data['tags'].'",meta_tag="'.$data['metatags'].'",keywords="'.$data['keywords'].'",indexing='.$data['indexing'].',follow='.$data['follow'].'  where page='.$data['id']);
		return $q;
	}
}