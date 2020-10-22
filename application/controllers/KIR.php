<?php

class KIR extends CI_Controller
{

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

        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('kir_model');
        $this->load->model('log_activity_model');
    }

    public function index()
    {
    	$this->load->model("kir_model");
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
    	$data["fetch_data_kir"] = $this->kir_model->fetch_data_kir();
        $this->load->view('template/legal/kir.php', $data);
    }

    public function tambah_dokumen_kir(){
        $this->load->model("kir_model");


        $file = $_FILES['file_kir']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_kir');

        $file = $this->upload->data('file_name');

        $data = array(
            "nama_dokumen" => $file,
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file

        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "KIR";
        $in_dex = "Data Baru";
        $date = date("Y/m/d");
        $time = date("H:i:sa");

        $datalog = array(
            "NIK" => $nik,
            "nama" => $nama,
            "action" => $action,
            "objek" => $objek,
            "in_dex" => $in_dex,
            "date" => $date,
            "time" => $time
        );

        $this->kir_model->insert_data_kir($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
        redirect("KIR");

    }

    public function update_kir(){
        $this->load->model("kir_model");

        $file = $_FILES['file_kir']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_kir');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "nama_dokumen" =>$file,
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file         
        );

        $data2 = array(
            "nama_dokumen" =>$this->input->post("nama_dokumen"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $cekfile     
        );

        $id = $this->input->post("hidden_id");
        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate data";
        $objek = "KIR";
        $in_dex = "Data id = " . $id;
        $date = date("Y/m/d");
        $time = date("H:i:sa");

        $datalog = array(
            "NIK" => $nik,
            "nama" => $nama,
            "action" => $action,
            "objek" => $objek,
            "in_dex" => $in_dex,
            "date" => $date,
            "time" => $time
        );

        
        if ($file) {
            $this->kir_model->update_data($data, $this->input->post("hidden_id"));  
            $this->log_activity_model->insert_log($datalog);     
        } else {
            $this->kir_model->update_data($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("KIR");
        
    }

    public function delete_kir(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $pathfilefolder = './assets/files/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "KIR";
        $in_dex = "Data id = " . $id;
        $date = date("Y/m/d");
        $time = date("H:i:sa");

        $datalog = array(
            "NIK" => $nik,
            "nama" => $nama,
            "action" => $action,
            "objek" => $objek,
            "in_dex" => $in_dex,
            "date" => $date,
            "time" => $time
        );

        if (file_exists($pathfilefolder.$file_del)) {
            @unlink($pathfilefolder.$file_del);
        }

        $this->kir_model->delete_data($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("KIR");
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }

}
?>
