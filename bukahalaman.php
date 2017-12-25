<?php

error_reporting(~E_NOTICE);

$page= @$_REQUEST['page'];
if ($page=="") {
	if(file_exists ("beranda.php")) {
		include "beranda.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}

// bla bla bla bla .. gua bingung jelasinnya 

elseif ($page=="beranda") {
	if(file_exists ("beranda.php")) {
		include "beranda.php";
	}
	else {
		echo "FILE HALAMAN UTAMA TIDAK ADA";
	}
}

// Untuk Memanggil Halaman Produk
elseif ($page=="bandeng") {
	if(file_exists ("bandeng.php")) {
		include "bandeng.php";
	}
	else {
		echo "FILE HALAMAN BANDENG TIDAK ADA";
	}
}
elseif ($page=="kakap") {
	if(file_exists ("kakap.php")) {
		include "kakap.php";
	}
	else {
		echo "FILE HALAMAN KAKAP TIDAK ADA";
	}
}
elseif ($page=="udang") {
	if(file_exists ("udang.php")) {
		include "udang.php";
	}
	else {
		echo "FILE HALAMAN UDANG TIDAK ADA";
	}
}
elseif ($page=="nila") {
	if(file_exists ("nila.php")) {
		include "nila.php";
	}
	else {
		echo "FILE HALAMAN NILA TIDAK ADA";
	}
}
elseif ($page=="order"){
	if (file_exists("order.php")) {
		include "order.php";
	}
	else{
		echo "FILE HALAMAN NILA TIDAK ADA";
	}
}
elseif ($page=="profil"){
	if (file_exists("profil.php")) {
		include "profil.php";
	}
	else{
		echo "FILE HALAMAN NILA TIDAK ADA";
	}
}
// Batas Pemanggilan Halaman Produk


?>