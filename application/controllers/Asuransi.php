<?php

class Asuransi extends CI_Controller
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
        $this->load->model('asuransi_model');
        $this->load->model('log_activity_model');
        $this->load->library('excel');
    }

    public function index()
    {
    	$this->load->model("asuransi_model");
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
    	$data["fetch_data"] = $this->asuransi_model->fetch_data();
        $this->load->view('template/legal/asuransi.php', $data);
    }

    public function download_format_excel(){
        $this->load->helper('download');

        $filename = "format_asuransi.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_asuransi.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_asuransi(){
        if(isset($_FILES["file_excel_asuransi"]["name"])){
            $path = $_FILES["file_excel_asuransi"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                

                for ($row=2; $row<=$highestRow; $row++){
                    $nama_asuransi = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $no_polis = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $periode_mulai = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $periode_selesai = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $nomor_leasing = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $nomor_rangka = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $nomor_lambung = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $plat_nomor = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(8, $row)->getValue();

                    $periode_mulai_c = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($periode_mulai));
                    $periode_selesai_c = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($periode_selesai));

                    $data[] = array(
                        'nama_asuransi' => $nama_asuransi,
                        'no_polis' => $no_polis,
                        'periode_mulai' => $periode_mulai_c,
                        'periode_selesai' => $periode_selesai_c,
                        'nomor_leasing' => $nomor_leasing,
                        'nomor_rangka' => $nomor_rangka,
                        'nomor_lambung' => $nomor_lambung,
                        'plat_nomor' => $plat_nomor,
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
            $objek = "Asuransi";
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

            $this->asuransi_model->insert_data_excel($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("Asuransi");
    }

    public function tambah_asuransi(){
    	$this->load->model("asuransi_model");


        $file = $_FILES['file_asuransi']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_asuransi');

        $file = $this->upload->data('file_name');

    	$data = array(
    		"nama_asuransi" =>$this->input->post("nama_asuransi"),
    		"no_polis" =>$this->input->post("no_polis"),
    		"periode_mulai" =>$this->input->post("periode_mulai"),
    		"periode_selesai" =>$this->input->post("periode_selesai"),
    		"nomor_leasing" =>$this->input->post("nomor_leasing"),
    		"nomor_rangka" =>$this->input->post("nomor_rangka"),
    		"nomor_lambung" =>$this->input->post("nomor_lambung"),
    		"plat_nomor" =>$this->input->post("plat_nomor"),
    		"keterangan" =>$this->input->post("keterangan"),
            "file" => $file

    	);

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Asuransi";
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

    	$this->asuransi_model->insert_data($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
    	redirect("Asuransi");

    }

    public function update_asuransi(){
    	$this->load->model("asuransi_model");

        $file = $_FILES['file_asuransi']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_asuransi');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

    	$data = array(
    		"nama_asuransi" =>$this->input->post("nama_asuransi"),
    		"no_polis" =>$this->input->post("no_polis"),
    		"periode_mulai" =>$this->input->post("periode_mulai"),
    		"periode_selesai" =>$this->input->post("periode_selesai"),
    		"nomor_leasing" =>$this->input->post("nomor_leasing"),
    		"nomor_rangka" =>$this->input->post("nomor_rangka"),
    		"nomor_lambung" =>$this->input->post("nomor_lambung"),
    		"plat_nomor" =>$this->input->post("plat_nomor"),
    		"keterangan" =>$this->input->post("keterangan"),
            "file" => $file
    	);

        $data2 = array(
            "nama_asuransi" =>$this->input->post("nama_asuransi"),
            "no_polis" =>$this->input->post("no_polis"),
            "periode_mulai" =>$this->input->post("periode_mulai"),
            "periode_selesai" =>$this->input->post("periode_selesai"),
            "nomor_leasing" =>$this->input->post("nomor_leasing"),
            "nomor_rangka" =>$this->input->post("nomor_rangka"),
            "nomor_lambung" =>$this->input->post("nomor_lambung"),
            "plat_nomor" =>$this->input->post("plat_nomor"),
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
        $objek = "Asuransi";
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
            $this->asuransi_model->update_data($data, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);     
        } else {
            $this->asuransi_model->update_data($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);
        }
    	
        $this->session->set_flashdata('alrt', 'diupdate');
    	redirect("Asuransi");
    	
    }

    public function delete_asuransi(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $pathfilefolder = './assets/files/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Asuransi";
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

        $this->asuransi_model->delete_data($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("Asuransi");
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }
}
?>
