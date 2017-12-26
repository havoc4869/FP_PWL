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
									<tr class="rem1">
										<form method="post" onSubmit="return validasi()">
										<td class="invert-closeb">
											<input type="submit" class="btn" value="Delete" name="delete">
										</td>
										<td class="invert"> <?php echo $data1['nama_produk']; ?> </td>
										<td class="invert"> <?php echo $data1['jumlah']; ?></td>
										<td class="invert">Rp<?php echo $data1['harga_bayar']; ?></td>
										<td class="invert"> <?php echo $data1['status']; ?> </td>
									<?php
										}
									?>

										</form>
									</tr>

							</table>
						</div>
						<div class="checkout-left">	
								<div class="description">
										<a href="orderudang.php">
										<input type="submit" value ="Kembali Belanja" class = "bton bton2">
										</a>
										<a href="pesanan.php">
										<input type="submit" value="Beli Sekarang" class = "bton bton2">
										</a>

								<div class="checkout-left-basket animated wow slideInLeft" >
									<h4>Total Harga</h4>
									<ul>
								<?php
									$ambil_produk = mysql_query("SELECT pl.id_barang, kuantitas, nama, harga, id_keranjang
													FROM tb_barang pl
													JOIN tb_keranjang pn ON pl.id_barang = pn.id_barang WHERE STATUS='keranjang' && id_pembeli='$id_pembeli1'");
									while($data = mysql_fetch_array($ambil_produk)){
								?>
										<li><?=$data['2'];?> <i></i> <span>Rp<?=$data['3']*$data['1'];?></span></li>
								<?php
											}
									$total = mysql_fetch_array(mysql_query("SELECT pl.id_barang, sum(harga*kuantitas) as hargatotal
													FROM tb_barang pl
													JOIN tb_keranjang pn ON pl.id_barang = pn.id_barang WHERE STATUS='keranjang' && id_pembeli='$id_pembeli1'"));
									?>
									<hr>
									<li>Total <i></i> <span>Rp<?=$total['1'];?></span></li>
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