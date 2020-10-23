<?php 

class Jualbeli_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("jual_beli", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("jual_beli", $data);
	}

	function fetch_data(){ 
		$query = $this->db->get("jual_beli");
		return $query;
	}

	function update_data($data, $idmo){
		$this->db->where("no_id", $idmo);
		$this->db->update("jual_beli", $data);
	}

	function delete_data($idmo){
		$this->db->where("no_id", $idmo);
		$this->db->delete("jual_beli");
	}

}

?>