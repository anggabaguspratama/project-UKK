<?php
include 'koneksi.php';
?>
<form action="cari.php" method="get">
  <label>Cari :</label>
  <input type="text" name="cari">
  <input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
  </tr>
  <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysql_query("select * from maskapai where nama like '%".$cari."%'");       
  }else{
    $data = mysql_query("select * from maskapai");   
  }
  $no = 1;
  while($d = mysql_fetch_array($data)){
  ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama']; ?></td>
  </tr>
  <?php } ?>
</table> 