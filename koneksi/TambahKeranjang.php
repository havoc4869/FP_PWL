<?php 

require_once("koneksi.php");
mysql_query("INSERT INTO orderpesanan(kode_produk, id_customer, jumlah, harga_bayar, tgl_bayar, status) VALUES ('".$_POST['kode_produk']."','".$_POST['id_customer']."','".$_POST['jumlah']."','".$_POST['harga_bayar']."','".$_POST['tgl_bayar']."', 'belum')");
	?>

<script type="text/javascript">
	alert("Keranjang ditambahkan");
	window.location = '../checkout.php';

</script>
