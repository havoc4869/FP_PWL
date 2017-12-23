<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" type="text/css" href="logincss.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div>
    <ul class="top">
        <li><a href="index.php">
            <img src="img/logo/Logo.png" style="height: 45px; margin-left: 10px; margin-top: -12px; ">
        </a></li>

        <li style="float: right;"><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign In</a></li>
            <div id="id01" class="modalo">
                <form class="modal-conten animate" action="koneksi/login.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>
                        <img src="img/logo/Logo.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="isi">
                        <label><b>Email</b></label>
                        <input type="Email" placeholder="Enter Email" name="email">
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw">
                        <button class="button1" type="submit">Login</button>
                        <input type="checkbox" checked="checked"> Remember me
                    </div>

                    <div class="isi" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="button1 cancelbtn1">Cancel</button>
               
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

        <li style="float: right; color: #ffffff; display: inline-block; text-align: center;padding: 24px 0px;">Sudah Punya Akun ?</li>        
    </ul>
    </div>
	<div class="head">
		<a href="index.php"> <p style="font-family: Matura MT Script Capitals ; font-size: 20px ; color: #000066"> PT. Aruna Wijaya Sakti </p> </a>
		<p style="font-family: Times New Roman ; font-size: 20px; font-weight: bold; padding-top: 20px;"> Daftar Jadi Member Kami</p>
	</div>
	<div class="Tombol">
		<a href="SignUp.php?page=personal" onclick="document.getElementById('personal')" style="width:auto;"><button class="tomb1">  Personal </button></a>

		<a href="SignUp.php?page=perusahaan" onclick="document.getElementById('perusahaan')" style="width:auto;"><button class="tomb2">  Perusahaan </button></a>
	</div>
	
</body>
</html>

	<?php

		if (isset($_GET['page']) && $_GET['page'] !="") {
			$page = "";
			switch ($_GET['page']) {
				case 'perusahaan':
					include "perusahaan.php";
					break;
				
				default:
					include "personal.php";
					break;
			}
		}
		else{
			include "personal.php";
		} 
		
	?>