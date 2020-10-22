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

	function update_data($data, $id){
		$this->db->where("id", $id);
		$this->db->update("barang", $data);
	}

	function delete_data($id){
		$this->db->where("id", $id);
		$this->db->delete("barang");
	}
}

?>