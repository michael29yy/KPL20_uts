<?php 

class Aset_tidak_bergerak_model extends CI_Model
{
	function insert_data_excel_aset_tanah($data) {
		$this->db->insert_batch("aset_tanah", $data);
	}

	function insert_data($data) {
		$this->db->insert("aset_tanah", $data);
	}

	function fetch_data(){ 
		$query = $this->db->get("aset_tanah");
		return $query;
	}

	function update_data_tanah($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_tanah", $data);
	}

	function update_gambar_asettb($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_tanah", $data);
	}

	function delete_data_aset_tanah($id){
		$this->db->where("id", $id);
		$this->db->delete("aset_tanah");
	}

	/*function multi_del($id){
		$this->db->where("id", $id);
		$this->db->delete("aset_tanah");
	}*/
}
?>