<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$jam   = $_POST['jam'];
$dari   = $_POST['dari'];
$tujuan  = $_POST['tujuan'];
$harga   = $_POST['harga'];

mysql_query("INSERT INTO rute(id,jam,dari,tujuan,harga)
VALUE('$id','$jam','$dari','$tujuan','$harga')")or die(mysql_error());
header('location:index.php');
?>