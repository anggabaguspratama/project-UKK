 <?php 
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("select * from maskapai where id='$id'");
?>
<html><head><title>Halaman Edit Data Barang</title><head><body>
<form action="editbarang.php" method="post">
<table border="0">
<?php
while($row=mysql_fetch_array($query)){
?>
<h2>Data Barang</h2>
<table><tr>
<td>Kode Barang</td>
<td>:
	<input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
	<input type="text" name="jam" value="<?php echo $row['jam'];?>" size="10"></td>
</tr>
<tr>
<td>Keberangkatan</td>
<td>: <input type="text" name="dari" value="<?php echo $row['dari'];?>"size="30"></td>
</tr>
<tr>
<td>Tujuan</td>
<td>: <input type="text" name="tujuan" value="<?php echo $row['tujuan'];?>"size="20"></td>
</tr>
<tr>
<td>Harga</td>
<td>: <input type="text" name="harga" value="<?php echo $row['harga'];?>"size="20"></td>
</tr>
<tr>
<td colspan=2><input type="submit" value="Update"></td>
</tr>
<?php } ?>
</table></form>

</body></html>