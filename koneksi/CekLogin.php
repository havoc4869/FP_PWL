<?php
	if(!isset($_COOKIE['nama'])){
		?>
			<script type="text/javascript">
				alert("Anda telah Keluar, Silahkan Masuk Kembali");
				window.location = 'index.php';
			</script>
		<?php
	}
?>