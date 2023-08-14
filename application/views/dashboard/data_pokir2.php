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
                      <table class="table table-striped" id="table_id_pokir2" style="width:100%">
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
<?php $this->load->view('dist/_partials/footer'); ?>