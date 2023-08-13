<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_musrenbang2', $data);
	}
	public function data_pokir() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_pokir2', $data);
	}


	public function data_json_musrenbang(){
		$rw = $this->uri->segment(3);
		$jenis = $this->uri->segment(4);
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
		}elseif($rw == 0 && $jenis != "0")
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


}
