 <?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$jam   = $_POST['jam'];
$dari   = $_POST['dari'];
$tujuan  = $_POST['tujuan'];
$harga   = $_POST['harga'];

$query=mysql_query("UPDATE RUTE set jam='$jam', dari='$dari', tujuan='$tujuan', harga='$harga' where id='$id'");
header('location:index.php');
?>