<?php
require_once ("koneksi.php");

$nama = $_POST['nama'];
$no_hp = $_POST['telp'];
$email =$_POST['email'];
$alamat = $_POST['alamat'];
$password = $_POST['psw'];

if(isset($_POST['update'])){
$query="update udang.customer set email = '".$email."', 
password = '".$password."', 
nama = '".$nama."', 
alamat = '".$alamat."', 
no_hp = '".$no_hp."' where email = '".$email."'";
	
$hasil=mysql_query($query) or die (mysql_error())
?>
<script type="text/javascript">
alert("data sukses diupdate");
window.location='../index.php';</script>
<?php 
}
else
	echo "s";
?>