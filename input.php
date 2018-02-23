<?php
include 'admin/pages/rute/koneksi.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flight Ticket Booking a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tambahan.css">
	<link rel="stylesheet" type="text/css" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
	<h1 style=" color: white;">Travelina</h1>
	<div class="row" style="margin:0 20px;padding: 20px; background-color: orange;">
		<div class="col-md-12" style="font-size: 24px; color: white;">
			<ul>
					<li class="resp-tab-item">Booking Ticket</span></li>				
			</ul>
		</div>
	</div>
	<div class="row" style="margin:0 20px;padding: 20px; background-color: white;">
		<div class="col-md-12">
			 <?php
  $id=$_GET['id'];
  $jumlah=$_GET['jumlah'];
  $query=mysql_query("SELECT rute.id, rute.dari, rute.jam, rute.tujuan, rute.jamdat, rute.harga, rute.tanggal, maskapai.nama, maskapai.kode, maskapai.deskripsi from rute, maskapai where rute.idtransport = maskapai.id and rute.id='$id'");
  $row=mysql_fetch_array($query);
  ?>

  <div class="nggo" style="background-color:skyblue; padding: 100px 30px 30px 30px;">
    <div class="row">
      <div class="col-md-12">
        <h3><?php echo $row['dari'];?> <i class="fa fa-long-arrow-right"> </i> <?php echo $row['tujuan'];?></h3>
        <hr style="border:1px solid white;">
        <?php
        $jam = strtotime($row['jam']);
        $jamdat = strtotime($row['jamdat']);
        $lama = $jamdat-$jam;
        echo''.gmdate("H", $lama).' jam '.gmdate("i", $lama).' menit ';
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3 style="background-color: #02536e; color: white; padding:15px; width: 100%">Konfirmasi Pesanan</h3>
        <form action="pilihkursi.php" method="get">
        	<label>Nama Lengkap</label>
        	<input type="hidden" name="id" value="<?php echo $id ?>">
        	<input type="hidden" name="jumlah" value="<?php echo $jumlah ?>">
        	<input style="width: 100%; margin-bottom: 10px" type="text" name="nama_pemesan" placeholder="Nama Sesuai KTP" class="data" style="border-radius: 0px" required>
        	<label>Email</label>
        	<input style="width: 100%; margin-bottom: 10px; padding: 10px" type="email" name="email_pemesan" placeholder="Email" class="data" style="border-radius: 0px" required>
        	<label>Telepon</label>
        	<input style="width: 100%; margin-bottom: 10px" type="text" name="telepon_pemesan" placeholder="Telepon" class="data" style="border-radius: 0px" required>
        	<label>Alamat</label>
        	<input style="width: 100%; margin-bottom: 10px" type="text" name="alamat_pemesan" placeholder="Alamat" class="data" style="border-radius: 0px" required>
        
      </div>


    </div>
    <div class="row" >
      <?php
      for ($jum=1;$jum<=$jumlah;$jum++){
        ?>
        <div class="col-md-6" style="margin-bottom: 300px;">
          <h3 style="background-color: #02536e; color: white; padding:15px;">Data Penumpang</h3>
          <form>
            <label>Title</label>
            <select class="data">
              <option>Tuan</option>
              <option>Nyonya</option>
              <option>Nona</option>
            </select class="data">
            <label>Nama Lengkap</label>
            <input type="text" class="data" name="" placeholder="Nama lengkap">
            <input type="text" name="nama_penumpang<?php echo $j ?>" placeholder="Nama sesuai KTP" class="data" style="border-radius: 0px;">
          </form>
        </div>
        <?php
      }
      ?>
    </div>
    <div class="row">
      <div class="col-md-12 text-right" >
        <?php echo'<a style="padding: 12px;color: white;border-radius: 10px; background-color: dodgerblue;">Pesan</a>'?>
      </div>

    </div>
    <br><br><br>
    <div class="row">
      <form>
        <?php for ($td=1;$td<=$row['seat'];$td++){ ?>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $td++; ?>" />
        </div>
        <?php }?>
      </form>
    </div>
		</div>
	</div>	
				</div>
				<div class="clearfix"> 
				</div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						

					</div>	
					<div class="tab-1 resp-tab-content multicity">
						
						<form action="#" method="post">
							<div class="from">
								<h3>From</h3>
								<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
							</div>
							<div class="to">
								<h3>To</h3>
								<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input class="date" id="datepicker3" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
									</span>
								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Premium Economy</option>   
									<option value="null">Business</option>   
									<option value="null">First class</option>   						
								</select>
							</div>
							<div class="clear"></div>
							<div id="loadMore">Add City+</div>
							<div id="showLess">Remove</div>
						</form>

					</div>						
				</div>
			</div>
		</div>
		<div class="footer-w3l">
			<p class="agileinfo"> &copy; 2018 Travelina . All Rights Reserved</p>
		</div>
		<!--script for portfolio-->
		<script src="js/jquery.min.js"> </script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!--//script for portfolio-->
		<!-- Calendar -->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
			});
		</script>
		<!-- //Calendar -->
		<!--quantity-->
		<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
		</script>
		<!--//quantity-->
		<!--load more-->
		<script>
			$(document).ready(function () {
				size_li = $("#myList li").size();
				x=1;
				$('#myList li:lt('+x+')').show();
				$('#loadMore').click(function () {
					x= (x+1 <= size_li) ? x+1 : size_li;
					$('#myList li:lt('+x+')').show();
				});
				$('#showLess').click(function () {
					x=(x-1<0) ? 1 : x-1;
					$('#myList li').not(':lt('+x+')').hide();
				});
			});
		</script>
		<!-- //load-more -->



	</body>
	</html>