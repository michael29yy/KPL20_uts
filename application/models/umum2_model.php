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

		function update_data($data, $id){
			$this->db->where("id", $id);
			$this->db->update("umum_perizinan", $data);
		}

		function delete_data($id){
			$this->db->where("id", $id);
			$this->db->delete("umum_perizinan");
		}
	}
?>