<?php 
	/**
	 * 
	 */
	class B3_model extends CI_Model
	{
		
		function insert_data_b3($data){
			$this->db->insert("b3", $data);
		}

		function fetch_data_b3(){
			$query = $this->db->get("b3");
			return $query;
		}

		function update_data($data, $id){
			$this->db->where("id", $id);
			$this->db->update("b3", $data);
		}

		function delete_data($id){
			$this->db->where("id", $id);
			$this->db->delete("b3");
		}
	}
?>