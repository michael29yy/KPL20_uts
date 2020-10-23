<?php 

class Sewa_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("sewa", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("sewa", $data);
	}

	function fetch_data(){
		$query = $this->db->get("sewa");
		return $query;
	}

	function update_data($data, $idmo){
		$this->db->where("no_id", $idmo);
		$this->db->update("sewa", $data);
	}

	function delete_data($idmo){
		$this->db->where("no_id", $idmo);
		$this->db->delete("sewa");
	}
}

?>