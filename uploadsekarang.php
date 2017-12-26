<?php
include 'koneksi/CekLogin.php';
?>
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



//if (isset($_COOKIE['nama'])){
	
//	$sql = "SELECT * FROM customer WHERE id_customer='".$_COOKIE['id_customer']."'";
//	$result=mysql_query($sql);
//	$hasil = mysql_fetch_array($result);


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
		<div class="checkout">
			
			
			<div class="container">	
				<div class="col-md-3" ></div>
				<div class="col-md-6">
					<p style="margin-top: 12px; margin-bottom: 12px; color: gray;">Upload foto atau screenshot bukti transfer anda</p>

					<form class="form-horizontal" action="SaveFoto.php" method="post" enctype="multipart/form-data">
					   <input type="hidden" name="id_keranjang" value="<?php //echo isset($total[2])?$total[2]:''; ?>">
					   <input type="hidden" name="gambar_transfer" value="<?php //echo isset($total[3])?$total[3]:''; ?>">
						<div class="box-body">
		
							<div class="form-group">
								<label for="tiga" class="col-sm-2 control-label">Gambar</label>
								<div class="col-sm-6">
									<input type="file" accept="image/*" name="foto" class="form-control" id="foto" >
									<div id="image-holder">
									   <?php
										//if(isset($total[2]))
										//	echo "<img src='img/$total[3].'?rand='".rand()."' alt=''>";
										?>
									</div>
									<script>
										$("#foto").on('change', function () {

											//Get count of selected files
											var countFiles = $(this)[0].files.length;

											var imgPath = $(this)[0].value;
											var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
											var image_holder = $("#image-holder");
											image_holder.empty();

											var x = document.getElementById("foto");
											var file = x.files[0];

											if (extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "gif") {
												if (typeof (FileReader) != "undefined") {

													//loop for each file selected for uploaded.
													for (var i = 0; i < countFiles; i++) {

														var reader = new FileReader();
														reader.onload = function (e) {
															$("<img />", {
																"src": e.target.result,
																"class": "thumb-image"
															}).appendTo(image_holder);
														}

														
													}

												} else {
													alert("This browser does not support FileReader.");
												}
											} else {
												alert("hanya boleh foto bertype PNG, JPG dan GIF");
												var control = $("#foto");
												control.replaceWith(control.val('').clone(true));
											}
										});
									</script>
								</div>
							</div>
							<!--input image awal-->
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Kirimkan" name="<?php echo isset($_GET['id_keranjang'])?'upload':'upload'; ?>">
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
				<div class="col-md-3" ></div>
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

