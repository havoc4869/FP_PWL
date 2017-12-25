<?php
require_once ("koneksi/koneksi.php");

$nama = $_POST['nama'];
$no_hp = $_POST['telp'];
$email =$_POST['email'];
$emailLama =$_POST['emailLama'];
$alamat = $_POST['alamat'];
$password = $_POST['psw'];

if(isset($_POST['update'])){
$query="update customer set email = '".$email."', 
password = '".$password."', 
nama = '".$nama."', 
alamat = '".$alamat."', 
no_hp = '".$no_hp."' where email = '".$emailLama."'";
setcookie("nama", $nama, time()+3600);
$hasil=mysql_query($query) or die (mysql_error());
?>
<script type="text/javascript">
alert("data sukses diupdate");
window.location='index.php';</script>
<?php 
}
else
	echo "Failed";
?>