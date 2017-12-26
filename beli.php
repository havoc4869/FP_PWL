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

if (isset($_COOKIE['nama'])){
	$sql = "SELECT * FROM customer WHERE email='".$_COOKIE['email']."'";
	$result = mysql_query($sql);
	$sql = "SELECT * FROM customer WHERE id_customer='".$_COOKIE['id_customer']."'";
	$result=mysql_query($sql);
	$hasil = mysql_fetch_array($result);


?>



</head>
<body style="background-color: #e5f3ff;"">
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
				<H1 style="text-align: center;font-size: 40px ;color: #000000">Data Pemesan</H1>
				<div class="col-md-12 men-pro-item" >
				<div class="row">
					<label style="padding-right: 5.6em ; padding-top: 1%"><b>Nama</b></label> <?php echo $hasil['nama'];?> <br> 
					<label style="padding-right: 3em ; padding-top: 1%"><b>No Telepon</b></label> <?php echo $hasil["no_hp"]; ?><br>
					<label style="padding-right: 5.86em ; padding-top: 1%"><b>Email</b></label><?php echo $hasil['email']; ?><br>
					<label style="padding-right: 5em ; padding-top: 1%"><b>Alamat</b></label> <?php echo $hasil['alamat']; ?>
				</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-3">
						<p style="padding-left: 22px; color: gray;"> 
						<br></p>
					</div>
					<div class="col-md-7">
						<p style="color: gray;"></p>
					</div>
				</div>
			</div>
<?php
}
?>

			<h1 style="text-align: center; font-size: 40px;">Rincian Pembelian</h1>
			<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Kuantitas</th>
							<th>Harga</th>
						</tr>
					</thead>
			<?php
				$ambil_produk1 = mysql_query("SELECT * FROM orderpesanan o JOIN produk p ON o.kode_produk = p.kode_produk where o.id_customer = '".$_COOKIE['id_customer']."' ");
				while( $data1 = mysql_fetch_array($ambil_produk1)) 
				{
			?>
						<tr class="rem1">
							<form method="post" onSubmit="return validasi()">	
								<td class="invert"> <?php echo $data1['nama_produk']; ?> </td>
								<td class="invert"> <?php echo $data1['jumlah']; ?></td>
								<td class="invert">Rp<?php echo $data1['harga_bayar']; ?></td>
			<?php
				}
			?>
							</form>
						</tr>
				</table>
			</div>

			<div class="col-md-4" style="padding-top: 3% ; text-align: center;">
				<input type="radio" name="bank" checked> Bank Mandiri <br> <img src="img/mandiri.png" style="height: 10% ; width: 40%">
			</div>
			<div class="col-md-4" style="padding-top: 3% ; text-align: center;">
				<input type="radio" name="bank"> Bank BRI <br> <img src="img/bri.png" style="height: 20% ; width: 20%">
			</div>
			<div class="col-md-4" style="padding-top: 3% ; text-align: center;">
				<input type="radio" name="bank"> Bank BNI <br> <img src="img/bni.png" style="height: 20% ; width: 40%">
			</div>

		</div>
		</div>
		
		<div class="checkout-left">	
			<div class="description">
				<a href="beli.php">
					<input type="submit" value="Beli Sekarang" class = "bton bton2">
				</a>
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