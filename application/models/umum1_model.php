<?php 

class Umum1_model extends CI_Model
{
	
	function insert_data($data) {
		$this->db->insert("umum_perjanjian", $data);
	}

	function insert_data_excel($data) {
		$this->db->insert_batch("umum_perjanjian", $data);
	}

	function fetch_data(){
		$query = $this->db->get("umum_perjanjian");
		return $query;
	}

	function update_data($data, $id){
		$this->db->where("id", $id);
		$this->db->update("umum_perjanjian", $data);
	}

	function delete_data($id){
		$this->db->where("id", $id);
		$this->db->delete("umum_perjanjian");
	}

}

?>