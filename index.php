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
		<div class="col-sm-9" style="background-color: #CEEAFF;">

        <?php
            include 'bukahalaman.php';
        
            include 'TampilKomentar.php';
        ?>

        </div>

		<?php
            include 'BagianKanan.php';
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