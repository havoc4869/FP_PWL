<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="order.css">
    <link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
	 <?php
        include 'SignInUp.php';
        include 'sliderku.php';
        include 'navigasi.php';
    ?>

    <div class="container_Utama">
    	<div class="col-sm-9" style="background-color:#CEEAFF ;">
    		<div >
    			<a href="#"> 
    				<img src="img/cart.png" style="height: 6%;width: 6%;float: right;">
    				<span id="tampilHarga" style="float: right;">Rp 0</span> <br>
    				<span id="tampilJumlah" style="float: right;"> 0 </span> <br><br><br>
    			</a>
    		</div>
    		<div class="produk">

    			<table border="2">
    				<tr>
    					<th>Produk</th>
    				</tr>
    				<tr>
    					<td>Udang</td>
    				</tr>
    				<tr>
    					<td>Ikan Nila</td>
    				</tr>
    				<tr>
    					<td>Ikan Kakap</td>
    				</tr>
    				<tr>
    					<td>Ikan Bandeng</td>
    				</tr>
    				
    			</table>

    			<img src="img/udang.jpg" style="width: 50%;height: 30%;margin-left: 20%">
    			<button>Beli Sekarang</button>
    		</div>
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