<?php

class CardsM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function add_card($data,$picture){
		$q = $this->db->query('INSERT INTO `cards` VALUES (null,"'.$data['entries'].'","'.$picture.'","'.addslashes($data['detail']).'","'.$data['price'].'",0)');
		return $q;
	}

	public function list_cards(){
		$q = $this->db->query('SELECT * FROM `cards` where isdeleted=0');
		return $q->result();
	}
	
	public function delete_card($id){
		$q = $this->db->query('update cards set isdeleted = 1 where id ='.$id);
		return $q;
	}

	public function get_card($id){
		$q = $this->db->query('select * from cards where id ='.$id);
		return $q->result();
	}

	public function edit_card($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update cards set entries="'.$data['entries'].'",price="'.$data['price'].'",detail="'.$data['detail'].'" where id="'.$data['id'].'"');
			return $q;
		}
		else{
			
			$q = $this->db->query('update cards set entries="'.$data['entries'].'",detail="'.$data['detail'].'",image="'.$img.'" where id="'.$data['id'].'"');
			return $q;	
		}
	}
}