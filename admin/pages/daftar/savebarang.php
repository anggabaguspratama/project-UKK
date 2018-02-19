<?php ob_start();
include "koneksi.php";
$nama   = $_POST['nama'];
$username   = $_POST['username'];
$password  = $_POST['password'];

mysql_query("INSERT INTO users(nama,username,password)
VALUE('$nama','$username','$password')")or die(mysql_error());
header('location:index.php');
?>