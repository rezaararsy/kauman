<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Daftar POKIR Kelurahan Kauman Kota Malang</h1>

          </div>            

            <div class="row" id="isine">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <h4>Basic DataTables</h4> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_id_pokir" style="width:100%">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Usulan</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Tahun</th>
                            <th>Koefisien</th>
                            <th>Nilai Usulan</th>
                            <th>Nilai Akomodir</th>
                            <th>OPD Tujuan</th>
                            <th>Keterangan</th>
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




    <form id="add-row-form" action="<?php echo base_url().'dashboard/deleteData2'?>" method="post">
      <div class="modal fade" id="ModalHapus2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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

  <form id="add-row-form" action="<?php echo base_url().'dashboard/updateDataPokir'?>" method="post"
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
                      <input type="hidden" name="id_pokir" class="form-control" required>
                      <div class="form-group">
                      <label>Usulan</label>
                      <input name="prioritas" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input name="alamat" type="text" class="form-control">
                    </div>  
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <input name="kecamatan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tahun</label>
                      <input name="kelurahan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Koefisien</label>
                      <input name="koefisien" type="text" class="form-control">
                    </div>    
                    <div class="form-group">
                      <label>Nilai Usulan</label>
                      <input name="nilai_usulan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nilai Akomodir</label>
                      <input name="nilai_akomodir" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Sasaran OPD</label>
                      <select name="opd_tujuan" class="form-control">
                        <option disabled selected value="">Pilih OPD</option>
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
                      <label>Keterangan</label>
                      <input name="keterangan" type="text" class="form-control">
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