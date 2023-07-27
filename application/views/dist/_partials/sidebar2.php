<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="<?php echo base_url(); ?>assets/logo.png" alt="logo" width="30" style="background-color:white;">
            <a href="<?php echo base_url(); ?>">SIULAN</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <!-- <a href="<?php echo base_url(); ?>">L-P</a> -->
            <img src="<?php echo base_url(); ?>assets/logo.png" alt="logo" width="30" style="background-color:white;">
          </div>
          <ul class="sidebar-menu">
          <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>">Daftar Usulan Musrenbang Kelurahan</a></li>
            
          </ul>

          <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div> -->
        </aside>
      </div>
