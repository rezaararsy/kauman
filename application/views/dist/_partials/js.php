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
    var kecdata = 0;
    var keldata = 0;
    function updateChar() {
      console.log("Berjalan");
    d = document.getElementById("zoneSelect").value;
    //alert(d);
    $("#kelurahanya").empty();
    $("#rwnya").empty();
    $("#rtnya").empty();
    if(d=="1"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
      //               $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      $.each(kodeblimbing, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(blimbing[key]));
      
    });
    updateChar2();
    
    }else if(d=="3"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
      //               $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      $.each(kodekedungkandang, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(kedungkandang[key])); 
    });
    updateChar2();
    }else if(d=="2"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      $.each(kodeklojen, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(klojen[key])); 
    });
    updateChar2();
    }else if(d=="5"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
      //               $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      $.each(kodelowokwaru, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(lowokwaru[key])); 
    });
    updateChar2();
    }else if(d=="4"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
      //               $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      $.each(kodesukun, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(sukun[key])); 
    });
    updateChar2();
    }
    
    }

    function updateChar00() {
      console.log("Berjalan");
    d = document.getElementById("zoneSelect").value;
    //alert(d);
    $("#kelurahanya").empty();
    $("#rwnya").empty();
    $("#rtnya").empty();
    if(d=="1"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
                    $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", 0)
                    .text("Pilih  Semua Kelurahan"));
      $.each(kodeblimbing, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(blimbing[key]));
      
    });
    updateChar2();
    
    }else if(d=="3"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
                    $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", 0)
                    .text("Semua Kelurahan"));
      $.each(kodekedungkandang, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(kedungkandang[key])); 
    });
    updateChar2();
    }else if(d=="2"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
      $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", 0)
                    .text("Semua Kelurahan"));
      $.each(kodeklojen, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(klojen[key])); 
    });
    updateChar2();
    }else if(d=="5"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
                    $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", 0)
                    .text("Semua Kelurahan"));
      $.each(kodelowokwaru, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(lowokwaru[key])); 
    });
    updateChar2();
    }else if(d=="4"){
      // $('#kelurahanya')
      //    .append($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih Kelurahan").attr('disabled','disabled'));
                    $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", 0)
                    .text("Semua Kelurahan"));
      $.each(kodesukun, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(sukun[key])); 
    });
    updateChar2();
    }
    
    }
    var urle2 = "<?php echo base_url().'pengguna/data_json_perpindahan/'?>"+kecdata+'/'+keldata;
    var urle = "<?php echo base_url().'dashboard/data_json_perpindahan/'?>"+kecdata+'/'+keldata;
    function updateChar2() {
      console.log("Berjalan2");
      id = document.getElementById("kelurahanya").value;
      $("#rwnya").empty();
        $("#rtnya").empty();
      if(d=="1"){
          document.getElementById("kodekelurahan").value = kodeblimbing[id]; 
          for(var i = 1; i<=rwblimbing[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtblimbing[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }else if(d=="3"){
          document.getElementById("kodekelurahan").value = kodekedungkandang[id]; 
          for(var i = 1; i<=rwkedungkandang[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtkedungkandang[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }else if(d=="2"){
          document.getElementById("kodekelurahan").value = kodeklojen[id]; 
          for(var i = 1; i<=rwklojen[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtklojen[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }else if(d=="5"){
          document.getElementById("kodekelurahan").value = kodelowokwaru[id]; 
          for(var i = 1; i<=rwlowokwaru[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtlowokwaru[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        
        }else if(d=="4"){
          document.getElementById("kodekelurahan").value = kodesukun[id]; 
          for(var i = 1; i<=rwsukun[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtsukun[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }
    }
    function updatedatatable() {
      // $('#kelurahanya')
      //    .prepend($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      console.log("Jalan");
      rw = 0;
      jenis = 0;
      var rwnya = document.getElementById("rw");
      rw = rwnya.value;
      // var kel = document.getElementById("kodekelurahan");
      var jenisnya = document.getElementById("jenis");
      jenis = jenisnya.value;
      // console.log(kel2.value);
      // if(kel2.value == 0){
      //   keldata = 0;
      // }
   
      
      urle = "<?php echo base_url().'dashboard/data_json_perpindahan/'?>"+rw+'/'+jenis;
      // if (x.style.display === "none") {
      //   x.style.display = "block";
      // } else { 
      //   x.style.display = "none";
      // }
      //$('#table_id').DataTable().ajax.reload();
      // $("#table_id tr").remove(); 
      //panggiltabel();
      //$('#table_id').DataTable().ajax.reload();
      console.log(urle);
      $('#table_id').DataTable().ajax.url(urle).load();
      //$('#table_id').DataTable().clear().draw();
    }

    function updatedatatable00() {
      // $('#kelurahanya')
      //    .prepend($("<option></option>")
      //               .attr("value", 0)
      //               .text("Pilih  Semua Kelurahan"));
      console.log("Jalan");
      rw = 0;
      jenis = 0;
      var rwnya = document.getElementById("rw");
      rw = rwnya.value;
      // var kel = document.getElementById("kodekelurahan");
      var jenisnya = document.getElementById("jenis");
      jenis = jenisnya.value;
      // console.log(kel2.value);
      // if(kel2.value == 0){
      //   keldata = 0;
      // }
   
      
      urle = "<?php echo base_url().'pengguna/data_json_perpindahan/'?>"+rw+'/'+jenis;
      // if (x.style.display === "none") {
      //   x.style.display = "block";
      // } else { 
      //   x.style.display = "none";
      // }
      //$('#table_id').DataTable().ajax.reload();
      // $("#table_id tr").remove(); 
      //panggiltabel();
      //$('#table_id').DataTable().ajax.reload();
      console.log(urle);
      $('#table_id00').DataTable().ajax.url(urle).load();
      //$('#table_id').DataTable().clear().draw();
    }
    
    function mask(name){
      const mask = "*";
      let maskedName = name.substring(0,1) + mask.repeat(name.length-2) + name.slice(-1);
      return maskedName;
    }
    
    function panggiltabel(){
      
      $('#table_id').DataTable({
                processing: true,
                serverSide: true,
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
                            // {"data": "nama",
                            // render: function (data, type, row, meta) {
                            //   // const mask = "*";
                            //   // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                            //   // return maskedName;
                            //   return data;
                            // }},
                            // {"data": "kecamatan",
                            // render: function (data, type, row, meta) {
                            //     if(data==1){
                            //       return 'Blimbing';
                            //     }else if(data==2){
                            //       return 'Klojen';
                            //     }else if(data==5){
                            //       return 'Lowokwaru';
                            //     }else if(data==3){
                            //       return 'Kedungkandang';
                            //     }else if(data==4){
                            //       return 'Sukun';
                            //     }
                            // }},
                            // {"data": "kelurahan",
                            // render: function (data, type, row, meta) {
                            //   if(row['kecamatan']==1){
                            //     return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                            //   }else if(row['kecamatan']==2){
                            //     return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                            //   }else if(row['kecamatan']==5){
                            //     return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                            //   }else if(row['kecamatan']==3){
                            //     return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                            //   }else if(row['kecamatan']==4){
                            //     return sukun[kodesukun.indexOf(parseInt(data))];
                            //   }
                            // }},
                            // {"data": "alamat_rt"},
                            // {"data": "tgl_pindah"},
                            // {"data": "jenis_pindah",
                            // render: function (data, type, row, meta) {
                            //     if(data==1){
                            //       return '<span class="badge badge-success">Pindah Masuk</span>';
                            //     }else{
                            //       return '<span class="badge badge-warning">Pindah Keluar</span>';
                            //     }
                            // }},
                            {
                    "data": "id_usulan",
                    render: function (data, type, row, meta) {
                      return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_usulan']+'" class="btn btn-danger hapus_record">Hapus</a></td></td>';
                      // return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td><a style="margin-left:10px;margin-top:15px;" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-warning batal_record">Batal Pindah</a></td>';
                        // return '<td><a style="margin:5px" href="javascript:void(0);" onclick="updateChar()" data-kecamatan="'+row['kecamatan']+'" data-kelurahan="'+row['kelurahan']+'" data-rw="'+row['rw']+'" data-rt="'+row['rt']+'" data-nik="'+row['nik']+'" data-nama="'+row['nama']+'" data-jenis_pindah="'+row['jenis_pindah']+'" data-skpwni="'+row['skpwni']+'" data-tgl_pindah="'+row['tgl_pindah']+'" data-alamat_rt="'+row['alamat_rt']+'" data-kode="'+row['id_perpindahan']+'" class="btn btn-primary edit_record">Ubah</a></td><td ><a style="margin:5px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td>';
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
                            // {"data": "nama",
                            // render: function (data, type, row, meta) {
                            //   // const mask = "*";
                            //   // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                            //   // return maskedName;
                            //   return data;
                            // }},
                            // {"data": "kecamatan",
                            // render: function (data, type, row, meta) {
                            //     if(data==1){
                            //       return 'Blimbing';
                            //     }else if(data==2){
                            //       return 'Klojen';
                            //     }else if(data==5){
                            //       return 'Lowokwaru';
                            //     }else if(data==3){
                            //       return 'Kedungkandang';
                            //     }else if(data==4){
                            //       return 'Sukun';
                            //     }
                            // }},
                            // {"data": "kelurahan",
                            // render: function (data, type, row, meta) {
                            //   if(row['kecamatan']==1){
                            //     return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                            //   }else if(row['kecamatan']==2){
                            //     return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                            //   }else if(row['kecamatan']==5){
                            //     return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                            //   }else if(row['kecamatan']==3){
                            //     return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                            //   }else if(row['kecamatan']==4){
                            //     return sukun[kodesukun.indexOf(parseInt(data))];
                            //   }
                            // }},
                            // {"data": "alamat_rt"},
                            // {"data": "tgl_pindah"},
                            // {"data": "jenis_pindah",
                            // render: function (data, type, row, meta) {
                            //     if(data==1){
                            //       return '<span class="badge badge-success">Pindah Masuk</span>';
                            //     }else{
                            //       return '<span class="badge badge-warning">Pindah Keluar</span>';
                            //     }
                            // }},
                //             {
                //     "data": "id",
                //     render: function (data, type, row, meta) {
                //       return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id']+'" class="btn btn-danger hapus_record">Hapus</a></td></td>';
                //       // return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td><a style="margin-left:10px;margin-top:15px;" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-warning batal_record">Batal Pindah</a></td>';
                //         // return '<td><a style="margin:5px" href="javascript:void(0);" onclick="updateChar()" data-kecamatan="'+row['kecamatan']+'" data-kelurahan="'+row['kelurahan']+'" data-rw="'+row['rw']+'" data-rt="'+row['rt']+'" data-nik="'+row['nik']+'" data-nama="'+row['nama']+'" data-jenis_pindah="'+row['jenis_pindah']+'" data-skpwni="'+row['skpwni']+'" data-tgl_pindah="'+row['tgl_pindah']+'" data-alamat_rt="'+row['alamat_rt']+'" data-kode="'+row['id_perpindahan']+'" class="btn btn-primary edit_record">Ubah</a></td><td ><a style="margin:5px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td>';
                //     }
                // },
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
                      // return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td><a style="margin-left:10px;margin-top:15px;" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-warning batal_record">Batal Pindah</a></td>';
                        // return '<td><a style="margin:5px" href="javascript:void(0);" onclick="updateChar()" data-kecamatan="'+row['kecamatan']+'" data-kelurahan="'+row['kelurahan']+'" data-rw="'+row['rw']+'" data-rt="'+row['rt']+'" data-nik="'+row['nik']+'" data-nama="'+row['nama']+'" data-jenis_pindah="'+row['jenis_pindah']+'" data-skpwni="'+row['skpwni']+'" data-tgl_pindah="'+row['tgl_pindah']+'" data-alamat_rt="'+row['alamat_rt']+'" data-kode="'+row['id_perpindahan']+'" class="btn btn-primary edit_record">Ubah</a></td><td ><a style="margin:5px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td>';
                    }
                },
                      ]
                });
            

            $(document).ready( function () {
                $('#table_id2').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'pengguna/data_json_perpindahan/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_perpindahan"},
                            {"data": "nama",
                            render: function (data, type, row, meta) {
                              // const mask = "*";
                              // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                              // return maskedName;
                              return data;
                            }},{"data": "kecamatan",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Blimbing';
                                }else if(data==2){
                                  return 'Klojen';
                                }else if(data==5){
                                  return 'Lowokwaru';
                                }else if(data==3){
                                  return 'Kedungkandang';
                                }else if(data==4){
                                  return 'Sukun';
                                }
                            }},
                            {"data": "kelurahan",
                            render: function (data, type, row, meta) {
                              // if(row['kecamatan']==1){
                              //   return blimbing[data];
                            
                              // }else if(row['kecamatan']==2){
                              //   return klojen[data];
                             
                              // }else if(row['kecamatan']==5){
                              //   return lowokwaru[data];
                             
                              // }else if(row['kecamatan']==3){
                              //   return kedungkandang[data];
                             
                              // }else if(row
                              // ['kecamatan']==4){
                              //   return sukun[data];
                              // }
                              if(row['kecamatan']==1){
                                return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                              }else if(row['kecamatan']==2){
                                return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==5){
                                return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==3){
                                return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==4){
                                return sukun[kodesukun.indexOf(parseInt(data))];
                              }
                            }},
                            {"data": "rt"},
                            {"data": "rw"},
                            {"data": "alamat_rt"},
                            {"data": "tgl_pindah"},
                            {"data": "jenis_pindah",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return '<span class="badge badge-success">Pindah Masuk</span>';
                                }else{
                                  return '<span class="badge badge-warning">Pindah Keluar</span>';
                                }
                            }}
                      ]
                });
            } );

            $(document).ready( function () {
                $('#table_id3').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'pengguna_kelurahan/data_json_perpindahan/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_perpindahan"},
                            {"data": "nama",
                            render: function (data, type, row, meta) {
                              // const mask = "*";
                              // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                              // return maskedName;
                              return data;
                            }},
                            {"data": "kecamatan",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Blimbing';
                                }else if(data==2){
                                  return 'Klojen';
                                }else if(data==5){
                                  return 'Lowokwaru';
                                }else if(data==3){
                                  return 'Kedungkandang';
                                }else if(data==4){
                                  return 'Sukun';
                                }
                            }},
                            {"data": "kelurahan",
                            render: function (data, type, row, meta) {
                              // if(row['kecamatan']==1){
                              //   return blimbing[data];
                            
                              // }else if(row['kecamatan']==2){
                              //   return klojen[data];
                             
                              // }else if(row['kecamatan']==5){
                              //   return lowokwaru[data];
                             
                              // }else if(row['kecamatan']==3){
                              //   return kedungkandang[data];
                             
                              // }else if(row
                              // ['kecamatan']==4){
                              //   return sukun[data];
                              // }
                              if(row['kecamatan']==1){
                                return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                              }else if(row['kecamatan']==2){
                                return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==5){
                                return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==3){
                                return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==4){
                                return sukun[kodesukun.indexOf(parseInt(data))];
                              }
                            }},
                            {"data": "rt"},
                            {"data": "rw"},
                            {"data": "alamat_rt"},
                            {"data": "tgl_pindah"},
                            {"data": "jenis_pindah",
                            render: function (data, type, row, meta) {
                              if(data==1){
                                  return '<span class="badge badge-success">Pindah Masuk</span>';
                                }else{
                                  return '<span class="badge badge-warning">Pindah Keluar</span>';
                                }
                            }}
                      ]
                });
            } );

            $(document).ready( function () {
                $('#table_id4').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'pengguna_okp/data_json_perpindahan/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_perpindahan"},
                            {"data": "nama",
                            render: function (data, type, row, meta) {
                              // const mask = "*";
                              // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                              // return maskedName;
                              return data;
                            }},
                            {"data": "kecamatan",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Blimbing';
                                }else if(data==2){
                                  return 'Klojen';
                                }else if(data==5){
                                  return 'Lowokwaru';
                                }else if(data==3){
                                  return 'Kedungkandang';
                                }else if(data==4){
                                  return 'Sukun';
                                }
                            }},
                            {"data": "kelurahan",
                            render: function (data, type, row, meta) {
                              // if(row['kecamatan']==1){
                              //   return blimbing[data];
                            
                              // }else if(row['kecamatan']==2){
                              //   return klojen[data];
                             
                              // }else if(row['kecamatan']==5){
                              //   return lowokwaru[data];
                             
                              // }else if(row['kecamatan']==3){
                              //   return kedungkandang[data];
                             
                              // }else if(row
                              // ['kecamatan']==4){
                              //   return sukun[data];
                              // }
                              if(row['kecamatan']==1){
                                return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                              }else if(row['kecamatan']==2){
                                return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==5){
                                return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==3){
                                return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==4){
                                return sukun[kodesukun.indexOf(parseInt(data))];
                              }
                            }},
                            {"data": "rt"},
                            {"data": "rw"},
                            {"data": "alamat_rt"},
                            {"data": "tgl_pindah"},
                            {"data": "jenis_pindah",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return '<span class="badge badge-success">Pindah Masuk</span>';
                                }else{
                                  return '<span class="badge badge-warning">Pindah Keluar</span>';
                                }
                            }},
                            {
                    "data": "alamat_rt",
                    render: function (data, type, row, meta) {
                      //return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td></td>';
                      // return '<td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td><a style="margin-left:10px;margin-top:15px;" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-warning batal_record">Batal Pindah</a></td>';
                        return '<td><a href="javascript:void(0);" onclick="updateChar()" data-kecamatan="'+row['kecamatan']+'" data-kelurahan="'+row['kelurahan']+'" data-rw="'+row['rw']+'" data-rt="'+row['rt']+'" data-nik="'+row['nik']+'" data-nama="'+row['nama']+'" data-jenis_pindah="'+row['jenis_pindah']+'" data-skpwni="'+row['skpwni']+'" data-tgl_pindah="'+row['tgl_pindah']+'" data-alamat_rt="'+row['alamat_rt']+'" data-kode="'+row['id_perpindahan']+'" class="btn btn-primary edit_record">Ubah</a></td><td >';
                    }
                },
                      ]
                });
            } );

            $(document).ready( function () {
                $('#table_id5').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'pengguna_kecamatan/data_json_perpindahan/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_perpindahan"},
                            {"data": "nama",
                            render: function (data, type, row, meta) {
                              // const mask = "*";
                              // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                              // return maskedName;
                              return data;
                            }},
                            {"data": "kecamatan",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Blimbing';
                                }else if(data==2){
                                  return 'Klojen';
                                }else if(data==5){
                                  return 'Lowokwaru';
                                }else if(data==3){
                                  return 'Kedungkandang';
                                }else if(data==4){
                                  return 'Sukun';
                                }
                            }},
                            {"data": "kelurahan",
                            render: function (data, type, row, meta) {
                              // if(row['kecamatan']==1){
                              //   return blimbing[data];
                            
                              // }else if(row['kecamatan']==2){
                              //   return klojen[data];
                             
                              // }else if(row['kecamatan']==5){
                              //   return lowokwaru[data];
                             
                              // }else if(row['kecamatan']==3){
                              //   return kedungkandang[data];
                             
                              // }else if(row
                              // ['kecamatan']==4){
                              //   return sukun[data];
                              // }
                              if(row['kecamatan']==1){
                                return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                              }else if(row['kecamatan']==2){
                                return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==5){
                                return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==3){
                                return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==4){
                                return sukun[kodesukun.indexOf(parseInt(data))];
                              }
                            }},
                            {"data": "rt"},
                            {"data": "rw"},
                            {"data": "alamat_rt"},
                            {"data": "tgl_pindah"},
                            {"data": "jenis_pindah",
                            render: function (data, type, row, meta) {
                              if(data==1){
                                  return '<span class="badge badge-success">Pindah Masuk</span>';
                                }else{
                                  return '<span class="badge badge-warning">Pindah Keluar</span>';
                                }
                            }}
                      ]
                });
            } );

            $(document).ready( function () {
                $('#table_id6').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'pengguna_rw/data_json_perpindahan/'?>", "type": "POST"},
                      columns: [
                            {"data": "id_perpindahan"},
                            {"data": "nama",
                            render: function (data, type, row, meta) {
                              // const mask = "*";
                              // let maskedName = data.substring(0,10) + mask.repeat(data.length-4) + data.slice(-5);
                              // return maskedName;
                              return data;
                            }},
                            {"data": "kecamatan",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Blimbing';
                                }else if(data==2){
                                  return 'Klojen';
                                }else if(data==5){
                                  return 'Lowokwaru';
                                }else if(data==3){
                                  return 'Kedungkandang';
                                }else if(data==4){
                                  return 'Sukun';
                                }
                            }},
                            {"data": "kelurahan",
                            render: function (data, type, row, meta) {
                              // if(row['kecamatan']==1){
                              //   return blimbing[data];
                            
                              // }else if(row['kecamatan']==2){
                              //   return klojen[data];
                             
                              // }else if(row['kecamatan']==5){
                              //   return lowokwaru[data];
                             
                              // }else if(row['kecamatan']==3){
                              //   return kedungkandang[data];
                             
                              // }else if(row
                              // ['kecamatan']==4){
                              //   return sukun[data];
                              // }
                              if(row['kecamatan']==1){
                                return blimbing[kodeblimbing.indexOf(parseInt(data))];
                            
                              }else if(row['kecamatan']==2){
                                return klojen[kodeklojen.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==5){
                                return lowokwaru[kodelowokwaru.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==3){
                                return kedungkandang[kodekedungkandang.indexOf(parseInt(data))];
                             
                              }else if(row['kecamatan']==4){
                                return sukun[kodesukun.indexOf(parseInt(data))];
                              }
                            }},
                            {"data": "rt"},
                            {"data": "rw"},                        
                            {"data": "alamat_rt"},
                            {"data": "tgl_pindah"},
                            {"data": "jenis_pindah",
                            render: function (data, type, row, meta) {
                              if(data==1){
                                  return '<span class="badge badge-success">Pindah Masuk</span>';
                                }else{
                                  return '<span class="badge badge-warning">Pindah Keluar</span>';
                                }
                            }}
                      ]
                });
            } );

            $('#table_id').on('click','.hapus_record',function(){
                    var id_perpindahan=$(this).data('kode');
                    $('#ModalHapus').modal('show');
                    $('[name="id"]').val(id_perpindahan);
              });

              $('#table_id_pokir').on('click','.hapus_record2',function(){
                    var id_perpindahan=$(this).data('kode');
                    $('#ModalHapus2').modal('show');
                    $('[name="id"]').val(id_perpindahan);
              });

              $('#table_id').on('click','.batal_record',function(){
                    var id_perpindahan=$(this).data('kode');
                    $('#ModalHapus').modal('show');
                    $('[name="id_perpindahan"]').val(id_perpindahan);
              });

            $('#table_id').on('click','.edit_record',function(){
              console.log("Jalan");
              // updateChar();
              updateChar();
                var id_perpindahan=$(this).data('kode');
                var kecamatan=$(this).data('kecamatan');                               
                var kelurahan=$(this).data('kelurahan');
                var rw=$(this).data('rw');
                var rt=$(this).data('rt');
                var nik=$(this).data('nik');               
                var nama=$(this).data('nama');
                var jenis_pindah=$(this).data('jenis_pindah');
                var skpwni=$(this).data('skpwni');               
                var tgl_pindah=$(this).data('tgl_pindah');
                var alamat_rt=$(this).data('alamat_rt');
                $('#ModalUpdate').modal('show');
                $('[name="id_perpindahan"]').val(id_perpindahan);
                $('[name="kecamatan"]').val(kecamatan);
                $('[name="kelurahan"]').val(kelurahan);
                $('[name="rw"]').val(rw);
                $('[name="rt"]').val(rt);
                $('[name="nik"]').val(nik);
                $('[name="nama"]').val(nama);
                $('[name="jenis_pindah"]').val(jenis_pindah);
                $('[name="skpwni"]').val(skpwni);
                $('[name="tgl_pindah"]').val(tgl_pindah);
                $('[name="alamat_rt"]').val(alamat_rt);
          });

          $('#table_id4').on('click','.edit_record',function(){
              console.log("Jalan");
              // updateChar();
              //updateChar();
                var id_perpindahan=$(this).data('kode');
                var kecamatan=$(this).data('kecamatan');                               
                var kelurahan=$(this).data('kelurahan');
                var rw=$(this).data('rw');
                var rt=$(this).data('rt');
                var nik=$(this).data('nik');               
                var nama=$(this).data('nama');
                var jenis_pindah=$(this).data('jenis_pindah');
                var skpwni=$(this).data('skpwni');               
                var tgl_pindah=$(this).data('tgl_pindah');
                var alamat_rt=$(this).data('alamat_rt');
                $('#ModalUpdate').modal('show');
                $('[name="id_perpindahan"]').val(id_perpindahan);
                $('[name="kecamatan"]').val(kecamatan);
                $('[name="kelurahan"]').val(kelurahan);
                $('[name="rw"]').val(rw);
                $('[name="rt"]').val(rt);
                $('[name="nik"]').val(nik);
                $('[name="nama"]').val(nama);
                $('[name="jenis_pindah"]').val(jenis_pindah);
                $('[name="skpwni"]').val(skpwni);
                $('[name="tgl_pindah"]').val(tgl_pindah);
                $('[name="alamat_rt"]').val(alamat_rt);
          });          
  </script>
</body>
</html>