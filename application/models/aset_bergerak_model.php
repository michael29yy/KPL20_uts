<?php 

class Aset_bergerak_model extends CI_Model
{
	function insert_data_excel_alat_berat($data) {
		$this->db->insert_batch("aset_alat_berat", $data);
	}

	function insert_data_excel_kendaraan($data) {
		$this->db->insert_batch("aset_kendaraan", $data);
	}

	function insert_data_excel_property($data) {
		$this->db->insert_batch("aset_property", $data);
	}

	function insert_data_alat_berat($data) {
		$this->db->insert("aset_alat_berat", $data);
	}

	function insert_data_kendaraan($data) {
		$this->db->insert("aset_kendaraan", $data);
	}

	function insert_data_property($data) {
		$this->db->insert("aset_property", $data);
	}

	function fetch_data_alat_berat(){
		$query = $this->db->get("aset_alat_berat");
		return $query;
	}

	function fetch_data_kendaraan(){ 
		$query = $this->db->get("aset_kendaraan");
		return $query;
	}

	function fetch_data_property(){ 
		$query2 = $this->db->get("aset_property");
		return $query2;
	}

	function update_data_alat_berat($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_alat_berat", $data);
	}

	function update_data_kendaraan($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_kendaraan", $data);
	}

	function update_data_property($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_property", $data);
	}

	function update_gambar_alat_berat($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_alat_berat", $data);
	}

	function update_gambar_kendaraan($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_kendaraan", $data);
	}

	function update_gambar_property($data, $id){
		$this->db->where("id", $id);
		$this->db->update("aset_property", $data);
	}

	function delete_data_alat_berat($id){
		$this->db->where("id", $id);
		$this->db->delete("aset_alat_berat");
	}

	function delete_data_kendaraan($id){
		$this->db->where("id", $id);
		$this->db->delete("aset_kendaraan");
	}

	function delete_data_property($id){
		$this->db->where("id", $id);
		$this->db->delete("aset_property");
	}

}
?>