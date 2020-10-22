<?php

class Jualbeli extends CI_Controller
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
        $this->load->model('jualbeli_model');
        $this->load->model('log_activity_model');
        $this->load->library('excel');
    }

    public function index()
    {
    	$this->load->model('jualbeli_model');
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
    	$data["fetch_data"] = $this->jualbeli_model->fetch_data();
        $this->load->view('template//legal/jual_beli.php', $data);
    }

    public function download_format_excel(){
        $this->load->helper('download');

        $filename = "format_jualbeli.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_jualbeli.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_jb(){
        if(isset($_FILES["file_excel_jb"]["name"])){
            $path = $_FILES["file_excel_jb"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $pihak1 = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $pihak2 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $no_perjanjian = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $objek = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $kategori = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    
                    $data[] = array(
                        'pihak1' => $pihak1,
                        'pihak2' => $pihak2,
                        'no_perjanjian' => $no_perjanjian,
                        'objek' => $objek,
                        'keterangan' => $keterangan,
                        'kategori' => $kategori
                    );
                }
            }

            $nik = $this->session->userdata('username');
            $datanik = $this->log_activity_model->get_data_nik($nik);
            foreach ($datanik as $row) {
                $nama = $row['nama'];
            }
            $action = "Import Excel";
            $objek = "Jual Beli";
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

            $this->jualbeli_model->insert_data_excel($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("Jualbeli");
    }

    public function tambah_jual_beli(){
    	$this->load->model("jualbeli_model");


    	$file = $_FILES['file_jualbeli']['name'];

    	$config['upload_path'] = './assets/files';
    	$config['allowed_types'] = '*';
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('file_jualbeli');

    	$file = $this->upload->data('file_name');

    	$data = array(
    		"pihak1" =>$this->input->post("pihak1"),
    		"pihak2" =>$this->input->post("pihak2"),
    		"no_perjanjian" =>$this->input->post("no_perjanjian"),
    		"objek" =>$this->input->post("objek"),
    		"keterangan" =>$this->input->post("keterangan"),
    		"kategori" =>$this->input->post("kategori"),
    		"file" => $file
    	);

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Jual Beli";
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

    	$this->jualbeli_model->insert_data($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
    	redirect("Jualbeli");
    }


    public function update_jualbeli(){
        $this->load->model("jualbeli_model");

        $file = $_FILES['file_jualbeli']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_jualbeli');

        $file = $this->upload->data('file_name');

        $cekfile = $this->input->post("hidden_file");

        $data = array(
            "pihak1" =>$this->input->post("pihak1"),
            "pihak2" =>$this->input->post("pihak2"),
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "objek" =>$this->input->post("objek"),
            "keterangan" =>$this->input->post("keterangan"),
            "kategori" =>$this->input->post("kategori"),
            "file" => $file         
        );

        $data2 = array(
            "pihak1" =>$this->input->post("pihak1"),
            "pihak2" =>$this->input->post("pihak2"),
            "no_perjanjian" =>$this->input->post("no_perjanjian"),
            "objek" =>$this->input->post("objek"),
            "keterangan" =>$this->input->post("keterangan"),
            "kategori" =>$this->input->post("kategori"),
            "file" => $cekfile     
        );

        $id = $this->input->post("hidden_id");
        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate data";
        $objek = "Jual Beli";
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
            $this->jualbeli_model->update_data($data, $this->input->post("hidden_id"));  
            $this->log_activity_model->insert_log($datalog);     
        } else {
            $this->jualbeli_model->update_data($data2, $this->input->post("hidden_id"));
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("Jualbeli");
        
    }

    public function delete_jualbeli(){
        $id = $this->input->post("id_delete");
        
        $file_del = $this->input->post("file_del");
        $pathfilefolder = './assets/files/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Jual Beli";
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

        $this->jualbeli_model->delete_data($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("Jualbeli");
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }
}
?>
