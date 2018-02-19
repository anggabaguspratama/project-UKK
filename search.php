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
