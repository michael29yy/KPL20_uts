<?php
	/**
	  * 
	  */
 	class Log_activity_model extends CI_Model{
 	
 		function get_data_nik($nik){
 			$query = "SELECT * FROM data_admin WHERE username = '$nik'";
 			return $this->db->query($query)->result_array();
 		}

	 	function insert_log($data){
	 		$this->db->insert("log_activity_legal", $data);
	 	}

	 	function fetch_data(){ 
			$query = "SELECT * FROM log_activity_legal ORDER BY date DESC, time DESC";
			return $this->db->query($query);
		}
} 
?>