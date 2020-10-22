<?php

class Dashboard_model extends CI_Model
{
	
	function fetch_year(){
		$this->db->select('periode_mulai');
		$this->db->from('sewa');
		$this->db->group_by('YEAR(periode_mulai)');
		$this->db->order_by('periode_mulai', 'DESC');
		return $this->db->get();
	}

	function fetch_chart_data($year){
		$query = "SELECT COUNT(no_id) as jumlah, MONTH(periode_mulai) as bulan from sewa where YEAR(periode_mulai) = '$year' GROUP BY MONTH(periode_mulai) ORDER BY MONTH(periode_mulai) ASC";
		return $this->db->query($query)->result_array();
	}
}

?>