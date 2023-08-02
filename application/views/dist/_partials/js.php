<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- General JS Scripts -->
  
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "bootstrap_card") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/prism/prism.js"></script>
<?php
}elseif ($this->uri->segment(2) == "layout_transparent") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/sticky-kit.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_gallery") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/dropzonejs/min/dropzone.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_table") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_user") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
}elseif ($this->uri->segment(2) != "") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "forms_editor") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_advanced_route" || $this->uri->segment(2) == "gmaps_draggable_marker" || $this->uri->segment(2) == "gmaps_geocoding" || $this->uri->segment(2) == "gmaps_geolocation" || $this->uri->segment(2) == "gmaps_marker" || $this->uri->segment(2) == "gmaps_multiple_marker" || $this->uri->segment(2) == "gmaps_route" || $this->uri->segment(2) == "gmaps_simple") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="<?php echo base_url(); ?>assets/modules/gmaps.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/fullcalendar/fullcalendar.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
<?php
}elseif ($this->uri->segment(2) != "") { ?>
  <!-- <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>  -->
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sweet_alert") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_toastr") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
}elseif ($this->uri->segment(2) == "auth_register") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_profile") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/mode/javascript/javascript.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_tickets") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "utilities_contact") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="<?php echo base_url(); ?>assets/modules/gmaps.js"></script>
<?php
} ?>

  <!-- Page Specific JS File -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/index.js"></script>
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/index-0.js"></script>
<?php
}elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/bootstrap-modal.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_chat_box") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-chat-box.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-multiple-upload.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-statistic.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_table") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-table.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_user") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-user.js"></script>
<?php
}elseif ($this->uri->segment(2) == "forms_advanced_form") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/forms-advanced-forms.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_advanced_route") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-advanced-route.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_draggable_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-draggable-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_geocoding") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-geocoding.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_geolocation") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-geolocation.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_multiple_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-multiple-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_route") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-route.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_simple") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-simple.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-calendar.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-chartjs.js"></script>
<?php
}elseif ($this->uri->segment(2) != "") { ?>
  <!-- <script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script> -->
<?php
}elseif ($this->uri->segment(2) == "modules_ion_icons") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-ion-icons.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-slider.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-sparkline.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sweet_alert") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-sweetalert.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_toastr") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-toastr.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-vector-map.js"></script>
<?php
}elseif ($this->uri->segment(2) == "auth_register") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/auth-register.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/features-post-create.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/features-posts.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/features-setting-detail.js"></script>
<?php
}elseif ($this->uri->segment(2) == "utilities_contact") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/utilities-contact.js"></script>
<?php
} ?>

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

  <script>

    var d = "";
    var id = 0;
    var data1 = 0;
    var data2 = 0;



    var urle2 = "<?php echo base_url().'pengguna/data_json_musrenbang/'?>"+data1+'/'+data2;
    var urle = "<?php echo base_url().'dashboard/data_json_musrenbang/'?>"+data1+'/'+data2;

    function updatedatatable() {

      console.log("Jalan");
      rw = 0;
      jenis = 0;
      var rwnya = document.getElementById("rw");
      rw = rwnya.value;

      var jenisnya = document.getElementById("jenis");
      jenis = jenisnya.value;

      
      urle = "<?php echo base_url().'dashboard/data_json_musrenbang/'?>"+rw+'/'+jenis;

      console.log(urle);
      $('#table_id').DataTable().ajax.url(urle).load();
    }


    
    
    function panggiltabel(){
      
      $('#table_id').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                      ajax: {"url": urle, "type": "POST"},
                      columns: [
                            {"data": "id_usulan"},
                            {"data": "urusan"},
                            {"data": "jenis"},
                            {"data": "usulan"},
                            {"data": "permasalahan"},
                            {"data": "alamat"},
                            {"data": "skpd_tujuan"},
                            {"data": "koefisien"},
                            {"data": "anggaran"},
                            {"data": "keterangan"},
                            {"data": "rw"},
                            {"data": "tahun"},
                            {
                    "data": "id_usulan",
                    render: function (data, type, row, meta) {
                      return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_usulan']+'" class="btn btn-danger hapus_record">Hapus</a></td></td>';
                    }
                },
                      ]
                });
            }

            

            $('#table_id00').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": urle2, "type": "POST"},
                      columns: [
                            {"data": "id_usulan"},
                            {"data": "urusan"},
                            {"data": "jenis"},
                            {"data": "usulan"},
                            {"data": "permasalahan"},
                            {"data": "alamat"},
                            {"data": "skpd_tujuan"},
                            {"data": "koefisien"},
                            {"data": "anggaran"},
                            {"data": "keterangan"},
                            {"data": "rw"},
                            {"data": "tahun"},
                      ]
                });
            


            $(document).ready( function () {
                panggiltabel();
            } );

            $('#table_id_pokir2').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'pengguna/data_json_pokir/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_pokir"},
                            {"data": "prioritas"},
                            {"data": "alamat"},
                            {"data": "kecamatan"},
                            {"data": "kelurahan"},
                            {"data": "koefisien"},
                            {"data": "nilai_usulan"},
                            {"data": "nilai_akomodir"},
                            {"data": "opd_tujuan"},
                            {"data": "keterangan"},
                      ]
                });

                $('#table_id_pokir').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                      ajax: {"url": "<?php echo base_url().'dashboard/data_json_pokir/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_pokir"},
                            {"data": "prioritas"},
                            {"data": "alamat"},
                            {"data": "kecamatan"},
                            {"data": "kelurahan"},
                            {"data": "koefisien"},
                            {"data": "nilai_usulan"},
                            {"data": "nilai_akomodir"},
                            {"data": "opd_tujuan"},
                            {"data": "keterangan"},
                            {
                    "data": "id_pokir",
                    render: function (data, type, row, meta) {
                      return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_pokir']+'" class="btn btn-danger hapus_record2">Hapus</a></td></td>';
                    }
                },
                      ]
                });

            $('#table_id').on('click','.hapus_record',function(){
                    var id_musrenbang=$(this).data('kode');
                    $('#ModalHapus').modal('show');
                    $('[name="id"]').val(id_musrenbang);
              });

              $('#table_id_pokir').on('click','.hapus_record2',function(){
                    var id_musrenbang=$(this).data('kode');
                    $('#ModalHapus2').modal('show');
                    $('[name="id"]').val(id_musrenbang);
              });

       
  </script>
</body>
</html>