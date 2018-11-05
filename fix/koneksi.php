<?php
$cnn = mysql_connect('localhost','root','');
if (!$cnn){
echo "Koneksi Gagal";
}
$dbs=mysql_select_db('perpus');

?>