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
	public function inputData1()
	{
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kodekelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = 0;
		$str = $this->input->post('nama');
		$nama = $this->stringToSecret($str);
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
		// $kecamatan = $this->input->post('kecamatan');
		// $kelurahan = $this->input->post('kelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		// $nik = $this->input->post('nik');
		//$nik = 0;
		$str = $this->input->post('nama');
		$nama = $this->stringToSecret($str);
		$jenis_pindah = $this->input->post('jenis_pindah');
		$skpwni = $this->input->post('skpwni');
		$tgl_pindah = $this->input->post('tgl_pindah');
		$alamat_rt = $this->input->post('alamat_rt');
		$data = array(
		// 'kecamatan' => $kecamatan,
		// 'kelurahan' => $kelurahan,
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
		redirect(base_url("dashboard/data_pindah"));
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
		$nama = $this->stringToSecret($value['E']);
		$inserdata[$i]['nama'] = $nama;
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
