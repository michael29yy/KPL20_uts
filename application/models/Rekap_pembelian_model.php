<?php 

class Rekap_pembelian_model extends CI_Model
{

	function fetch_data_kategori(){ 
		$query = $this->db->get("kategori");
		return $query;
	}

}