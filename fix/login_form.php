<?php
$page = $_GET['page'];
session_start();
if(isset($_POST['Login'])){
if (($_POST['user']=="")OR($_POST['pass']=="")){
echo "Data tidak boleh kosong";
exit;
}	

include "koneksi.php";
$sql = "SELECT * FROM table_admin WHERE user = '".$_POST['user']."';";
$banyak = mysql_query($sql);
$data = mysql_fetch_array($banyak);
$user = $data['user'];
$pass = $data['pass'];
if (($_POST['user']==$user)and($_POST['pass']==$pass)){
$_SESSION['nama'] = $user;
$_SESSION['login'] = 1;
} else {
	echo "User / password salah";
}
if((isset($_SESSION['login'])) and
($_SESSION['login']==1)){ if ($page == 1){
header("location: index.php");
exit();
}else if ($page == 2){
header("location: koleksi_buku.php");
exit();
}else if ($page == 2){
header("location: admin.php");
exit(); 
} } }
?>

<html><head>
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css"/> </head>
<body> <div id="wrapper">  <div id="header">
<h1>PERPUSTAKAANKU</h1>
Koleksi Buku-Buku Pribadiku.</div> <div id="menubar">
<table><tr>
<td><a href="index.php">Home</a></td>
<td> ||| </td> <td><a href="koleksi_buku.php">Koleksi Buku </a></td>
<td> ||| </td> <td><a href="admin.php">Admin</a></td> <td> ||| </td>
</tr></table></div>
<div id="body2"><center> <h1>Konfirmasi Keamanan</h1>
<form name="update" method="POST" action=""> <table><tr>
<td>Username</td><td><input type="text" name="user" value="" /></td></tr>
<tr> <td>Password</td><td><input type="text" name="pass" value="" /></td></tr>
<tr> <td></td><td><input type="submit" name="Login" value="Login" /></td> </tr>
</table> </form> </center> </div>
<div id="footer"> <center> <h1>Kontak</h1>
Hub. XXXX upj.ac.id </center> </div> </div>
</body> </html>