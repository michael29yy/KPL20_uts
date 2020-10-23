<?php 
	/**
	 * 
	 */
	class Kir_model extends CI_Model
	{
		
		function insert_data_kir($data){
			$this->db->insert("kir", $data);
		}

		function fetch_data_kir(){
			$query = $this->db->get("kir");
			return $query;
		}

		function update_data($data, $idmo){
			$this->db->where("id", $idmo);
			$this->db->update("kir", $data);
		}

		function delete_data($idmo){
			$this->db->where("id", $idmo);
			$this->db->delete("kir");
		}
	}
?>