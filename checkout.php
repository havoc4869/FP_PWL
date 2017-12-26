<!DOCTYPE html>
<html>
<head>
	<title>PT Aruna Wijaya Sakti</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="logincss.css">
	<link rel="stylesheet" type="text/css" href="csshome.css">
	<link rel="stylesheet" type="text/css" href="klikorder.css">
	<link rel="stylesheet" type="text/css" href="cssorder.css">

<?php
    require_once ("koneksi/koneksi.php");
?>

</head>
<body style="background-color: #e5f3ff;">
    <?php
        include 'SignInUp.php';
        include 'sliderku.php';
        include 'navigasi.php';
    ?>

	<div class="container_Utama">
		<div class="col-sm-12" style="background-color: #CEEAFF;">
		<div class="col-sm-12">
		<div class="checkout">
					<div class="container">
						<h1 style="text-align: center; font-size: 50px;">Daftar Keranjang</h1>
						<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
							<table class="timetable_sub">
								<thead>
									<tr>
										<th>Hapus</th>
										<th>Nama Barang</th>
										<th>Kuantitas</th>
										<th>Harga</th>
										<th> Status </th>
									</tr>
								</thead>
								<?php
									$ambil_produk1 = mysql_query("SELECT * FROM orderpesanan o JOIN produk p ON o.kode_produk = p.kode_produk where o.id_customer = '".$_COOKIE['id_customer']."' and o.status = 'belum'");
									while( $data1 = mysql_fetch_array($ambil_produk1)) 
									{
								?>
									<tr class="rem1" >
										<td class="invert-closeb">
										<form method="post" action="koneksi/deleteOrder.php" onSubmit="return validasi()">

											<input type="submit" class="btn" value="Delete" name="delete">

											<input type="hidden" name="kode_produk" value="<?php echo $data1['kode_produk']; ?>">
											<input type="hidden" name="id_customer" value="<?php echo $_COOKIE['id_customer']; ?>">
											<input type="hidden" name="harga_bayar" value="<?php echo $data1['harga_bayar']; ?>">
											<input type="hidden" name="tgl_bayar" value="<?php echo $data1['tgl_bayar']; ?>">
										</form>

										</td>
										<td class="invert"> <?php echo $data1['nama_produk']; ?> </td>
										<td class="invert"> <?php echo $data1['jumlah']; ?></td>
										<td class="invert">Rp<?php echo $data1['harga_bayar']*$data1['jumlah']; ?></td>
										<td class="invert"> <?php echo $data1['status']; ?> </td>
									<?php
										}
									?>

									</tr>

							</table>
						</div>
						<div class="checkout-left">	
								<div class="description">
										<a href="order.php?page=orderudang">
										<input type="submit" value ="Kembali Belanja" class = "bton bton2">
										</a>
										<a href="beli.php">
										<input type="submit" value="Beli Sekarang" class = "bton bton2">
										</a>

								<div class="checkout-left-basket animated wow slideInLeft" >
									<h4>Total Harga</h4>
									<ul>
								<?php
									$total = mysql_query("SELECT sum(harga_bayar*jumlah) as value_sum FROM orderpesanan where id_customer = '".$_COOKIE['id_customer']."' and status = 'belum'");
									$row = mysql_fetch_assoc($total); 
									$sum = $row['value_sum'];
								?>
										
								<?php
											
									
									?>
									<span style="font-size: 24px; font-weight: bold;">Rp <?php echo "".$sum; ?></span></li>
									</ul>
								</div>
								</div>
							</div>
					</div>
				</div>
			</div>
       

        </div>

		<?php
           // include 'BagianKanan.php';
        ?>
        </div>
	
	   <?php
            include 'Footer.php';
        ?> 

<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>
</body>
</html>