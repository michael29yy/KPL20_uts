<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leasing extends CI_Controller
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
        $this->load->model('leasing_model');
        $this->load->model('log_activity_model');
        $this->load->library('excel');
    }

    public function index()
    {
        $this->load->model('leasing_model');
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data["fetch_data"] = $this->leasing_model->fetch_data();
        $this->load->view('template/legal/leasing.php', $data);
    }

    public function download_format_excel(){
        $this->load->helper('download');

        $filename = "format_leasing.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_leasing.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_leasing(){
        if(isset($_FILES["file_excel_leasing"]["name"])){
            $path = $_FILES["file_excel_leasing"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $no_perjanjian = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nama_unit = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $jumlah = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $periode_mulai = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $periode_selesai = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $lessor = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();

                    $periode_mulai_c = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($periode_mulai));
                    $periode_selesai_c = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($periode_selesai));

                    $data[] = array(
                        'no_perjanjian' => $no_perjanjian,
                        'nama_unit' => $nama_unit,
                        'jumlah' => $jumlah,
                        'periode_mulai' => $periode_mulai_c,
                        'periode_selesai' => $periode_selesai_c,
                        'lessor' => $lessor,
                        'keterangan' => $keterangan
                    );
                }
            }

            $nik = $this->session->userdata('username');
            $datanik = $this->log_activity_model->get_data_nik($nik);
            foreach ($datanik as $row) {
                $nama = $row['nama'];
            }
            $action = "Import Excel";
            $objek = "Leasing";
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

            $this->leasing_model->insert_data_excel($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("Leasing");
    }

    public function tambahleasing(){
        $this->load->model('leasing_model');

    	$file = $_FILES['file_leasing']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_leasing');

        $file = $this->upload->data('file_name');

        $data = array(
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "nama_unit" =>$this->input->post("nama_unit"),
            "jumlah" =>$this->input->post("jumlah"),
            "periode_mulai" =>$this->input->post("periode_mulai"),
            "periode_selesai" =>$this->input->post("periode_selesai"),
            "lessor" =>$this->input->post("lessor"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file
        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Leasing";
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

        $this->leasing_model->insert_data($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
        redirect("Leasing");
    }

    public function update_leasing(){
        $this->load->model("leasing_model");

        $file = $_FILES['file_leasing']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_leasing');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "nama_unit" =>$this->input->post("nama_unit"),
            "jumlah" =>$this->input->post("jumlah"),
            "periode_mulai" =>$this->input->post("periode_mulai"),
            "periode_selesai" =>$this->input->post("periode_selesai"),
            "lessor" =>$this->input->post("lessor"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file         
        );

        $data2 = array(
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "nama_unit" =>$this->input->post("nama_unit"),
            "jumlah" =>$this->input->post("jumlah"),
            "periode_mulai" =>$this->input->post("periode_mulai"),
            "periode_selesai" =>$this->input->post("periode_selesai"),
            "lessor" =>$this->input->post("lessor"),
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
        $objek = "Leasing";
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
            $this->leasing_model->update_data($data, $this->input->post("hidden_id"));  
            $this->log_activity_model->insert_log($datalog);     
        } else {
            $this->leasing_model->update_data($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);
        }
        
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("Leasing");
        
    }

    public function delete_leasing(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $pathfilefolder = './assets/files/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Leasing";
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
        
        $this->leasing_model->delete_data($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("Leasing");
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }
}
