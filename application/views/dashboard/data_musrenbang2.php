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
            <!-- <form action="<?php echo base_url(). 'pengguna/data_pindah/'; ?>" method="post"> -->
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
                  <button onclick="updatedatatable00()" class="btn btn-primary">Filter</button>
                </div>
              </div>
            <!-- </form> -->
            </div>
            

            <div class="row" id="isine">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <h4>Basic DataTables</h4> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_id00" style="width:100%">
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



    <form id="add-row-form" action="<?php echo base_url().'pengguna/deleteData'?>" method="post">
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
<?php $this->load->view('dist/_partials/footer'); ?>