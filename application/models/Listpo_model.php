<?php 

class Listpo_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("barang", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("barang", $data);
	}

	function fetch_data(){ 
		$query = $this->db->get("barang");
		return $query;
	}

	function update_data($data, $idmo){
		$this->db->where("id", $idmo);
		$this->db->update("barang", $data);
	}

	function delete_data($idmo){
		$this->db->where("id", $idmo);
		$this->db->delete("barang");
	}
}

?>