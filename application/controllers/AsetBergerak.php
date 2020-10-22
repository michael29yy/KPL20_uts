<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class AsetBergerak extends CI_Controller
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
        $this->load->model('aset_bergerak_model');
        $this->load->model('log_activity_model');
        $this->load->library('excel');
    }

    public function index()
    {
    	$this->load->model("aset_bergerak_model");
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data["fetch_data_alat_berat"] = $this->aset_bergerak_model->fetch_data_alat_berat();
    	$data["fetch_data_kendaraan"] = $this->aset_bergerak_model->fetch_data_kendaraan();
    	$data["fetch_data_property"] = $this->aset_bergerak_model->fetch_data_property();
        $this->load->view('template//legal/asetb.php', $data);
    }

    public function download_format_excel_alat_berat(){
        $this->load->helper('download');

        $filename = "format_aset_alat_berat.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_aset_alat_berat.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_alat_berat(){
        if(isset($_FILES["file_excel_alat_berat"]["name"])){
            $path = $_FILES["file_excel_alat_berat"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $no_lambung = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $serial_number = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $tahun_unit = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $atas_nama = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $nomor_invoice = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $kedatangan_unit = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $harga_perolehan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $nomor_leasing = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(8, $row)->getValue();

                    $data[] = array(
                        "no_lambung" =>$no_lambung,
                        "serial_number" =>$serial_number,
                        "tahun_unit" =>$tahun_unit,
                        "atas_nama" =>$atas_nama,
                        "nomor_invoice" =>$nomor_invoice,
                        "kedatangan_unit" =>$kedatangan_unit,
                        "harga_perolehan" =>$harga_perolehan,
                        "nomor_leasing" =>$nomor_leasing,
                        "keterangan" =>$keterangan
                    );
                }
            }

            $nik = $this->session->userdata('username');
            $datanik = $this->log_activity_model->get_data_nik($nik);
            foreach ($datanik as $row) {
                $nama = $row['nama'];
            }
            $action = "Import Excel";
            $objek = "Aset Bergerak Alat Berat";
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

            $this->aset_bergerak_model->insert_data_excel_alat_berat($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("AsetBergerak");
    }

    public function tambah_aset_alat_berat(){
        $this->load->model("aset_bergerak_model");


        $file = $_FILES['file_aset_alat_berat']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_aset_alat_berat');

        $file = $this->upload->data('file_name');

        $data = array(
            "no_lambung" =>$this->input->post("no_lambung"),
            "serial_number" =>$this->input->post("serial_number"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "nomor_invoice" =>$this->input->post("nomor_invoice"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
            "nomor_leasing" =>$this->input->post("no_leasing"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file

        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Aset Bergerak Alat Berat";
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

        $this->aset_bergerak_model->insert_data_alat_berat($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
        redirect("AsetBergerak");

    }

    public function update_aset_alat_berat(){
        $this->load->model("aset_bergerak_model");

        $file = $_FILES['file_aset_alat_berat']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_aset_alat_berat');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "no_lambung" =>$this->input->post("no_lambung"),
            "serial_number" =>$this->input->post("serial_number"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "nomor_invoice" =>$this->input->post("nomor_invoice"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
            "nomor_leasing" =>$this->input->post("no_leasing"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file

        );

        $data2 = array(
            "no_lambung" =>$this->input->post("no_lambung"),
            "serial_number" =>$this->input->post("serial_number"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "nomor_invoice" =>$this->input->post("nomor_invoice"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
            "nomor_leasing" =>$this->input->post("no_leasing"),
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
        $objek = "Aset Bergerak Alat Berat";
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
            $this->aset_bergerak_model->update_data_alat_berat($data, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);              
        } else {
            $this->aset_bergerak_model->update_data_alat_berat($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);       
        }
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetBergerak");
    }

    public function update_gambar_alat_berat(){
        $ngambar_1 = $_FILES['file_gambar_alat_berat1']['name'];
        $ngambar_2 = $_FILES['file_gambar_alat_berat2']['name'];
        $ngambar_3 = $_FILES['file_gambar_alat_berat3']['name'];

        $hiddenid_gambar = $this->input->post("hidden_id_gbr");
        $config['upload_path'] = './assets/img/img_alat_berat';
        $config['allowed_types'] = 'jpg|jpeg';
        $this->load->library('upload', $config);

        $upld1 = $this->upload->do_upload('file_gambar_alat_berat1');
        $tsupld1 = $this->upload->data();
        $nmgambar_1 = $tsupld1['file_name'];

        $upld2 = $this->upload->do_upload('file_gambar_alat_berat2');
        $tsupld2 = $this->upload->data();
        $nmgambar_2 = $tsupld2['file_name'];        
        
        $upld3 = $this->upload->do_upload('file_gambar_alat_berat3');
        $tsupld3 = $this->upload->data();
        $nmgambar_3 = $tsupld3['file_name'];

        $hddngambar1 = $this->input->post("hidden_file_gbr1");
        $hddngambar2 = $this->input->post("hidden_file_gbr2");
        $hddngambar3 = $this->input->post("hidden_file_gbr3");

        #semua
        $dataall = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$nmgambar_3
        );

        #1 dan 2
        $data12 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$hddngambar3
        );

        #1 dan 3
        $data13 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$nmgambar_3
        );

        #2 dan 3
        $data23 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$nmgambar_3
        );

        #hanya 1
        $data1 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$hddngambar3
        );

        #hanya 2
        $data2 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$hddngambar3
        );

        #hanya 3
        $data3 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$nmgambar_3
        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate gambar";
        $objek = "Aset Bergerak Alat Berat";
        $in_dex = "Data id = " . $hiddenid_gambar;
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

        if($ngambar_1 and $ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($dataall, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and $ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($data12, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and !$ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($data13, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and $ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($data23, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and !$ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($data1, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and $ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($data2, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and !$ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_alat_berat($data3, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }

        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetBergerak");

    }

    public function delete_aset_alat_berat(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $gambar1_del = $this->input->post("gambar1_del");
        $gambar2_del = $this->input->post("gambar2_del");
        $gambar3_del = $this->input->post("gambar3_del");
        
        $pathfilefolder = './assets/files/';
        $pathgbrfolder = './assets/img/img_alat_berat/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Aset Bergerak Alat Berat";
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
        if (file_exists($pathgbrfolder.$gambar1_del)) {
            @unlink($pathgbrfolder.$gambar1_del);
        }
        if (file_exists($pathgbrfolder.$gambar2_del)) {
            @unlink($pathgbrfolder.$gambar2_del);
        }
        if (file_exists($pathgbrfolder.$gambar3_del)) {
            @unlink($pathgbrfolder.$gambar3_del);
        }

        $this->aset_bergerak_model->delete_data_alat_berat($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("AsetBergerak");
    }

    public function download_format_excel_kendaraan(){
        $this->load->helper('download');

        $filename = "format_aset_kendaraan.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_aset_kendaraan.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_kendaraan(){
        if(isset($_FILES["file_excel_kendaraan"]["name"])){
            $path = $_FILES["file_excel_kendaraan"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $jenis = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $no_lambung = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $no_plat = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $tahun_unit = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $no_rangka = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $no_mesin = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $atas_nama = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $no_bpkb = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $kedatangan_unit = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $no_leasing = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $posisi = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $harga_perolehan = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(12, $row)->getValue();

                    $data[] = array(
                        "jenis" =>$jenis,
                        "no_lambung" =>$no_lambung,
                        "no_plat" =>$no_plat,
                        "tahun_unit" =>$tahun_unit,
                        "no_rangka" =>$no_rangka,
                        "no_mesin" =>$no_mesin,
                        "atas_nama" =>$atas_nama,
                        "no_bpkb" =>$no_bpkb,
                        "kedatangan_unit" =>$kedatangan_unit,
                        "no_leasing" =>$no_leasing,
                        "posisi" =>$posisi,
                        "harga_perolehan" =>$harga_perolehan,
                        "keterangan" =>$keterangan
                    );
                }
            }

            $nik = $this->session->userdata('username');
            $datanik = $this->log_activity_model->get_data_nik($nik);
            foreach ($datanik as $row) {
                $nama = $row['nama'];
            }
            $action = "Import Excel";
            $objek = "Aset Bergerak Kendaraan";
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

            $this->aset_bergerak_model->insert_data_excel_kendaraan($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("AsetBergerak");
    }

    public function tambah_aset_kendaraan(){
    	$this->load->model("aset_bergerak_model");


        $file = $_FILES['file_aset_kendaraan']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_aset_kendaraan');

        $file = $this->upload->data('file_name');

    	$data = array(
    		"jenis" =>$this->input->post("jenis"),
    		"no_lambung" =>$this->input->post("no_lambung"),
    		"no_plat" =>$this->input->post("no_plat"),
    		"tahun_unit" =>$this->input->post("tahun_unit"),
            "no_rangka" =>$this->input->post("no_rangka"),
    		"no_mesin" =>$this->input->post("no_mesin"),
    		"atas_nama" =>$this->input->post("atas_nama"),
    		"no_bpkb" =>$this->input->post("no_bpkb"),
    		"kedatangan_unit" =>$this->input->post("kedatangan_unit"),
    		"no_leasing" =>$this->input->post("no_leasing"),
            "posisi" =>$this->input->post("posisi"),
    		"harga_perolehan" =>$this->input->post("harga_perolehan"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file

    	);

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Aset Bergerak Kendaraan";
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

    	$this->aset_bergerak_model->insert_data_kendaraan($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
    	redirect("AsetBergerak");

    }

    public function update_aset_kendaraan(){
        $this->load->model("aset_bergerak_model");

        $file = $_FILES['file_aset_kendaraan']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_aset_kendaraan');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "jenis" =>$this->input->post("jenis"),
            "no_lambung" =>$this->input->post("no_lambung"),
            "no_plat" =>$this->input->post("no_plat"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "no_rangka" =>$this->input->post("no_rangka"),
            "no_mesin" =>$this->input->post("no_mesin"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_bpkb" =>$this->input->post("no_bpkb"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "no_leasing" =>$this->input->post("no_leasing"),
            "posisi" =>$this->input->post("posisi"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
            "keterangan" =>$this->input->post("keterangan"),
            "file" => $file

        );

        $data2 = array(
            "jenis" =>$this->input->post("jenis"),
            "no_lambung" =>$this->input->post("no_lambung"),
            "no_plat" =>$this->input->post("no_plat"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "no_rangka" =>$this->input->post("no_rangka"),
            "no_mesin" =>$this->input->post("no_mesin"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_bpkb" =>$this->input->post("no_bpkb"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "no_leasing" =>$this->input->post("no_leasing"),
            "posisi" =>$this->input->post("posisi"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
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
        $objek = "Aset Bergerak Kendaraan";
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
            $this->aset_bergerak_model->update_data_kendaraan($data, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);                    
        } else {
            $this->aset_bergerak_model->update_data_kendaraan($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetBergerak");

    }

    public function update_gambar_kendaraan(){
        $ngambar_1 = $_FILES['file_gambar_kendaraan1']['name'];
        $ngambar_2 = $_FILES['file_gambar_kendaraan2']['name'];
        $ngambar_3 = $_FILES['file_gambar_kendaraan3']['name'];

        $hiddenid_gambar = $this->input->post("hidden_id_gbr");
        $config['upload_path'] = './assets/img/img_kendaraan';
        $config['allowed_types'] = 'jpg|jpeg';
        $this->load->library('upload', $config);

        $upld1 = $this->upload->do_upload('file_gambar_kendaraan1');
        $tsupld1 = $this->upload->data();
        $nmgambar_1 = $tsupld1['file_name'];
        
        $upld2 = $this->upload->do_upload('file_gambar_kendaraan2');
        $tsupld2 = $this->upload->data();
        $nmgambar_2 = $tsupld2['file_name'];
        
        $upld3 = $this->upload->do_upload('file_gambar_kendaraan3');
        $tsupld3 = $this->upload->data();
        $nmgambar_3 = $tsupld3['file_name'];
        

        $hddngambar1 = $this->input->post("hidden_file_gbr1");
        $hddngambar2 = $this->input->post("hidden_file_gbr2");
        $hddngambar3 = $this->input->post("hidden_file_gbr3");

        #semua
        $dataall = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$nmgambar_3
        );

        #1 dan 2
        $data12 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$hddngambar3
        );

        #1 dan 3
        $data13 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$nmgambar_3
        );

        #2 dan 3
        $data23 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$nmgambar_3
        );

        #hanya 1
        $data1 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$hddngambar3
        );

        #hanya 2
        $data2 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$hddngambar3
        );

        #hanya 3
        $data3 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$nmgambar_3
        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate gambar";
        $objek = "Aset Bergerak Kendaraan";
        $in_dex = "Data id = " . $hiddenid_gambar;
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

        if($ngambar_1 and $ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($dataall, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and $ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($data12, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and !$ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($data13, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and $ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($data23, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and !$ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($data1, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and $ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($data2, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and !$ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_kendaraan($data3, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }

        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetBergerak");

    }

    public function delete_aset_kendaraan(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $gambar1_del = $this->input->post("gambar1_del");
        $gambar2_del = $this->input->post("gambar2_del");
        $gambar3_del = $this->input->post("gambar3_del");
        
        $pathfilefolder = './assets/files/';
        $pathgbrfolder = './assets/img/img_kendaraan/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Aset Bergerak Kendaraan";
        $in_dex = "Data id = " . $id;
        $date = date("Y/m/d");
        $time = date("H:i:s");
        $ntime = date('h:i A', strtotime($time));

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
        if (file_exists($pathgbrfolder.$gambar1_del)) {
            @unlink($pathgbrfolder.$gambar1_del);
        }
        if (file_exists($pathgbrfolder.$gambar2_del)) {
            @unlink($pathgbrfolder.$gambar2_del);
        }
        if (file_exists($pathgbrfolder.$gambar3_del)) {
            @unlink($pathgbrfolder.$gambar3_del);
        }

        $this->aset_bergerak_model->delete_data_kendaraan($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("AsetBergerak");
    }

    public function download_format_excel_property(){
        $this->load->helper('download');

        $filename = "format_aset_property.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_aset_property.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_property(){
        if(isset($_FILES["file_excel_property"]["name"])){
            $path = $_FILES["file_excel_property"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $jenis = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $merk = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $no_identitas = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $atas_nama = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $harga_perolehan = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $no_perjanjian = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $kedatangan_unit = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $tahun_unit = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

                    $data[] = array(
                        "jenis" =>$jenis,
                        "merk" =>$merk,
                        "no_identitas" =>$no_identitas,
                        "atas_nama" =>$atas_nama,
                        "harga_perolehan" =>$harga_perolehan,
                        "no_perjanjian" =>$no_perjanjian,
                        "kedatangan_unit" =>$kedatangan_unit,
                        "tahun_unit" =>$tahun_unit
                    );
                }
            }

            $nik = $this->session->userdata('username');
            $datanik = $this->log_activity_model->get_data_nik($nik);
            foreach ($datanik as $row) {
                $nama = $row['nama'];
            }
            $action = "Import Excel";
            $objek = "Aset Bergerak Property";
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

            $this->aset_bergerak_model->insert_data_excel_property($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("AsetBergerak");
    }

    public function tambah_aset_property(){
    	$this->load->model("aset_bergerak_model");


        $file = $_FILES['file_aset_property']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_aset_property');

        $file = $this->upload->data('file_name');

    	$data = array(
    		"jenis" =>$this->input->post("jenis"),
    		"merk" =>$this->input->post("merk"),
    		"no_identitas" =>$this->input->post("no_identitas"),
    		"atas_nama" =>$this->input->post("atas_nama"),
    		"harga_perolehan" =>$this->input->post("harga_perolehan"),
    		"no_perjanjian" =>$this->input->post("no_perjanjian"),
    		"kedatangan_unit" =>$this->input->post("kedatangan_unit"),
    		"tahun_unit" =>$this->input->post("tahun_unit"),
            "file" => $file

    	);

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Aset Bergerak Property";
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

    	$this->aset_bergerak_model->insert_data_property($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
    	redirect("AsetBergerak");

    }

    public function update_aset_property(){
        $this->load->model("aset_bergerak_model");

        $file = $_FILES['file_aset_property']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_aset_property');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "jenis" =>$this->input->post("jenis"),
            "merk" =>$this->input->post("merk"),
            "no_identitas" =>$this->input->post("no_identitas"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "file" => $file

        );

        $data2 = array(
            "jenis" =>$this->input->post("jenis"),
            "merk" =>$this->input->post("merk"),
            "no_identitas" =>$this->input->post("no_identitas"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "harga_perolehan" =>$this->input->post("harga_perolehan"),
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "kedatangan_unit" =>$this->input->post("kedatangan_unit"),
            "tahun_unit" =>$this->input->post("tahun_unit"),
            "file" => $cekfile

        );

        $id = $this->input->post("hidden_id");
        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate data";
        $objek = "Aset Bergerak Property";
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
            $this->aset_bergerak_model->update_data_property($data, $this->input->post("hidden_id")); 
            $this->log_activity_model->insert_log($datalog);                    
        } else {
            $this->aset_bergerak_model->update_data_property($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);              
        }
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetBergerak");
    }

    public function update_gambar_property(){
        $ngambar_1 = $_FILES['file_gambar_property1']['name'];
        $ngambar_2 = $_FILES['file_gambar_property2']['name'];
        $ngambar_3 = $_FILES['file_gambar_property3']['name'];

        $hiddenid_gambar = $this->input->post("hidden_id_gbr");
        $config['upload_path'] = './assets/img/img_property';
        $config['allowed_types'] = 'jpg|jpeg';
        $this->load->library('upload', $config);

        $upld1 = $this->upload->do_upload('file_gambar_property1');
        $tsupld1 = $this->upload->data();
        $nmgambar_1 = $tsupld1['file_name'];
        
        $upld2 = $this->upload->do_upload('file_gambar_property2');
        $tsupld2 = $this->upload->data();
        $nmgambar_2 = $tsupld2['file_name'];

        $upld3 = $this->upload->do_upload('file_gambar_property3');
        $tsupld3 = $this->upload->data();
        $nmgambar_3 = $tsupld3['file_name'];

        $hddngambar1 = $this->input->post("hidden_file_gbr1");
        $hddngambar2 = $this->input->post("hidden_file_gbr2");
        $hddngambar3 = $this->input->post("hidden_file_gbr3");

        #semua
        $dataall = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$nmgambar_3
        );

        #1 dan 2
        $data12 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$hddngambar3
        );

        #1 dan 3
        $data13 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$nmgambar_3
        );

        #2 dan 3
        $data23 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$nmgambar_3
        );

        #hanya 1
        $data1 = array(
            "gambar1" =>$nmgambar_1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$hddngambar3
        );

        #hanya 2
        $data2 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$nmgambar_2,
            "gambar3" =>$hddngambar3
        );

        #hanya 3
        $data3 = array(
            "gambar1" =>$hddngambar1,
            "gambar2" =>$hddngambar2,
            "gambar3" =>$nmgambar_3
        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate gambar";
        $objek = "Aset Bergerak Property";
        $in_dex = "Data id = " . $hiddenid_gambar;
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

        if($ngambar_1 and $ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($dataall, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and $ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($data12, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and !$ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($data13, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and $ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($data23, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if($ngambar_1 and !$ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($data1, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and $ngambar_2 and !$ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($data2, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }
        if(!$ngambar_1 and !$ngambar_2 and $ngambar_3){
            $this->aset_bergerak_model->update_gambar_property($data3, $hiddenid_gambar);
            $this->log_activity_model->insert_log($datalog);       
        }

        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetBergerak");

    }

    public function delete_aset_property(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $gambar1_del = $this->input->post("gambar1_del");
        $gambar2_del = $this->input->post("gambar2_del");
        $gambar3_del = $this->input->post("gambar3_del");
        
        $pathfilefolder = './assets/files/';
        $pathgbrfolder = './assets/img/img_property/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Aset Bergerak Property";
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
        if (file_exists($pathgbrfolder.$gambar1_del)) {
            @unlink($pathgbrfolder.$gambar1_del);
        }
        if (file_exists($pathgbrfolder.$gambar2_del)) {
            @unlink($pathgbrfolder.$gambar2_del);
        }
        if (file_exists($pathgbrfolder.$gambar3_del)) {
            @unlink($pathgbrfolder.$gambar3_del);
        }

        $this->aset_bergerak_model->delete_data_property($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("AsetBergerak");
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }
}
?>