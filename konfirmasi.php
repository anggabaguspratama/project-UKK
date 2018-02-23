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
	<div class="row" style="margin:0 20px;padding: 5px; background-color: orange;">
		<div class="col-md-12" style="font-size: 24px; color: white;">
			<h3 style="background-color: orange; color: white; padding:15px;">Konfirmasi Pesanan</h3>
		</div>
	</div>
	<div class="row" style="margin:0 20px;padding: 20px; background-color: white;">
		
		<div class="row">
			<div class="col-md-6">
				<table>
					<?php
					$id=$_GET['id'];
					$jumlah=$_GET['jumlah'];
					$query=mysql_query("SELECT rute.id, rute.dari, rute.jam, rute.tujuan, rute.jamdat, rute.harga, rute.tanggal, maskapai.nama, maskapai.kode, maskapai.deskripsi from rute, maskapai where rute.idtransport = maskapai.id and rute.id='$id'");?>
					<?php 
					while ($row=mysql_fetch_array($query)) 
						{?>
							<tr>
								<td>Dari</td>
								<td>: <?php	echo $row ['dari'];?></td>
							</tr>
							<tr>
								<td>Tujuan</td>
								<td>: <?php	echo $row ['tujuan'];?></td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td>: <?php	echo $row ['tanggal'];?></td>
							</tr>
							<tr>
								<td>Jam Berangkat</td>
								<td>: <?php	echo $row ['jam'];?></td>
							</tr>
							<tr>
								<td>Jam Datang</td>
								<td>: <?php	echo $row ['jamdat'];?></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td>: Rp. <?php	echo $row ['harga'];?></td>
							</tr>
							<tr>
								<td>Nama Pesawat</td>
								<td>: <?php	echo $row ['nama'];?></td>
							</tr>
							<tr>
								<td>Jumlah Kursi</td>
								<td>: <?php	echo $jumlah;?></td>
							</tr>



							<?php
						}

						?>
					</table><br>
					<div class="col-md-2 col-lg-2" >
						<?php echo'<a class="but" href="input.php?id='.$id.'&jumlah='.$jumlah.'" style="padding: 8px;color: white; background-color: orange;" >Lanjut</a>'?>
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"> 
		</div>	
		<div class="resp-tabs-container">
			<div class="tab-1 resp-tab-content roundtrip">


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