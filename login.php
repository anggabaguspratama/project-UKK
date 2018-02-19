<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
	header ("location:admin/index.php");
}
?>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/tambahan.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
	
	input[type="text"]{
		padding:0px !important;
		width:100%;
		float:left;
	}
</style>
</head>
<body>
	<div id="login">
		<form method="post" name="login" action="cek_login.php">
			<table border=0 align="center" cellpadding=5 cellspacing=0>
				<tr>
					<td colspan=3><center><font size=5>LOGIN</font></center></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="LOGIN"></td>
				</tr>
				<tr>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>