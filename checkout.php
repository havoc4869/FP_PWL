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
    require_once ("koneksi.php");
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
						<h3>Daftar Keranjang</h3>
						<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
							<table class="timetable_sub">
								<thead>
									<tr>
										<th>Hapus</th>
										<th>Barang</th>
										<th>Kuantitas</th>
										<th>Nama Barang</th>
										<th>Harga</th>
									</tr>
								</thead>
								<?php
									$ambil_produk = mysql_query("SELECT pl.id_barang, kuantitas, nama, harga
													FROM tb_barang pl
													JOIN tb_keranjang pn ON pl.id_barang = pn.id_barang WHERE STATUS='keranjang' && id_pembeli='$id_pembeli1'");
									while($data = mysql_fetch_array($ambil_produk)){
								?>
									<tr class="rem1">
										<form method="post" onSubmit="return validasi()">
										<td class="invert-closeb">
											<input onclick="changeurl()" type="submit" class="btn" value="Delete" name="delete">
										</td>
										<td class="invert-image"><a href="single.html"><img src="images/w4.png" alt=" " class="img-responsive" /></a></td>
										<td class="invert"><?=$data['1'];?></td>
										<td class="invert"><?=$data['2'];?></td>
										<td class="invert">Rp<?=$data['3'];?></td>
										</form>
									</tr>

									<?php
											}
									?>
							</table>
						</div>
						<div class="checkout-left">	
								<div class="description">
										<a href="./">
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