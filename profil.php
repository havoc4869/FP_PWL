<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="order.css">
    <link rel="stylesheet" type="text/css" href="logincss.css">
	<link rel="stylesheet" type="text/css" href="profil.css">
</head>
<body>
	 <?php
        include 'SignInUp.php';
        include 'sliderku.php';
        include 'navigasi.php';
    ?>
<div>	

	<div class="col-sm-9" style="background-color:#CEEAFF ;">
		<form action="koneksi/getdata.php" method="post">
		<div id="profil">	
				<h2 style="text-align: center; padding-bottom:15px"> There're Your FUCKIN Profile</h2>
				<div class="profildalam">
					<label><b>Nama Lengkap</b></label><br><input type="text" name="nama"><br>
					<label><b>No Telepon</b></label><br><input type="text" name="telp"><br>
					<label><b> Email </b></label><br><input type="Email" name="email"><br>
					<label><b> Alamat </b></label><br><textarea name="alamat" rows="5" cols="86.5" wrap></textarea><br>
					<label><b>Password</b><br></label><input type="Password" name="psw"><br>
					<label><b>Confirm Your Password</b><br></label><input type="Password" name="psw"><br>
					<input name="submit" type="submit" class="reg" value="Update Your FUCKIN Profile">
				</div>
			</div>
		</form>
	</div>

	<?php
            include 'BagianKanan.php';
        ?>
    </div>

    <?php
    	include 'Footer.php';
    ?>
</body>
</html>