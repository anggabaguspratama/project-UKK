<?php
include 'admin/pages/rute/koneksi.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flight Ticket Booking a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tambahan.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
</head>
<body>
	<h1>Flight Ticket Booking</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Booking Ticket</span></li>				
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						 <?php
include 'admin/pages/rute/koneksi.php'
?>
<table border="0">
	<style type="text/css">
		
		td{
		 padding: 20px 30px;
		}
	</style>

<?php 
if(isset($_GET['carikeberangkatan'])){
  $carikeberangkatan = $_GET['carikeberangkatan'];
  $caritujuan = $_GET['caritujuan'];
  $data = mysql_query("select * from rute, maskapai where rute.dari like '".$carikeberangkatan."' and rute.tujuan like '".$caritujuan."' and rute.idtransport = maskapai.id order by rute.harga");
  while($var = mysql_fetch_array($data)){
 ?>
 <tr>
 	<td><?php echo $var['nama']; ?></td>
 	<td><?php echo $var['dari']; ?></td>
 	<td><?php echo $var['tujuan']; ?></td>
 	<td><?php echo $var['jam']; ?></td>
 	<td>Rp. <?php echo $var['harga']; ?></td>
 	<td><?php echo "<a href= 'pesan.php?id=$var[id]'>pesan</a>"?></td>
 </tr>
 <?php } ?>
</table>
<?php
}
?>
					
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
		<p class="agileinfo"> &copy; 2016 Flight Ticket Booking . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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