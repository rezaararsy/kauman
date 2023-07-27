<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    // if($this->session->userdata('status') != "login" || $this->session->userdata('role') != 102 ){
		//    redirect('');
		//   }

	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_musrenbang2', $data);
	}


	public function data_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_musrenbang2', $data);
	}
	// public function data_json_perpindahan(){
	// 	header('Content-Type: application/json');
    //     $rt= $this->session->userdata('rt');
    //     $rw=$this->session->userdata('rw');
    //     $kelurahan=$this->session->userdata('kelurahan');
    //     $kecamatan=$this->session->userdata('kecamatan');
	// 	echo $this->m_data->getDataPerpindahan2($rt,$rw,$kelurahan,$kecamatan);
	// }

	public function data_json_perpindahan(){
		$rw = $this->uri->segment(3,0);
		$jenis = $this->uri->segment(4,0);
		if ($rw == 0 && $jenis == 0)
		{
			header('Content-Type: application/json');
			echo $this->m_data->getDataPerpindahan();
		}
		elseif($rw != 0 && $jenis == 0)
		{	
			header('Content-Type: application/json');
			echo $this->m_data->getDataPerpindahan4($rw);
		}
		elseif($rw != 0 || $rw != "")
		{	
			header('Content-Type: application/json');
			echo $this->m_data->getDataPerpindahan5($jenis);
		}else
		{	
			header('Content-Type: application/json');
			echo $this->m_data->getDataPerpindahan3($rw,$jenis);
		}
		
	}

	function deleteData(){ 
        $kode=$this->input->post('id');
        $this->db->where('id',$kode);
        $this->db->delete('musrenbang');
        $this->session->set_flashdata('message', 'Data Berhasil di Hapus');
		redirect(base_url("dashboard/data_musrenbang"));    
    }



}
