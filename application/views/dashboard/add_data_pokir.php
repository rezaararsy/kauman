<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Pokir Kelurahan Kauman</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div> -->
          </div>

          <div class="section-body">
            <!-- <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> -->
            <form action="<?php echo base_url(). 'dashboard/inputDataPokir'; ?>" method="post">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Masukkan Data Pokir</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Prioritas</label>
                      <input required name="prioritas" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input required name="alamat" type="text" class="form-control">
                    </div>  
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <input required name="kecamatan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Kelurahan</label>
                      <input required name="kelurahan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Koefisien</label>
                      <input required name="koefisien" type="number" class="form-control">
                    </div>    
                    <div class="form-group">
                      <label>Nilai Usulan</label>
                      <input required name="nilai_usulan" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nilai Akomodir</label>
                      <input required name="nilai_akomodir" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Sasaran OPD</label>
                      <select required name="opd_tujuan" class="form-control">
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
                      <input required name="keterangan" type="text" class="form-control">
                    </div>          
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            </form>
          </div>
        </section>
      </div>

      
<?php $this->load->view('dist/_partials/footer'); ?>