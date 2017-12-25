<?php

if (isset($_COOKIE['nama'])){
	$sql = "SELECT * FROM customer WHERE email='".$_COOKIE['email']."'";
	$result = mysql_query($sql);
	$sql = "SELECT * FROM customer WHERE id_customer='".$_COOKIE['id_customer']."'";
	$result=mysql_query($sql);
	$hasil = mysql_fetch_array($result);
?>

	<div class="col-sm-11" style="margin-left: 30px;">
		<form action="updatepersonal.php" method="post">
		<div id="profil">	
				<h2 style="text-align: center; padding-bottom:15px">My Profile</h2>
				<div class="profildalam">
					<label><b>Nama</b></label><br><input type="text" value="<?php echo $hasil['nama'];?>" name="nama" class="form-control"><br>
					<label><b>No Telepon</b></label><br><input type="text" value="<?php echo $hasil["no_hp"]; ?>" rows="15" class="form-control" name="telp"><br>
					<label><b> Email </b></label><br><input type="Email" value="<?php echo $hasil['email']; ?>" class="form-control" name="email">
					<input type="hidden" value="<?php echo $hasil['email']; ?>" class="form-control" name="emailLama"><br>
					<label><b> Alamat </b></label><br><textarea name="alamat" class="form-control" wrap><?php echo $hasil['alamat']; ?></textarea><br>
					<label><b>Password</b><br></label><input type="password" class="form-control" name="psw"><br>
					<label><b>Confirm Your Password</b><br></label><input class="form-control" type="Password" name="psw2"><br>
<?php
}
?>
					<input name="update" type="submit" id="update" class="btn btn-primary" style="float: right;" value="Update Your Profile">
				</div>
			</div>
		</form>
		<br>
		<br>
		<br>
		<br>
	</div>