<?php
$connect = mysql_connect('localhost', 'root', '') or die("GAGAL KONEKSI");
$db = mysql_select_db('tes_6', $connect) or die("GAGAL SAMBUNG DB");
?>	