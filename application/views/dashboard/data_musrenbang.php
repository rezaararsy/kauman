<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Sistem Informasi Invetarisasi Usulan Kelurahan Kauman Kota Malang</h1>

          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="select">
                  <div class="form-group">
                    <label>RW</label>
                      <select name="rw" id="rw" class="form-control">
                          <option disabled value="">Pilih RW</option>
                          <option selected value="0">Semua</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                        </div>
                        
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="select">

                       <div class="form-group">
                      <label>Jenis</label>
                      <select id="jenis" name="jenis" class="form-control">
                        <option disabled selected value="">Pilih Jenis Usulan</option>
                        <option selected value="0">Semua</option>
                        <option value="SARPRAS">SARPRAS</option>
                        <option value="LK">LK</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <button onclick="updatedatatable()" class="btn btn-primary">Filter</button>
                </div>
              </div>

            </div>
            

            <div class="row" id="isine">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <h4>Basic DataTables</h4> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_id" style="width:100%">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Urusan</th>
                            <th>Jenis</th>
                            <th>Usulan</th>
                            <th>Permasalahan</th>
                            <th>Alamat</th>
                            <th>SKPD Tujuan</th>
                            <th>Koefisien</th>
                            <th>Anggaran</th>
                            <th>Keterangan</th>
                            <th>RW</th>
                            <th>Tahun</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>




    <form id="add-row-form" action="<?php echo base_url().'dashboard/deleteData'?>" method="post">
      <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                      <input type="hidden" name="id" class="form-control" required>
                      <strong>Anda yakin mau menghapus data ini?</strong>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                  </div>
              </div>
          </div>
      </div>
  </form>

  <form id="add-row-form" action="<?php echo base_url().'dashboard/updateData'?>" method="post"
        enctype="multipart/form-data">
        <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="id_usulan" class="form-control" required>
                      <div class="form-group">
                      <label>Tahun Usulan</label>
                      <input name="tahun" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Urusan</label>
                      <input name="urusan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Usulan yang ingin dimasukkan</label>
                      <textarea name="usulan" rows="3" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <label>Permasalahan</label>
                      <input name="permasalahan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input name="alamat" type="text" class="form-control">
                    </div>             
                    <div class="form-group">
                      <label>Jenis Usulan</label>
                      <select name="jenis" class="form-control">
                        <option disabled selected value="">Pilih Jenis Usulan</option>
                        <option value="SARPRAS">SARPRAS</option>
                        <option value="LK">LK</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sasaran SKPD</label>
                      <select name="skpd_tujuan" class="form-control">
                        <option disabled selected value="">Pilih SKPD</option>
                        <option value="Kecamatan Klojen">Kecamatan Klojen</option>
                        <option value="Sekretariat Daerah">Sekretariat Daerah</option>
                        <option value="Dinas Pendidikan dan Kebudayaan">Dinas Pendidikan dan Kebudayaan</option>
                        <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                        <option value="Dinas Sosial, Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana">Dinas Sosial, Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</option>
                        <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                        <option value="Dinas Komunikasi dan Informatika">Dinas Komunikasi dan Informatika</option>
                        <option value="Dinas Pekerjaan Umum, Penataan Ruang, Perumahan dan Kawasan Permukiman">Dinas Pekerjaan Umum, Penataan Ruang, Perumahan dan Kawasan Permukiman</option>
                        <option value="Dinas Koperasi, Perindustrian dan Perdagangan">Dinas Koperasi, Perindustrian dan Perdagangan</option>
                        <option value="Dinas Ketahanan Pangan dan Pertanian">Dinas Ketahanan Pangan dan Pertanian</option>
                        <option value="Dinas Perpustakaan Umum dan Arsip Daerah">Dinas Perpustakaan Umum dan Arsip Daerah</option>
                        <option value="Dinas Kepemudaan, Olahraga dan Pariwisata">Dinas Kepemudaan, Olahraga dan Pariwisata</option>
                        <option value="Dinas Lingkungan Hidup">Dinas Lingkungan Hidup</option>
                        <option value="Dinas Tenaga Kerja, Penanaman Modal dan Pelayanan Terpadu Satu Pintu">Dinas Tenaga Kerja, Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                        <option value="Dinas Kependudukan dan Pencatatan Sipil">Dinas Kependudukan dan Pencatatan Sipil</option>
                        <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                        <option value="Satuan Polisi Pamong Praja ">Satuan Polisi Pamong Praja </option>
                        <option value="Badan Kepegawaian dan Pengembangan Sumber Daya Manusia">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</option>
                        <option value="Badan Kesatuan Bangsa dan Politik">Badan Kesatuan Bangsa dan Politik</option>
                        <option value="Badan Keuangan dan Aset Daerah">Badan Keuangan dan Aset Daerah</option>
                        <option value="Badan Penanggulangan Bencana Daerah">Badan Penanggulangan Bencana Daerah</option>
                        <option value="Badan Pendapatan Daerah">Badan Pendapatan Daerah</option>
                      </select>
                    </div> 
                    <div class="form-group">
                      <label>RW</label>
                      <select name="rw" class="form-control">
                        <option disabled selected value="">Pilih RW</option>
                        <option value="">Dikosongkan</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Koefisien</label>
                      <input name="koefisien" type="text" class="form-control">
                    </div>    
                    <div class="form-group">
                      <label>Anggaran</label>
                      <input name="anggaran" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <select name="keterangan" class="form-control">
                        <option disabled selected value="">Pilih Keterangan</option>
                        <option value="Diakomodir">Diakomodir</option>
                        <option value="Tidak Diakomodir">Tidak Diakomodir</option>
                      </select>
                    </div>  
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $this->load->view('dist/_partials/footer'); ?>