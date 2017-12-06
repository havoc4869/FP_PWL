<!DOCTYPE html>
<html>
<head>
	<title>PT Aruna Wijaya Sakti</title>
	<link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="logincss.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootshape.css" rel="stylesheet">
</head>
<body class="bgUtama">


    <div>
    <ul class="top">
        <li><a href="#">
            <img src="img/logo/Logo.png" style="height: 45px; margin-left: 10px; margin-top: -12px; ">
        </a></li>
        <li style="float: right;"><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign In</a></li>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="/action_page.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>

        <li style="float: right;"><a href="#">Sign Up</a></li>        
    </ul>
    </div>
	
	<div id="slider"  class="container_Utama" style="height: 350px;">
	<figure>
	<img src="">
	<img src="img/Slider/slider1.jpg" alt>
	<img src="img/Slider/slider2.jpg" alt>
	<img src="img/Slider/slider3.jpg" alt>
	<img src="img/Slider/slider4.jpg" alt>
	<img src="img/Slider/slider5.jpg" alt>
	</base>
	</figure>
	</div>

    <div>
    <ul class="topnav">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Produk</a>
			<ul>
				<li><a href="udang.php">Udang</a></li>
				<li><a href="nila.php">Ikan Nila</a></li>
				<li><a href="kakap.php">Ikan Kakap</a></li>
				<li><a href="bandeng.php">Ikan Bandeng</a></li>
			</ul>
		</li>
        <li><a href="#c">Order</a></li>
        <li><a href="tentang.php">Tentang Kami</a></li>
        <li><a href="#">Hubungi Kami</a></li>
        <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">☰</a>
  </li>
    </ul>
    </div>


	<div class="container_Utama">
		<div class="col-sm-9" style="background-color: #CEEAFF;">
<p><img src="img/nila.jpg" height="60%" width="60%" style="float:center;margin:8px 4px 4px 8px;"></p>
<h2>Klasifikasi dan Morfologi Ikan Nila</h2>
<ol style="margin:4px 0 0 15px">
	<li>Klasifikasi</li>
	<table border="10px" style="margin: 5px 0 10px 0;">
	<tr>
		<td>
			<p>Kingdom : Animalia</p>
			<p>Filum : Chordata</p>
			<p>Subfilum : Vertebrata</p>
			<p>kelas : Osteichyes</p>
			<p>Subkelas : Acanthopterygii</p>
			</td><td></td><td></td><td>
			<p>Ordo : Percomorphi</p>
			<p>Subordo : Percoidae</p>
			<p>Family : Cichlidae</p>
			<p>Genus : Oreochromis</p>
			<p>Spesies : Oreochromis nilaticus</p>
		</td>
	</tr>
		</table>
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

		<div class="col-sm-3" style="background-color: #e5f3ff;">
			<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br>	aaaaaaaaaaaaaa
		</div>
	</div>
	<div class="container_Utama" style="background-color: black;">
	<div id="footer">
		<div class="kaki row-md-20">
        <div class="row">
            
            <div class="col-md-8" style="padding: 20px 40px 10px;">
                <h4 style="color: white">Butuh Bantuan ? Telepon 7276kali.<br><br>Atau Tulis disini</h4>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Komentar"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="float: right;">Kirim</button>

                            <button type="reset" class="btn btn-primary" style="float: right;  margin-right: 10px;">Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4" style="padding: 20px 40px 10px;">

                <hr>
                <p style="color: white">
                Jalan ringroad utara<br>
                alamat web menyusul
				</p>
                <hr>
                <a href="www.facebook.com"><img src="img/logo/fb.png" class="logo"></a>
                <a href="twitter.com"><img src="img/logo/twet.jpg" class="logo"></a>
                <a href="youtube.com"><img src="img/logo/you.jpg" class="logo"></a>
                <a href="https://plus.google.com"><img src="img/logo/gug.jpg" class="logo"></a>

            </div>
        </div>


    </div>
	</div>
	</div>
	

<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>
</body>
</html>