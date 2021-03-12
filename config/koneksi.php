<?php
error_reporting(0); //hide smeua error di aplikasi
require "parser-php-version.php";
$server = "localhost";
$username = "root";
$password = "";
$database = "c45_penjualan";

mysql_connect($server,$username,$password) or die ("Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>