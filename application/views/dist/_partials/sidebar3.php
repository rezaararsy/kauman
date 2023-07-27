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
            <li class="menu-header">Dashboard</li>
            <!-- <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"> -->
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
              <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard">Home</a></li>
              <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/data_musrenbang">Daftar Usulan Musrenbang Kelurahan</a></li>
              <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/add_musrenbang">Tambah Data Musrenbang</a></li>
              <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/data_musrenbang">Kamus Usulan Bappeda</a></li>
              <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/add_musrenbang">Tambah Data Kamus Usulan Bappeda</a></li>
              <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/data_musrenbang">Daftar Pokir Kelurahan</a></li>
              <li style="margin-top: 10px;margin-bottom: 10px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/add_musrenbang">Tambah Data Pokir Kelurahan</a></li>
              <!-- <li style="margin-top: 25px;margin-bottom: 15px;" class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/add_pindah_keluar">Tambah Data Perpindahan Keluar</a></li>
              <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard/impor_data_pindah">Impor Data Perpindahan</a></li> -->
                <!-- <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">General Dashboard</a></li>
                <li class="<?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index">Ecommerce Dashboard</a></li> -->
              </ul>
            </li>
            
          </ul>

          <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div> -->
        </aside>
      </div>
