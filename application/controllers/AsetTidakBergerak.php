<?php 

class AsetTidakBergerak extends CI_Controller
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
        $this->load->model('aset_tidak_bergerak_model');
        $this->load->model('log_activity_model');
        $this->load->library('excel');
    }

    public function index()
    {
    	$this->load->model("aset_tidak_bergerak_model");
        $data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
    	$data["fetch_data"] = $this->aset_tidak_bergerak_model->fetch_data();
        $this->load->view('template//legal/asettb.php', $data);
    }

    public function download_format_excel_aset_tanah(){
        $this->load->helper('download');

        $filename = "format_aset_tanah.xlsx";
        $fileContents = file_get_contents(base_url('assets/files/download_format/format_aset_tanah.xlsx'));
        force_download($filename,$fileContents);
    }

    public function import_aset_tanah(){
        if(isset($_FILES["file_excel_aset_tanah"]["name"])){
            $path = $_FILES["file_excel_aset_tanah"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $no_sertifikat = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $no_ajb = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $atas_nama = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $no_pbb = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $harga_resmi = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $harga_real = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $lokasi = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $posisi_sertifikat = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $no_imb = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();

                    $data[] = array(
                        "no_sertifikat" =>$no_sertifikat,
                        "no_ajb" =>$no_ajb,
                        "atas_nama" =>$atas_nama,
                        "no_pbb" =>$no_pbb,
                        "harga_resmi" =>$harga_resmi,
                        "harga_real" =>$harga_real,
                        "lokasi" =>$lokasi,
                        "posisi_sertifikat" =>$posisi_sertifikat,
                        "imb" =>$no_imb,
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
            $objek = "Aset Tidak Bergerak";
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

            $this->aset_tidak_bergerak_model->insert_data_excel_aset_tanah($data);
            $this->log_activity_model->insert_log($datalog);
        }
        $this->session->set_flashdata('alrt', 'diimport');
        redirect("AsetTidakBergerak");
    }

    public function tambah_aset_tanah(){
    	$this->load->model("aset_tidak_bergerak_model");

        $file1 = $_FILES['file1_tanah']['name'];
        $file2 = $_FILES['file2_tanah']['name'];
        $file3 = $_FILES['file3_tanah']['name'];

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);

        $this->upload->do_upload('file1_tanah');
        $file1 = $this->upload->data('file_name');
        $this->upload->do_upload('file2_tanah');
        $file2 = $this->upload->data('file_name');
        $this->upload->do_upload('file3_tanah');
        $file3 = $this->upload->data('file_name');

    	$data = array(
    		"no_sertifikat" =>$this->input->post("no_sertifikat"),
    		"no_ajb" =>$this->input->post("no_ajb"),
    		"atas_nama" =>$this->input->post("atas_nama"),
    		"no_pbb" =>$this->input->post("no_pbb"),
    		"harga_resmi" =>$this->input->post("harga_resmi"),
    		"harga_real" =>$this->input->post("harga_real"),
    		"lokasi" =>$this->input->post("lokasi"),
    		"posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
    		"imb" =>$this->input->post("imb"),
    		"keterangan" =>$this->input->post("keterangan"),
            "file1" => $file1,
            "file2" => $file2,
            "file3" => $file3

    	);

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menambah data";
        $objek = "Aset Tidak Bergerak";
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

    	$this->aset_tidak_bergerak_model->insert_data($data);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'ditambahkan');
    	redirect("AsetTidakBergerak");

    }

    public function update_aset_tanah(){
        $this->load->model("aset_tidak_bergerak_model");

        $file1 = $_FILES['file1_tanah']['name'];
        $file2 = $_FILES['file2_tanah']['name'];
        $file3 = $_FILES['file3_tanah']['name'];

        $hddnid = $this->input->post("hidden_id");

        $config['upload_path'] = './assets/files';
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);

        $upld1 = $this->upload->do_upload('file1_tanah');
        $tsupld1 = $this->upload->data();
        $nfile1 = $tsupld1['file_name'];

        $upld2 = $this->upload->do_upload('file2_tanah');
        $tsupld2 = $this->upload->data();
        $nfile2 = $tsupld2['file_name'];

        $upld3 = $this->upload->do_upload('file3_tanah');
        $tsupld3 = $this->upload->data();
        $nfile3 = $tsupld3['file_name'];

        $cekfile1 = $this->input->post("hidden_file1");
        $cekfile2 = $this->input->post("hidden_file2");
        $cekfile3 = $this->input->post("hidden_file3");

        $data1 = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $nfile1,
            "file2" => $cekfile2,
            "file3" => $cekfile3

        );

        $data2 = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $cekfile1,
            "file2" => $nfile2,
            "file3" => $cekfile3

        );

        $data3 = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $cekfile1,
            "file2" => $cekfile2,
            "file3" => $nfile3

        );

        $data12 = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $nfile1,
            "file2" => $nfile2,
            "file3" => $cekfile3

        );

        $data13 = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $nfile1,
            "file2" => $cekfile2,
            "file3" => $nfile3

        );

        $data23 = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $cekfile1,
            "file2" => $nfile2,
            "file3" => $nfile3

        );

        $dataall = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $nfile1,
            "file2" => $nfile2,
            "file3" => $nfile3

        );

        $datanone = array(
            "no_sertifikat" =>$this->input->post("no_sertifikat"),
            "no_ajb" =>$this->input->post("no_ajb"),
            "atas_nama" =>$this->input->post("atas_nama"),
            "no_pbb" =>$this->input->post("no_pbb"),
            "harga_resmi" =>$this->input->post("harga_resmi"),
            "harga_real" =>$this->input->post("harga_real"),
            "lokasi" =>$this->input->post("lokasi"),
            "posisi_sertifikat" =>$this->input->post("posisi_sertifikat"),
            "imb" =>$this->input->post("imb"),
            "keterangan" =>$this->input->post("keterangan"),
            "file1" => $cekfile1,
            "file2" => $cekfile2,
            "file3" => $cekfile3

        );

        $id = $this->input->post("hidden_id");
        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate data";
        $objek = "Aset Tidak Bergerak";
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

        
        if ($file1 and !$file2 and !$file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($data1, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        } 
        if (!$file1 and $file2 and !$file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($data2, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }
        if (!$file1 and !$file2 and $file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($data3, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }
        if ($file1 and $file2 and !$file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($data12, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }
        if ($file1 and !$file2 and $file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($data13, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }
        if (!$file1 and $file2 and $file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($data23, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }
        if ($file1 and $file2 and $file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($dataall, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }
        if (!$file1 and !$file2 and !$file3){
            $this->aset_tidak_bergerak_model->update_data_tanah($datanone, $hddnid );
            $this->log_activity_model->insert_log($datalog);       
        }

        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetTidakBergerak");
    }

    public function update_gambar_asettb(){
        $gambar = $_FILES['file_gambar_asettb']['name'];
        $hiddenid_gambar = $this->input->post("hidden_id_gbr");

        $config['upload_path'] = './assets/img/img_aset_tb';
        $config['allowed_types'] = 'jpg|jpeg';
        $this->load->library('upload', $config);

        $upld = $this->upload->do_upload('file_gambar_asettb');
        $tsupld = $this->upload->data();
        $nmgambar = $tsupld['file_name'];

        $data = array(
            'gambar' => $nmgambar
        );

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Mengupdate gambar";
        $objek = "Aset Tidak Bergerak";
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

        $this->aset_tidak_bergerak_model->update_gambar_asettb($data, $hiddenid_gambar);
        $this->log_activity_model->insert_log($datalog);       
        $this->session->set_flashdata('alrt', 'diupdate');
        redirect("AsetTidakBergerak");
    }

    public function delete_aset_tanah(){
        $id = $this->input->post("id_delete");
        $file1_del = $this->input->post("file1_tanahdel");
        $file2_del = $this->input->post("file2_tanahdel");
        $file3_del = $this->input->post("file3_tanahdel");
        $gambardel = $this->input->post("gambardel");
        $pathfilefolder = './assets/files/';
        $pathgbrfolder = './assets/img/img_aset_tb/';

        $nik = $this->session->userdata('username');
        $datanik = $this->log_activity_model->get_data_nik($nik);
        foreach ($datanik as $row) {
            $nama = $row['nama'];
        }
        $action = "Menghapus data";
        $objek = "Aset Tidak Bergerak";
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

        if (file_exists($pathfilefolder.$file1_del)) {
            @unlink($pathfilefolder.$file1_del);
        }
        if (file_exists($pathfilefolder.$file2_del)) {
            @unlink($pathfilefolder.$file2_del);
        }
        if (file_exists($pathfilefolder.$file3_del)) {
            @unlink($pathfilefolder.$file3_del);
        }
        if (file_exists($pathgbrfolder.$gambardel)) {
            @unlink($pathgbrfolder.$gambardel);
        }
        $this->aset_tidak_bergerak_model->delete_data_aset_tanah($id);
        $this->log_activity_model->insert_log($datalog);
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("AsetTidakBergerak");
    }

    /*public function multi_del(){
        if($this->input->post('checkbox_value')){
            $id = $this->input->post('checkbox_value');
            for($count = 0; $count < count($id); $count++){
                $this->aset_tidak_bergerak_model->multi_del($id[$count]);
            }
        }
    }

    public function scc_del(){
        $this->session->set_flashdata('alrt', 'dihapus');
        redirect("AsetTidakBergerak");
    }*/

    public function logout(){
        $this->session->unset_userdata('username');
        redirect('HalamanLogin');
    }
}
?>