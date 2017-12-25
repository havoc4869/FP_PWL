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

       <!-- check out -->
						<div class="checkout">
							<div class="container">	
									<div class="col-md-12 men-pro-item" >
										<div class="row">
										<div class="col-md-5" style="margin-top: 20px;">
										<H2 style="color: #FDA30E">Alamat Pengiriman</H2>
										</div>
										<div class="col-md-6">
										</div>
										<div class="col-md-3" style="margin-top: 20px;">	
										</div>
									</div>
									<hr>

									<?php
									//$data2=mysqli_fetch_row(mysqli_query($con,"select * from tb_pembeli where id_pembeli='$id_pembeli1'"));
									//$data=mysqli_fetch_row(mysqli_query($con,"select * from tb_alamat where id_pembeli='$id_pembeli1'"));
									?>
									<div class="row">
										<div class="col-md-3">
											<!-- <p style="padding-left: 22px; color: gray;"><? // =$data2['4'];?> 
												<br><? // =$data2['8'];?></p>-->
										</div>
										<div class="col-md-7">
											<!-- <p style="color: gray;"><? //=$data['4'];?>, <? //=$data['3'];?>, <? //=$data['2'];?>, <? //=$data['1'];?></p>
										--> </div>
										<div class="col-md-2">
											<a href="alamat.php">
												<input class="btn btn-info" type="submit" value="Ubah Alamat">
												</a>
										</div>
									</div>

									</div>

									<div class="col-md-12 men-pro-item" style="margin-top: 10px; ">
										<div class="row">
										<div class="col-md-5" style="margin-top: 20px;">
											<h2 style="padding-left: 22px; color: gray;">Produk yang dipesan</h25>
										</div>
									</div>
									<hr>

									<div class="col-md-12">
									<div class="row">
										<table class="table table-striped" >
											<thead>
												<tr>
													<th>Nama Barang</th>
													<th>Kurir</th>
													<th>Harga</th>
													<th>Jumlah</th>
													<th>Subtotal</th>
												</tr>
											</thead>
											<tbody>
									 <?php
											//$ambil_produk = mysql_query("SELECT pl.id_barang, nama, pengiriman, kuantitas, harga, (harga*kuantitas) as total
											//				FROM tb_barang pl
											//				JOIN tb_keranjang pn ON pl.id_barang = pn.id_barang WHERE STATUS='keranjang' && id_pembeli='$id_pembeli1'");
											//while($data = mysql_fetch_array($ambil_produk)){
										?>
											   <tr>
													<td><?//=$data['1'];?></td>
													<td><?//=$data['2'];?></td>
													<td>Rp<?//=$data['4'];?></td>
													<td><?//=$data['3'];?></td>
													<td style="color: #fda30e">Rp<?//=$data['5'];?></td>
											   </tr>
											<?php
												//	}
											?>
											</tbody>
										</table>
									</div>
									<hr>
									<div class="row">
										<?php
											//$total = mysql_fetch_array(mysql_query("SELECT pl.id_barang, sum(harga*kuantitas) as hargatotal
											//				FROM tb_barang pl
											//				JOIN tb_keranjang pn ON pl.id_barang = pn.id_barang WHERE STATUS='keranjang' && id_pembeli='$id_pembeli1'"));
											?>
										<div class="col-md-7">
										</div>
										<div class="col-md-3">
											<p style="color: gray;">Total pesanan (<?//=$hitung;?> barang)</p>
										</div>
										<div class="col-md-2">
											<H4 style="color: #FDA30E">Rp<?//=$total['1'];?></H4>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
											<p style="color: gray;">Metode Pembayaran</p>
										</div>
										<div class="col-md-5">
										</div>
										<div class="col-md-2">
											<p style="color: gray;">Bri Syariah</p>
										</div>
										<div class="col-md-2">
											<p style="color: gray;">6236387683</p>
										</div>
									</div>
									<br>
									<div class="row">
										<form method="post" onSubmit="return validasi()">
										<div class="col-md-3">
										</div>
										<div class="col-md-5">
										</div>
										<div class="col-md-2">
										</div>
										<div class="col-md-2">
											<a href="uploadbukti.php">
												<input class="btn btn-info" type="submit" value="Buat Pesanan" name="buatpesanan">
												</a>
										</div>
									</form>
									</div><br>

								</div>
						</div>	
						</div>
						</div>

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