<?php

class AboutM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function getabout(){
		$q = $this->db->query('select about from sitesetting');
		return $q->result();
	}
}