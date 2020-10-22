<?php

class Dashboard extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('HalamanLogin');
		}
                if ($this->session->userdata('id_role') != 29) {
                    $this->session->unset_userdata('username');
                    $this->session->set_flashdata('error', 'Anda Tidak Memiliki Akses');
                    redirect('HalamanLogin');
                 }

		$this->load->model('dashboard_model');
	}

    public function index()
    {
    	$data['user'] = $this->db->get_where('data_admin', ['username' => $this->session->userdata('username')])->row_array();
    	$data['year_list'] = $this->dashboard_model->fetch_year();
        $this->load->view('template/legal/home.php', $data);
    }

    public function fetch_data(){
    	$year = date('Y');
    	
		$chart_data = $this->dashboard_model->fetch_chart_data($year);

		foreach ($chart_data as $row){
			$monthNum  = $row['bulan'];
			$dateObj   = DateTime::createFromFormat('!m', $monthNum);
			$monthName = $dateObj->format('F');

			$output[] = array(
				'bulan' => $monthName,
				'jumlah' => $row['jumlah']
			);
		}
		echo json_encode($output);
    }

    public function logout(){
		$this->session->unset_userdata('username');
		redirect('HalamanLogin');
	}
}
?>
