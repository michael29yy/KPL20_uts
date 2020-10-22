<?php

class Pengaturanprofil extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('HalamanLogin');
		}
		else{
                    if ($this->session->userdata('id_role') != 29) {
                        redirect('HalamanLogin');
                    }
		}

		$this->load->library('form_validation');
		$this->load->model('pengaturanprofil_model');
	}

	public function index(){
		$data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
		//$data['fetch_data'] = $this->pengaturanprofil_model->fetch_data();
		$this->load->view('template/legal/pengaturanprofil.php',$data);
	}

	public function edit_email(){
		$nik = $this->session->userdata('username');

		$this->form_validation->set_rules('email', 'email', 'required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'email' => $this->input->post('email')
			);
			$this->pengaturanprofil_model->ubah_email($data, $nik);
			$this->session->set_flashdata('sccm', 'Email berhasil dirubah!!');
		}

		redirect('Pengaturanprofil');
	}

	public function edit_password(){
		$nik = $this->session->userdata('username');

		$p1 = $this->input->post('password');
		$p2 = $this->input->post('password2');

		if ($p1 == $p2) {
			$data = array(
				'password'=>$p1
			);

			$this->pengaturanprofil_model->ubah_password($data,$nik);
			$this->session->set_flashdata('scc', 'Password berhasil dirubah!!');
		}

		else{
			$this->session->set_flashdata('notm', 'Password baru dan konfirmasi tidak sama!!');
			redirect('Pengaturanprofil');
		}

		redirect('Pengaturanprofil');
	}
}
?>