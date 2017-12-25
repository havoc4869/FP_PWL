<?php
	extract($_POST);
	include 'koneksi.php';
	$con=mysqli_connect('localhost','root','','db_vasikan');
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


	session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
	if($_SESSION['status'] != "login"){
		header("location:indexlogin.php");
	}

if(isset($_POST['addKeranjang']))
{

    mysqli_query($con,"insert into tb_keranjang values('','".date('Y-m-d')."','keranjang','$kuantitas','','','".$_GET['id_barang']."','$id_pembeli')");
    echo "
    <script>
    location.assign('checkout.php');
    </script>
    ";
}

if(isset($_GET['id_barang']))
{
    $data=mysqli_fetch_row(mysqli_query($con,"select * from tb_barang where id_barang='".$_GET['id_barang']."'"));
    $id_penjual1=$data['8'];
    $data2=mysqli_fetch_row(mysqli_query($con,"select * from tb_penjual where id_penjual='$id_penjual1'"));
    $data3=mysqli_fetch_row(mysqli_query($con,"select * from tb_alamat where id_penjual='$id_penjual1'"));
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Vasikan - Temukan Ikan Hiasmu Dengan Harga Pas!!!</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>

<div class="navigasi">
		<div class="container">
			<nav>
				<ul>
					<li><a href="toko/">Jual</a></li>
					<li><a href="https://www.instagram.com/ufebri/?hl=id">Ikuti Kami</a></li> 

					<div class="top_nav_right">
						<ul style="float: right;">
							<li><a href="#">Notifikasi</a></li>
							<li><a href="logout.php"><span>Logout</span></a></li>
						</ul>
					</div>
				</ul>
			</nav>
		</div>
	</div>

<!-- header-bot -->
<?php
	include 'header.php';
?>
<!-- //header-bot -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-4 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul class="slides">
			<?php
                  $ambil_gambar = mysql_query("select * from tb_gambar where id_barang='".$_GET['id_barang']."'");
                  while($data5 = mysql_fetch_array($ambil_gambar)){
               ?>
						<li data-thumb="toko/image/<?=$data5['1'];?>">
							<div class="thumb-image"> <img src="toko/image/<?=$data5['nama_gambar'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>

			<?php
					}
				?>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
			<form method="post" onSubmit="return validasi()">
					<h3><?=ucwords(strtolower($data['1']));?></h3>
					<hr>
					<div class="col-md-6" style="margin-left: -10px">
						<h2>Rp<?=$data['4'];?></h2>
						<h4 style="margin-top: 6px;">Stock :  <?=$data['3'];?></h4>
					<div class="bootstrap-tab-text-grid" style="margin-top: 20px;">
							<div class="bootstrap-tab-text-grid-left">
									<img src="images/men3.jpg" alt=" " class="img-responsive">
							</div>
							<div class="bootstrap-tab-text-grid-right" >
								<ul>
									<li><a href="#"><?=ucwords(strtolower($data2['4']));?></a></li><br>
									<li><p>Dikirim dari <?=ucfirst($data3['2']);?></p></li>							
								</ul>
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Kuantitas :</h5>
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
								</div>
						</div>
						<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
					</div>
					<div class="description" style="margin-top: 12px;">
						<input type="hidden" name="kuantitas" value="1">
						<input type="hidden" name="id_pembeli" value="<?php echo isset($_SESSION['id_pembeli'])?$_SESSION['id_pembeli']:''; ?>">
						<input onclick="changeurl()" type="submit" class="btn btn-info" value="Beli Sekarang" name="addKeranjang">		
					</div>
				</div>
		</div>
				<div class="clearfix"> </div>

				<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; margin-top: 10px; padding: 10px; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Deskripsi</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<p><?=ucfirst($data['2']);?></p>
							</div>
							
						</div>
					</div>
				</div>
	</div>
</div>
<!-- //single -->
<!-- //product-nav -->

<!-- footer -->
<?php
	include 'footer.php';
	?>
<!-- //footer -->
</body>
</html>
