<?php 

class Pedoman_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("pedoman", $data);
	}

	function fetch_data(){ 
		$query = $this->db->get("pedoman");
		return $query;
	}
}
?>