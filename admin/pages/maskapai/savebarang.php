<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$nama   = $_POST['nama'];
$kode   = $_POST['kode'];
$deskripsi  = $_POST['deskripsi'];
$seat   = $_POST['seat'];

mysql_query("INSERT INTO maskapai(id,nama,kode,deskripsi,seat)
VALUE('$id','$nama','$kode','$deskripsi','$seat')")or die(mysql_error());
header('location:index.php');
?>