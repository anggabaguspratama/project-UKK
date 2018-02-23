<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$nama   = $_POST['nama'];
$kode   = $_POST['kode'];
$deskripsi  = $_POST['deskripsi'];
$seat  = $_POST['seat'];
$logo   = $_POST['logo'];

$query=mysql_query("UPDATE MASKAPAI set  nama='$nama', kode='$kode', deskripsi='$deskripsi' , seat='$seat', logo='$logo' where id='$id'");
header('location:index.php');
?>