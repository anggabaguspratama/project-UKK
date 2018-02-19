 <?php ob_start();
include "koneksi.php";
$id_user   	=$_POST['id_user'];
$nama   = $_POST['nama'];
$username   = $_POST['username'];
$password  = $_POST['password'];

$query=mysql_query("UPDATE users set  nama='$nama', username='$username', password='$password' where id_user='$id_user'"); header('location:index.php'); ?>