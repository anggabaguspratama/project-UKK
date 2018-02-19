<?php
include 'admin/pages/rute/koneksi.php';
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Hasil Pencarian</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> 
<style type="text/css">

.inp{
  padding: 15px 20px;
}
.autol{
  height: 35px;
  width: 100%;
  background-color: #ffffff;
  color: #565656;
  font-family: 'Rubik', sans-serif;
  font-size: 1rem;
  line-height: 1.43;
  min-height: 2.1em;
  padding: 5px;
  border: 0;
  border-radius: 0;
}
.lab{
  color: white;
}
.subm{
  padding: 10px 5px;
}
td{
  padding: 20px 30px;
}
.but{
  background-color: dodgerblue;
  padding: 12px;
  border-radius: 10px;
  color: white;
}
</style>



</head>
<body>
  <section class="menu cid-qIKXjbD6S5" once="menu" id="menu1-w">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="menu-logo">
        <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="index.php">
             <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
           </a>
         </span>
         <span class="navbar-caption-wrap">
          <a class="navbar-caption text-white display-4" href="index.php">
            PROVEL.com
          </a>
        </span>
      </div>
    </div>
  </nav>
</section>







































<div class="nggo" style="background-color:skyblue; padding: 100px 30px 30px 30px;">

  <form action="hasil.php" method="get">
    <div class="row">


      <div class="col-lg-4 col-md-6 col-sm-12 inp">
        <div class="form-group">
          <label class="lab">Kota Keberangkatan</label>
          <select class="form-control select2" style="width: 100%;" name="caridari" class="caridari autol">
            <?php
            $query=mysql_query("SELECT DISTINCT dari from rute;");
            while($var=mysql_fetch_array($query)){
              echo "<option>$var[dari]</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 inp">
        <div class="form-group">
          <label class="lab">Kota Tujuan</label>
          <select class="form-control select2" style="width: 100%;" name="caritujuan" class="caritujuan autol">
            <optgroup disabled="">cari kota</optgroup>
            <?php
            $query=mysql_query("SELECT DISTINCT tujuan from rute;");
            while($var=mysql_fetch_array($query)){
              echo "<option>$var[tujuan]</option>";
            }
            ?>
          </select>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 col-sm-12 inp">
        <label class="lab">Tanggal Kebrerangkatan</label>
        <input type="date" name="caritanggal" size="30" class="caritujuan autol form-control">
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 inp">
        <label class="lab">Jumlah</label><br>
        <select style="background-color: white; height: 40px;width: 120px; padding:0 10px;" name="jumlah">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 inp">
        <div class="subm">
          <input type="submit" value="Cari" class="btn btn-primary">
        </div>
      </div>
    </div>
  </form>
</div>


















<div class="backdua" style="margin: 20px 40px 20px 40px; background-color: white;">

 <?php 
 if(isset($_GET['caridari'])){
  $caridari = $_GET['caridari'];
  $caritujuan = $_GET['caritujuan'];
  $caritanggal = $_GET['caritanggal'];
  $jumlah = $_GET['jumlah'];

  $data = mysql_query("SELECT rute.id, rute.tanggal, rute.dari, rute.tujuan, rute.jam, rute.harga, transport.nama, transport.logo from rute, transport where rute.dari like '".$caridari."' and rute.tujuan like '".$caritujuan."' and rute.idtransport = transport.id and rute.tanggal like '".$caritanggal."' order by rute.harga");  
  ?>

  <h2 style="padding: 10px;"> <?php echo $caridari; ?> ke <?php echo $caritujuan; ?> </h2>

  <?php
  while($var = mysql_fetch_array($data)){
    ?>
    <div class="row" style="background-color: white;padding: 10px;">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="assets/images/makapai/<?php echo $var['logo'];?>" width="35px"> <?php echo $var['nama'];?></div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php echo $var['dari']; ?></div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php echo $var['tujuan']; ?></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Rp. <?php echo $var['harga']; ?></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><?php echo'<a class="but" href="konfirmasi.php?id='.$var['id'].'&jumlah='.$jumlah.'">Pesan</a>'?></div>
    </div>
    <p style="padding-left: 10px;"><?php echo $var['jam']; ?> - <?php echo $var['jam']; ?></p>
    <hr>
    <?php } ?>
    <?php 
  }

  ?>

</div>







<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/playervimeo/vimeo_player.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>
<script src="admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="admin/bower_components/moment/min/moment.min.js"></script>
<script src="admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>


</body>
</html>