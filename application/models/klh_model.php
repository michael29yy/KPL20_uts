<?php 
	/**
	 * 
	 */
	class Klh_model extends CI_Model
	{
		
		function insert_data_klh($data){
			$this->db->insert("klh", $data);
		}

		function fetch_data_klh(){
			$query = $this->db->get("klh");
			return $query;
		}

		function update_data($data, $id){
			$this->db->where("id", $id);
			$this->db->update("klh", $data);
		}

		function delete_data($id){
			$this->db->where("id", $id);
			$this->db->delete("klh");
		}
	}
?>