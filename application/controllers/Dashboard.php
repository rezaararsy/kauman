<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url','html','form');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" && $this->session->userdata('role') != 101 ){
		   redirect('');
		  }
		//   if($this->session->userdata('role') != "102"){
		// 	redirect('');
		//    }

	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard",
		);
		$data['masuk'] = $this->m_data->get_masuk();
		$data['keluar'] = $this->m_data->get_keluar();
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
	public function add_pindah_datang() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/add_data_perpindahan_datang', $data);
	}

	public function add_pindah_keluar() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/add_data_perpindahan_keluar', $data);
	}

	public function data_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_pindah', $data);
	}

	public function impor_data_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/impor_data_pindah', $data);
	}

	public function data_json_perpindahan(){
		header('Content-Type: application/json');
		echo $this->m_data->getDataPerpindahan();
	}

	function deleteData(){ 
        $kode=$this->input->post('id_perpindahan');
        $this->db->where('id_perpindahan',$kode);
        $this->db->delete('perpindahan');
        $this->session->set_flashdata('message', 'Data Berhasil di Hapus');
		redirect(base_url("dashboard/data_pindah"));    
    }
	

	public function inputData()
	{
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kodekelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = 0;
		$nama = $this->input->post('nama');
		$jenis_pindah =1;
		$skpwni = $this->input->post('skpwni');
		$tgl_pindah = $this->input->post('tgl_pindah');
		$alamat_rt = $this->input->post('alamat_rt');
		$data = array(
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		'rw' => $rw,
		'rt' => $rt,
		'nik' => $nik,
		'nama' => $nama,
		'jenis_pindah' => $jenis_pindah,
		'skpwni' => $skpwni,
		'tgl_pindah' => $tgl_pindah,
		'alamat_rt' => $alamat_rt
		);

		$this->m_data->input_data($data,'perpindahan');

		$this->session->set_flashdata('message', 'Anda berhasil menginput data');
		redirect(base_url("dashboard"));
	}
	public function inputData1()
	{
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kodekelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = 0;
		$nama = $this->input->post('nama');
		$jenis_pindah = 2;
		$skpwni = $this->input->post('skpwni');
		$tgl_pindah = $this->input->post('tgl_pindah');
		$alamat_rt = $this->input->post('alamat_rt');
		$data = array(
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		'rw' => $rw,
		'rt' => $rt,
		'nik' => $nik,
		'nama' => $nama,
		'jenis_pindah' => $jenis_pindah,
		'skpwni' => $skpwni,
		'tgl_pindah' => $tgl_pindah,
		'alamat_rt' => $alamat_rt
		);

		$this->m_data->input_data($data,'perpindahan');

		$this->session->set_flashdata('message', 'Anda berhasil menginput data');
		redirect(base_url("dashboard"));
	}

	public function updateData()
	{	
		$id=$this->input->post('id_perpindahan');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		// $nik = $this->input->post('nik');
		$nik = 0;
		$nama = $this->input->post('nama');
		$jenis_pindah = $this->input->post('jenis_pindah');
		$skpwni = $this->input->post('skpwni');
		$tgl_pindah = $this->input->post('tgl_pindah');
		$alamat_rt = $this->input->post('alamat_rt');
		$data = array(
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		'rw' => $rw,
		'rt' => $rt,
		'nik' => $nik,
		'nama' => $nama,
		'jenis_pindah' => $jenis_pindah,
		'skpwni' => $skpwni,
		'tgl_pindah' => $tgl_pindah,
		'alamat_rt' => $alamat_rt
		);
		
		$this->db->where('id_perpindahan',$id);
        $this->db->update('perpindahan', $data);

		$this->session->set_flashdata('message', 'Berhasil mengupdate data');
		redirect(base_url("dashboard"));
	}
	public function importFile(){
		
		$path = 'uploads/';
		require_once APPPATH . "/third_party/PHPExcel.php";
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'xlsx|xls|csv';
		$config['remove_spaces'] = TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);            
		if (!$this->upload->do_upload('uploadFile')) {
		$error = array('error' => $this->upload->display_errors());
		} else {
		$data = array('upload_data' => $this->upload->data());
		}
		if(empty($error)){
		if (!empty($data['upload_data']['file_name'])) {
		$import_xls_file = $data['upload_data']['file_name'];
		} else {
		$import_xls_file = 0;
		}
		$inputFileName = $path . $import_xls_file;
		try {
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileName);
		$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
		$flag = true;
		$i=0;
		foreach ($allDataInSheet as $value) {
		if($flag){
		$flag =false;
		continue;
		}
		$inserdata[$i]['kecamatan'] = $value['A'];
		$inserdata[$i]['kelurahan'] = $value['B'];
		$inserdata[$i]['rw'] = $value['C'];
		$inserdata[$i]['rt'] = $value['D'];
		$inserdata[$i]['nama'] = $value['E'];
		$inserdata[$i]['jenis_pindah'] = $value['F'];
		$inserdata[$i]['skpwni'] = $value['G'];
		$inserdata[$i]['tgl_pindah'] = $value['H'];
		$inserdata[$i]['alamat_rt'] = $value['I'];
		$i++;
		}               
		$result = $this->m_data->insertImport($inserdata);   
		if($result){
		echo "Imported successfully";
		}else{
		echo "ERROR !";
		}             
		} catch (Exception $e) {
		die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
		. '": ' .$e->getMessage());
		}
		}else{
		echo $error['error'];
		}
		
		redirect(base_url("dashboard"));
	}

}
