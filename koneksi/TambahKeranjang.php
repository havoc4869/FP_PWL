<?php 

require_once("koneksi.php");
mysql_query("INSERT INTO `order`(`kode_produk`, `id_customer`, `jumlah`, `harga_bayar`, `tgl_bayar`) VALUES ('".$_POST['kode_produk']."','".$_POST['id_customer']."','".$_POST['jumlah']."','".$_POST['harga_bayar']."','".$_POST['tgl_bayar']."')");
	?>

<script type="text/javascript">
	alert("Keranjang ditambahkan");
	window.location = '../checkout.php';

</script>
