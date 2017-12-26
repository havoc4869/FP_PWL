<?php

	require_once("koneksi/koneksi.php");
	$query = mysql_query("SELECT * FROM produk where nama_produk='udang'");
	$produk = mysql_fetch_array($query);
	date_default_timezone_set("Asia/Jakarta");
?>

<div class="col-sm-12" style="margin:15px 25px 15px 20px">

	
					<h3>UDANG</h3>
					<hr>
					<div class="col-sm-9" >
						<div class="bootstrap-tab-text-grid-left">
									<img src="img/udang.jpg" alt=" " class="imgr">
							</div>
						
						<div class="bootstrap-tab-text-grid" style="margin-top: 20px;">
							
							
							<div class="clearfix"> </div>
					</div>
					</div>
					<div class="col-sm-3">
					<div class="color-quality">
						<div class="color-quality-right">
						<h2>Rp <?php echo $produk['harga_produk']?> </h2>
						<h4 style="margin-top: 6px;">Stock :</h4>
						<a href="index.php?page=udang"> <button class="bton bton2">INFO</button> </a>
						
						
							<h5>Kuantitas :</h5>
							 <div class="quantity"> 
								<div class="quantity-select">
								    <input style="background-color: white; color: black" class="value-minus" type="button" value="-" id="moins" onclick="minus()">
								    <input class="value" type="text" size="25" value="1" id="count" name="jumlah">
								    <input style="background-color: white; color: black" class="value-plus" type="button" value="+" id="plus" onclick="plus()">
								</div>
							
								</div>
							</div>
						
					</div>
					<form action="koneksi/TambahKeranjang.php" method="post">
					<div class="description" style="margin-top: 12px;">
						<input type="hidden" name="id_customer" value="<?php echo $_COOKIE['id_customer']; ?>">
						<input type="hidden" name="jumlah" id="count2" value="1">
						<input type="hidden" name="kode_produk" value="<?php echo $produk['kode_produk']; ?>">
						<input type="hidden" name="tgl_bayar" value="<?php echo date("Y-m-d H:i:s"); ?>">
						<input type="hidden" name="harga_bayar" value="<?php echo $produk['harga_produk']; ?>">
						<input type="submit" class="bton bton2" value="Add Cart" name="addKeranjang">		
						
					</div>
					</form>
				</div>
		</div>
<script>	
							    var count = 1;
							    var countEl = document.getElementById("count");
							    var countE2 = document.getElementById("count2");
							    function plus(){
							        count++;
							        countEl.value = count;
							        countE2.value = count;
							    }
							    function minus(){
							      if (count > 1) {
							        count--;
							        countEl.value = count;
							        countE2.value = count;
							      }  
							    }
						</script>