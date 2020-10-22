<?php 

class Mvendor_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("vendor", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("vendor", $data);
	}

	function fetch_data(){ 
		$query = $this->db->get("vendor");
		return $query;
	}

	function update_data($data, $id){
		$this->db->where("kode", $id);
		$this->db->update("vendor", $data);
	}

	function delete_data($id){
		$this->db->where("kode", $id);
		$this->db->delete("vendor");
	}
}

?>