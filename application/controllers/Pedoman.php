<?php

class Pedoman extends CI_Controller{

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

		$this->load->model('pedoman_model');
		$this->load->model('log_activity_model');
	}

	public function index(){
		$data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['fetch_data'] = $this->pedoman_model->fetch_data();
		$this->load->view('template/legal/pedoman.php', $data);
	}

	public function tambah_pedoman(){
		$file = $_FILES['file_pedoman']['name'];

        $config['upload_path'] = './assets/files/pedoman';
        $config['allowed_types'] = 'pdf|docx';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_pedoman');

        $file = $this->upload->data('file_name');

        $data = array(
        	"nama_file" => $file,
        	"keterangan" => $this->input->post('keterangan'),
        	"file" => $file
        );

        $this->pedoman_model->insert_data($data);
        $this->session->set_flashdata('alrt', 'ditambahkan');
        redirect("Pedoman");
	}
}
?>