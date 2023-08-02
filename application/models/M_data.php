<?php

defined('BASEPATH') OR exit ('No direct script access allowed');


class M_Data extends CI_Model
{
    function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }
  function input_data($data,$table){
    $this->db->insert($table,$data);
  }
  public function insertImport($data) {
    $res = $this->db->insert_batch('perpindahan',$data);
    if($res){
    return TRUE;
    }else{
    return FALSE;
    }
  }
  function getDataPerpindahan(){
    $this->datatables->select('id_usulan,profil,urusan,usulan,permasalahan,alamat,skpd_tujuan,koefisien,anggaran,jenis,keterangan,tahun,rw');
    $this->datatables->from('usulan');
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }
  function getDataPokir(){
    $this->datatables->select('id_pokir,prioritas,alamat,kecamatan,kelurahan,koefisien,nilai_usulan,nilai_akomodir,opd_tujuan,keterangan');
    $this->datatables->from('pokir');
    
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }

  function getDataPerpindahan3($rw,$jenis){
    $this->datatables->select('id_usulan,profil,urusan,usulan,permasalahan,alamat,skpd_tujuan,koefisien,anggaran,jenis,keterangan,tahun,rw');
    $this->datatables->from('usulan');
    $this->datatables->where('rw', $rw);
    $this->datatables->where('jenis', $jenis);
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }
  function getDataPerpindahan4($rw){
    $this->datatables->select('id_usulan,profil,urusan,usulan,permasalahan,alamat,skpd_tujuan,koefisien,anggaran,jenis,keterangan,tahun,rw');
    $this->datatables->from('usulan');
    $this->datatables->where('rw', $rw);
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }
  function getDataPerpindahan5($jenis){
    $this->datatables->select('id_usulan,profil,urusan,usulan,permasalahan,alamat,skpd_tujuan,koefisien,anggaran,jenis,keterangan,tahun,rw');
    $this->datatables->from('usulan');
    $this->datatables->where('jenis', $jenis);
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }

}