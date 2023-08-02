<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url','html','form');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" || $this->session->userdata('role') != 101 ){
		   redirect('/auth');
		  }
		//   if($this->session->userdata('role') != "102"){
		// 	redirect('');
		//    }

	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard",
		);

		$this->load->view('dashboard/dashboard', $data);
	}
	public function daftar_user() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/daftar_user', $data);
	}
	public function edit_user() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/edit_user', $data);
	}
	public function add_musrenbang() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/add_data_musrenbang', $data);
	}


	public function data_musrenbang() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_musrenbang', $data);
	}

	public function data_pokir() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_pokir', $data);
	}

	public function add_pokir() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/add_data_pokir', $data);
	}


	public function data_json_musrenbang(){
		$rw = $this->uri->segment(3,0);
		$jenis = $this->uri->segment(4,0);
		if ($rw == 0 && $jenis == 0)
		{
			header('Content-Type: application/json');
			echo $this->m_data->getDataMusrenbang();
		}
		elseif($rw != 0 && $jenis == 0)
		{	
			header('Content-Type: application/json');
			echo $this->m_data->getDataMusrenbang4($rw);
		}
		elseif($jenis != 0 && $rw == 0)
		{	
			header('Content-Type: application/json');
			echo $this->m_data->getDataMusrenbang5($jenis);
		}else
		{	
			header('Content-Type: application/json');
			echo $this->m_data->getDataMusrenbang3($rw,$jenis);
		}
		
	}

	public function data_json_pokir(){
		header('Content-Type: application/json');
			echo $this->m_data->getDataPokir();
		
	}

	function deleteData(){ 
        $kode=$this->input->post('id');
        $this->db->where('id_usulan',$kode);
        $this->db->delete('usulan');
        $this->session->set_flashdata('message', 'Data Berhasil di Hapus');
		redirect(base_url("dashboard/data_musrenbang"));    
    }
	function deleteData2(){ 
        $kode=$this->input->post('id');
        $this->db->where('id_pokir',$kode);
        $this->db->delete('pokir');
        $this->session->set_flashdata('message', 'Data Berhasil di Hapus');
		redirect(base_url("dashboard/data_pokir"));    
    }
	private function stringToSecret(string $string = NULL)
	{
		if (!$string) {
			return NULL;
		}
		$length = strlen($string);
		$visibleCount = (int) round($length / 8);
		$hiddenCount = $length - ($visibleCount * 2);
		return substr($string, 0, $visibleCount) . str_repeat('*', $hiddenCount) . substr($string, ($visibleCount * -1), $visibleCount);
	}

	public function inputData()
	{
		$tahun = $this->input->post('tahun');
		$urusan = $this->input->post('urusan');
		$usulan = $this->input->post('usulan');
		$permasalahan = $this->input->post('permasalahan');
		$alamat = $this->input->post('alamat');
		$jenis = $this->input->post('jenis');
		$skpd_tujuan = $this->input->post('skpd_tujuan');
		$rw = $this->input->post('rw');
		$koefisien = $this->input->post('koefisien');
		$anggaran = $this->input->post('anggaran');
		$keterangan = $this->input->post('keterangan');
		$data = array(
		'tahun' => $tahun,
		'urusan' => $urusan,
		'usulan' => $usulan,
		'permasalahan' => $permasalahan,
		'alamat' => $alamat,
		'jenis' => $jenis,
		'skpd_tujuan' => $skpd_tujuan,
		'rw' => $rw,
		'koefisien' => $koefisien,
		'anggaran' => $anggaran,
		'keterangan' => $keterangan,
		);

		$this->m_data->input_data($data,'usulan');

		$this->session->set_flashdata('message', 'Anda berhasil menginput data');
		redirect(base_url("dashboard/data_musrenbang"));
	}
	public function inputDataPokir()
	{
		$prioritas = $this->input->post('prioritas');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$koefisien = $this->input->post('koefisien');
		$nilai_usulan = $this->input->post('nilai_usulan');
		$nilai_akomodir = $this->input->post('nilai_akomodir');
		$opd_tujuan = $this->input->post('opd_tujuan');
		$keterangan = $this->input->post('keterangan');
		$data = array(
		'prioritas' => $prioritas,
		'alamat' => $alamat,
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		'koefisien' => $koefisien,
		'nilai_usulan' => $nilai_usulan,
		'nilai_akomodir' => $nilai_akomodir,
		'opd_tujuan' => $opd_tujuan,
		'keterangan' => $keterangan,
		);

		$this->m_data->input_data($data,'pokir');

		$this->session->set_flashdata('message', 'Anda berhasil menginput data');
		redirect(base_url("dashboard/data_pokir"));
	}




}
