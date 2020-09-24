<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//KONEKSI KE DATABASE
$server="103.247.9.198";
$user="ilmb3238_ilman30";
$pass="lopoj123";
$database="ilmb3238_ilman30";
$koneksi=mysql_connect($server,$user,$pass) or die ("MYSQL ERROR");
$pilihdb=mysql_select_db($database) or die ("Database Not Found");
?>