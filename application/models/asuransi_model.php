<?php 

class Asuransi_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("asuransi", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("asuransi", $data);
	}

	function fetch_data(){
		$query = $this->db->get("asuransi");
		return $query;
	}

	function update_data($data, $idmo){
		$this->db->where("no_id", $idmo);
		$this->db->update("asuransi", $data);
	}

	function delete_data($idmo){
		$this->db->where("no_id", $idmo);
		$this->db->delete("asuransi");
	}

}

?>