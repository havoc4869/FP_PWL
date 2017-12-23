	<?php
session_start();
require_once ("koneksi.php");
// username and password sent from form
$myusername=$_POST['email'];
$mypassword= $_POST['psw'];
if(isset($myusername) or isset($mypassword))
{
if($myusername == "" or $mypassword== "")
{?>
 <script type="text/javascript">
alert("LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK BOLEH KOSONG");
window.location = '../index.php';
</script>
<?php
}
}
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM customer WHERE email='".$myusername."' And password='".$mypassword."'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
$_SESSION['user']=$myusername;
$_SESSION['pass']=$mypassword;
?>
<script language="JavaScript">alert('Selamat, Login Anda Sukses!!');
document.location='../index.php'</script> <?php
}
else{
?>
<script type="text/javascript">
alert("LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK DITEMUKAN");
window.location = '../index.php';
</script>
<?php
}
?>