<?php

class Sewa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('HalamanLogin');
        }
        if ($this->session->userdata('id_role') != 29) {
            redirect('HalamanLogin');
        }

        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('sewa_model');
        $this->load->model('log_activity_model');
        $this->load->library('excel');
    }

    public function index(){

    	$this->load->model("sewa_model");
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
    	$data["fetch_data"] = $this->sewa_model->fetch_data();
        $this->load->view('template/legal/sewa.php', $data);
    }

    public function download_format_excel(){
        $this->load->helper('download');

        $filename = "format_sewa_unit.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_sewa_unit.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_sewa(){
        $fileim = isset($_FILES["file_excel_sewa"]);
        if(isset($fileim["name"])){
            $path = $fileim["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                

                for ($row=2; $row<=$highestRow; $row++){
                    $no_perjanjian = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nama_mitra = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nama_pt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $periode_mulai = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $periode_selesai = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $kategori_kendaraan = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $status_kontrak = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $catatan = $worksheet->getCellByColumnAndRow(8, $row)->getValue();

                    $periode_mulai_c = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($periode_mulai));
                    $periode_selesai_c = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($periode_selesai));

                    $data[] = array(
                        'no_perjanjian' => $no_perjanjian,
                        'nama_mitra' => $nama_mitra,
                        'nama_pt' => $nama_pt,
                        'periode_mulai' => $periode_mulai_c,
                        'periode_selesai' => $periode_selesai_c,
                        'kategori_kendaraan' => $kategori_kendaraan,
                        'keterangan' => $keterangan,
                        'status_kontrak' => $status_kontrak,
                        'catatan' => $catatan
                    );
                }
            }

            $nik = $this->session->userdata('username');
            $datanik = $this->log_activity_model->get_data_nik($nik);
            foreach ($datanik as $row) {
                $nama = $row['nama'];
            }
            $action = "Import Excel";
            $objek = "Sewa Unit";
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

            $this->sewa_model->insert_data_excel($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("Sewa");
    }

    public function tambah_sewa(){
    	$this->load->model("sewa_model");

        $files = $_FILES;
    	$filetam = isset($files['file_sewa']['name']);

    	$config['upload_path'] = './assets/files';
    	$config['allowed_types'] = '*';
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('file_sewa');

    	$filetam = $this->upload->data('file_name');

    	$data = array(
    		"no_perjanjian" =>$this->input->post("no_perjanjian"),
    		"nama_mitra" =>$this->input->post("nama_mitra"),
    		"nama_pt" =>$this->input->post("nama_pt"),
    		"periode_mulai" =>$this->input->post("periode_mulai"),
    		"periode_selesai" =>$this->input->post("periode_selesai"),
    		"kategori_kendaraan" =>$this->input->post("kategori_kendaraan"),
    		"keterangan" =>$this->input->post("keterangan"),
    		"status_kontrak" =>$this->input->post("status_kontrak"),
    		"catatan" =>$this->input->post("catatan"),
    		"file" => $filetam
    	);

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Sewa Unit";
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

    	$this->sewa_model->insert_data($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
    	redirect("Sewa");
    }

    public function update_sewa(){
        $this->load->model("sewa_model");

        $file = $_FILES['file_sewa']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_sewa');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "nama_mitra" =>$this->input->post("nama_mitra"),
            "nama_pt" =>$this->input->post("nama_pt"),
            "periode_mulai" =>$this->input->post("periode_mulai"),
            "periode_selesai" =>$this->input->post("periode_selesai"),
            "kategori_kendaraan" =>$this->input->post("kategori_kendaraan"),
            "keterangan" =>$this->input->post("keterangan"),
            "status_kontrak" =>$this->input->post("status_kontrak"),
            "catatan" =>$this->input->post("catatan"),
            "file" => $file       
        );

        $data2 = array(
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "nama_mitra" =>$this->input->post("nama_mitra"),
            "nama_pt" =>$this->input->post("nama_pt"),
            "periode_mulai" =>$this->input->post("periode_mulai"),
            "periode_selesai" =>$this->input->post("periode_selesai"),
            "kategori_kendaraan" =>$this->input->post("kategori_kendaraan"),
            "keterangan" =>$this->input->post("keterangan"),
            "status_kontrak" =>$this->input->post("status_kontrak"),
            "catatan" =>$this->input->post("catatan"),
            "file" => $cekfile     
        );

        $id = $this->input->post("hidden_id");
        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate data";
        $objek = "Sewa Unit";
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
            $this->sewa_model->update_data($data, $this->input->post("hidden_id"));    
            $this->log_activity_model->insert_log($datalog);   
        } else {
            $this->sewa_model->update_data($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("Sewa");
        
    }

    public function delete_sewa(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $pathfilefolder = './assets/files/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Sewa Unit";
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

        $this->sewa_model->delete_data($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("Sewa");
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }

}
