<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$jam   = $_POST['jam'];
$jamdat   = $_POST['jamdat'];
$dari   = $_POST['dari'];
$tujuan  = $_POST['tujuan'];
$harga   = $_POST['harga'];
$idtransport   = $_POST['idtransport'];
mysql_query("INSERT INTO rute(id,jam,jamdat,dari,tujuan,harga,idtransport)
VALUE('$id','$jam','$jamdat','$dari','$tujuan','$harga','$idtransport')")or die(mysql_error());
header('location:index.php');
?>