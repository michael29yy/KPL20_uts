<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogActivity extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('HalamanLogin');
		}
		else{
			$data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
			if ($this->session->userdata('id_role') != 29) {
                redirect('HalamanLogin');
            }
		}

		$this->load->model('log_activity_model');
	}

	public function index(){
		$data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['fetch_data'] = $this->log_activity_model->fetch_data();
		$this->load->view('template/legal/logactivity.php', $data);
	}

}
?>