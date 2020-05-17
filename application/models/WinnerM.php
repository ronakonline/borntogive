<?php

class WinnerM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	//Insert Gallery
	public function insert_winner($data){
		$this->load->database();
		$qu = 'insert into winner values';
		$total = count($data['filenames']);
		for($i=0; $i<$total; $i++){
			if($i==$total-1){
				$qu .= '(null,"'.$data['filenames'][$i].'",now(),0)';
			}else{
				$qu .= '(null,"'.$data['filenames'][$i].'",now(),0),';
			}
		}
		$q = $this->db->query($qu);
		return $q;
	}

	public function getwinner(){
		$q = $this->db->query("select * from winner where isdeleted = 0");
		return $q->result();
	}


	public function update_winner($data){
		$this->load->database();
		$q = $this->db->query('update winner set image="'.$data['img'].'" where id='.$data['id']);
		return $q;
	}

	public function delete_winner($id){
		$this->load->database();
		$q = $this->db->query('update winner set isdeleted=1 where id='.$id);
		return $q;
	}
}