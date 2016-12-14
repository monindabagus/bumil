<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bumil2";

/*$server = "sql206.byethost15.com";
$username = "b15_18278571";
$password = "16031990";
$database = "b15_18278571_maya";*/

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
