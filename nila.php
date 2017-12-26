<div class ="col-sm-12" style="padding:25px 15px 50px 20px">
<p><img src="img/nila.jpg" class="gambarloren"></p>
<h2>Klasifikasi dan Morfologi Ikan Nila</h2>
<ol style="margin:4px 0 0 15px">
	<li>Klasifikasi</li>
		<ul style="margin:5px 0 5px 20px;">
			<li>Kingdom : Animalia</li>
			<li>Filum : Chordata</li>
			<li>Subfilum : Vertebrata</li>
			<li>kelas : Osteichyes</li>
			<li>Subkelas : Acanthopterygii</li>
			<li>Subordo : Percoidae</li>
			<li>Ordo : Percomorphi</li>
			<li>Subordo : Dendrobrachiata</li>
			<li>Family : Cichlidae</li>
			<li>Genus : Oreochromis</li>
			<li>Spesies : Oreochromis nilaticus</li>
		</ul>
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
<div class="klikorder">
<?php
echo "<br>"; 
	$query_tampilharga = mysql_query("select nama_produk, harga_produk from produk where kode_produk = '2'");
	while ($record = mysql_fetch_array($query_tampilharga)) {
?>
<table border="7">
<td>
<p><?php echo "Produk &nbsp: ".$record['nama_produk']; ?>
</p><p><?php echo "Harga &nbsp &nbsp: Rp.".$record['harga_produk'].",--"; ?>
</p></td>
	</table>
	<?php
	}
	?>
	</div>		
</ol>

<?php
				if(isset($_COOKIE['nama'])){
			?>
			<a href="order.php?page=ordernila"  class="btono btono2">ORDER SEKARANG</a>
			<?php
				}
				else {
			?>
			<a onclick="alert('Anda Belum Login. Silahkan Login Dulu')" class="btono btono2">ORDER SEKARANG</a>
			
			<?php
				}
			?>
		</div>
		