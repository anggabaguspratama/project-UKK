<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from maskapai where id='$_GET[id]'");
 header('location:index.php');

?>