<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Perpindahan Penduduk RT 1 RW 2 Kelurahan Dinoyo Kecamatan Lowokwaru</h1>

          </div>

          <div class="section-body">
   

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <h4>Basic DataTables</h4> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nama Penduduk</th>
                            <th>Alamat di RT</th>
                            <th>Tgl Pindah</th>
                            <th>Jenis Perpindahan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Reza Ararsy</td>
                            <td>
                              Joyogrand Blok B1/03
                            </td>
                            <td>
                                2018-01-20
                            </td>
                            <td>Pindah Masuk</td>
                            <td><a href="#" class="btn btn-primary">Action</a></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>