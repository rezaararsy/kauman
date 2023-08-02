<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            
          </div>
          <!-- <h4><?php echo $this->session->flashdata('message');?></h4> -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Musrenbang</h4>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>
<?php $this->load->view('dist/_partials/js2'); ?>