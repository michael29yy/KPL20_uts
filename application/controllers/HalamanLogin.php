<?php

class HalamanLogin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$username = $this->session->userdata('username');
		if ($username) {
			redirect('Dashboard');
        }
    }
	public function index(){
		$data['logo'] = base_url('assets/img/logo_perusahaan/L_Rasita.png');
		$this->load->view('template/login/login.php', $data);
	}

	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('data_admin', ['username' => $username])->row_array();

			//Model Check
			$this->load->model('login_model');
			if ($this->login_model->can_login($username, $password)){
				$session_data = array(
					'username' => $username,
					'id_role' => $user['id_role']
				);
				$this->session->set_userdata($session_data);
				redirect('Dashboard');
			}
			else{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect('HalamanLogin');
			}
		}
		else{
			$this->index();
		}
	}

}
?>