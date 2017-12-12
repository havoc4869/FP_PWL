<?php

 //Mendefinisikan Konstanta

$databasetype = 'mysql';
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'udang';
 
 //membuat koneksi dengan database
mysql_connect($server,$user,$password) or die(mysql_error());
mysql_select_db($database);
 ?>