<?php 

class Leasing_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("leasing", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("leasing", $data);
	}

	function fetch_data(){ 
		$query = $this->db->get("leasing");
		return $query;
	}

	function update_data($data, $id){
		$this->db->where("id", $id);
		$this->db->update("leasing", $data);
	}

	function delete_data($id){
		$this->db->where("id", $id);
		$this->db->delete("leasing");
	}
}

?>