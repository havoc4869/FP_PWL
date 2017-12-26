<?php
include 'koneksi/CekLogin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="order.css">
    <link rel="stylesheet" type="text/css" href="logincss.css">
	<link rel="stylesheet" type="text/css" href="csshome.css">
	<link rel="stylesheet" type="text/css" href="cssorder.css">
</head>
<body>
	 <?php
        include 'SignInUp.php';
        include 'sliderku.php';
        include 'navigasi.php';
    ?>

    <div class="container_Utama">
    	<div class="col-sm-9">
		
						<div id="horizontalTab" style="display: block; width: auto; margin-top: 50px; ">
							<ul class="resp-tabs-list">
								<a href="?page=orderudang"><li class="resp-tab-item"><span>Udang</span></li> </a>
								<a href="?page=ordernila"><li class="resp-tab-item" ><span>Nila</span></li> </a>
								<a href="?page=orderkakap"><li class="resp-tab-item" ><span>Kakap</span></li> </a>
								<a href="?page=orderbandeng"><li class="resp-tab-item" ><span>Bandeng</span></li> </a>
							</ul>
							<?php

							$page= @$_REQUEST['page'];
							if ($page=="orderudang") {
								if(file_exists ("orderudang.php")) {
									include "orderudang.php";
								}
								else {
									echo "FILE TIDAK ADA";
								}
							}

							// bla bla bla bla .. gua bingung jelasinnya 

							elseif ($page=="ordernila") {
								if(file_exists ("ordernila.php")) {
									include "ordernila.php";
								}
								else {
									echo "FILE TIDAK ADA";
								}
							}
							
							elseif ($page=="orderkakap") {
								if(file_exists ("orderkakap.php")) {
									include "orderkakap.php";
								}
								else {
									echo "FILE TIDAK ADA";
								}
							}
							elseif ($page=="orderbandeng") {
								if(file_exists ("orderbandeng.php")) {
									include "orderbandeng.php";
								}
								else {
									echo "FILE TIDAK ADA";
								}
							}
							
							?>

						
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

