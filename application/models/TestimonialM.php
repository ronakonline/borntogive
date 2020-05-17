<?php

class TestimonialM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function add_testimonial($data,$picture){
		$q = $this->db->query('INSERT INTO `testimonial` VALUES (null,"'.$data['name'].'","'.addslashes($data['feedback']).'","'.$picture.'",0)');
		return $q;
	}

	public function list_testimonial(){
		$q = $this->db->query('SELECT * FROM `testimonial` where isdeleted = 0');
		return $q->result();
	}
	
	public function delete_testimonial($id){
		$q = $this->db->query('update testimonial set isdeleted = 1 where id ='.$id);
		return $q;
	}

	public function get_testimonial($id){
		$q = $this->db->query('select * from testimonial where isdeleted = 0 AND id ='.$id);
		return $q->result();
	}

	public function edit_testimonial($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update testimonial set name="'.$data['name'].'",feedback="'.$data['feedback'].'" where id="'.$data['id'].'"');
			return $q;
		}
		else{
			
			$q = $this->db->query('update testimonial set name="'.$data['name'].'",feedback="'.$data['feedback'].'",profile="'.$img.'" where id="'.$data['id'].'"');
			return $q;	
		}
	}
}