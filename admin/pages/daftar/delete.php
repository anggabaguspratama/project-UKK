<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from users where id_user='$_GET[id_user]'");
 header('location:index.php');

?>