<?php 
	/**
	 * 
	 */
	class Umum2_model extends CI_Model
	{
		
		function insert_data_umum($data){
			$this->db->insert("umum_perizinan", $data);
		}

		function fetch_data_umum(){
			$query = $this->db->get("umum_perizinan");
			return $query;
		}

		function update_data($data, $idmo){
			$this->db->where("id", $idmo);
			$this->db->update("umum_perizinan", $data);
		}

		function delete_data($idmo){
			$this->db->where("id", $idmo);
			$this->db->delete("umum_perizinan");
		}
	}
?>