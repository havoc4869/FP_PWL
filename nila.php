<!DOCTYPE html>
<html>
<head>
	<title>PT Aruna Wijaya Sakti</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootshape.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
    <?php
        include 'SignInUp.php';
        include 'sliderku.php';
        include 'navigasi.php';
    ?>

	<div class="container_Utama">
		<div class="col-sm-9" style="background-color: #CEEAFF;">
		<div style="margin:0 30px 0 30px">
<p><img src="img/nila.jpg" alt height="60%" width="60%" style="float:center;margin:8px 4px 4px 8px;
border-radius: 10px;"></p>
<h2>Klasifikasi dan Morfologi Ikan Nila</h2>
<ol style="margin:4px 0 0 15px">
	<li>Klasifikasi</li>
		<ul style="margin:5px 0 5px 20px;">
			<li>Kingdom : Animalia</li>
			<li>Filum : Chordata</li>
			<li>Subfilum : Vertebrata</li>
			<li>kelas : Osteichyes</li>
			<li>Subkelas : Acanthopterygii</li>
			<li>Subordo : Percoidae</li>
			<li>Ordo : Percomorphi</li>
			<li>Subordo : Dendrobrachiata</li>
			<li>Family : Cichlidae</li>
			<li>Genus : Oreochromis</li>
			<li>Spesies : Oreochromis nilaticus</li>
		</ul>
	<li>Morfologi</li>
	<p style="text-align:justify;"> &nbsp &nbsp&nbsp Ikan nila dapat di morfologikan berdasarkan  bentuk fisiologis yaitu memiliki bentuk tubuh bulat pipih, pungung agak tinggi, badan, sirip ekor dan sirip punggung terdapat garis lurus memanjang. Ikan ini memiliki lima buah sirip yaitu sirip punggung, sirip data, sirip perut, sirip anal dan sirip ekor.  Dengan adanya sirip tersebut sangat membantu pergerakan ikan nila semakin cepat di perairan air tawar.</p>
	
	<p style="text-align:justify;"> &nbsp &nbsp&nbsp Selain itu, tanda lainnya yang dapat dilihat dari ikan nila adalah memiliki warna tubuh hitam dan agak keputihan. Bagian tubuh insang bewarna putih, sedangkan ikan lokal memiliki warna kekuninang.  Sisik ikan nila memiliki ukuran besar, kasar dan tersusun dengan rapi. Bagian kepala pada ikan ini memiliki ukuran relatif kecil dibandingkan dengan mulut yang berada pada bagian ujung kepala serta memiliki mata yang besar.
	
	</p>
	<li>Keunggulan
		<ul style="margin:1px 0 0 30px;">
			<li>Pertumbuhan lebih cepat dan mudah dikembangbiakan</li>
			<li>Dapat dilakukan pemijahan setelah umur 5-6 bulan</li>
			<li>Setelah 1 – 1,5  bulan, dapat dipijah kembali</li>
			<li>Mempunyai keturunan jantan dominann</li>
			<li>Nilai ekonomis relatif jauh lebih tinggi</li>
			<li>Bagian tubuh dapat dimanfaatkan dibeberapa bidang</li>
		</ul>
	</li>
		
</ol>
<a href="order.php" target="_blank" class="pesansekarang">ORDER</a>
		</div>
		<?php
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