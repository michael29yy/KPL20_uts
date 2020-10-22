<?php 

class Pengaturanprofil_model extends CI_Model
{

	function ubah_email($data, $nik){
		$this->db->where("username", $nik);
		$this->db->update("data_admin", $data);
	}

	function ubah_password($data, $nik){
		$this->db->where("username", $nik);
		$this->db->update("data_admin", $data);
	}
}

?>