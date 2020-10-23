<?php 
	/**
	 * 
	 */
	class Stnk_model extends CI_Model
	{
		
		function insert_data_stnk($data){
			$this->db->insert("stnk", $data);
		}

		function fetch_data_stnk(){
			$query = $this->db->get("stnk");
			return $query;
		}

		function update_data($data, $idmo){
			$this->db->where("id", $idmo);
			$this->db->update("stnk", $data);
		}

		function delete_data($idmo){
			$this->db->where("id", $idmo);
			$this->db->delete("stnk");
		}
	}
?>