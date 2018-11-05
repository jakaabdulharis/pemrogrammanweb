<html><head>
<title>Home</title>
<link href="style.css" rel="stylesheet" type="text/css"/> </head>
<body>
<div id="wrapper"><div id="header">
<h1>PERPUSTAKAANKU</h1>
Koleksi Buku-Buku Pribadiku.</div>
<div id="menubar">
<table><tr>
<td><a href="index.php">Home</a></td>
<td> ||| </td>
<td><a href="koleksi_buku.php">Koleksi
Buku</a></td><td> ||| </td>
<td><a href="admin.php">Admin</a></td>
<td> ||| </td><td>
<?php
session_start();
if(isset($_SESSION['login'])){
?>
<a href="logout.php">Logout</a>
<?php
	} else {
?>
<a href = 'login_form.php?page=1'> Login </a></td>
<?php
}
?>

</td>
<td>&nbsp;</td>
</tr>
</table>
</div>
<div id="body">
<h1>SELAMAT DATANG!</h1>
Selamat berkunjung di perpustakaanku.
</div>
<div id="sidebar">
<h1>Cari Buku!</h1>
<form id="cari" name="cari" method="POST" action=
"cari.php">
<select name="point">
<option value="judul">Judul</option>
<option value="pengarang">Pengarang</option>
<option value="penerbit">Penerbit</option>
</select>
<input type="text" name="cari_buku" value="" />
<input type="submit" name="Buton" value="Cari" />
</form>
</div>
<div id="footer">
<center>
<h1>Kontak</h1>
Hub. XXXX upj.ac.id </center>
</div>
</div>
</body>
</html>
 