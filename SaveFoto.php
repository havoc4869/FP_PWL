<?php
		$file_name = $_FILES['foto']['name'];
		$new_file_name=$file_name;
		$path= "struk/".$new_file_name;
if(!isset($foto))
{
if(copy($_FILES['foto']['tmp_name'], $path))
{
?>
	<script type="text/javascript">
				alert("Transaksi anda sedang di proses. Silahkan Tunggu");
				window.location = 'index.php';
			</script>
<?php
		
		require_once("koneksi/koneksi.php");
		mysql_query("UPDATE orderpesanan SET status='proses' where status='belum' and id_customer='".$_COOKIE['id_customer']."'");

}
else
{
echo "Error";
}
}

?>