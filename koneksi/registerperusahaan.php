<?php
require_once ("koneksi.php");

$nama = $_POST['nama'];
$no_hp = $_POST['telp'];
$email =$_POST['email'];
$alamat = $_POST['alamat'];
$password = $_POST['psw'];

if(isset($_POST['submit'])){
$query = "insert into customer 
(email,password,nama,alamat,no_hp,status) values 
('".$email."',
'".$password."',
'".$nama."',
'".$alamat."',
'".$no_hp."','perusahaan')";

$hasil=mysql_query($query) or die (mysql_error())
?>
<script type="text/javascript">
alert("data sukses ditambahkan");
window.location='../index.php';</script>
<?php 
}
else
	echo "s";
?>