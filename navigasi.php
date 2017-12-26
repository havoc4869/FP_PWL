<div>
	<ul class="topnav">
		<li><a href="index.php?page=beranda">Beranda</a></li>
		<li><a href="index.php?page=udang">Udang</a></li>
		<li><a href="index.php?page=nila">Ikan Nila</a></li>
		<li><a href="index.php?page=kakap">Ikan Kakap</a></li>
		<li><a href="index.php?page=bandeng">Ikan Bandeng</a></li>

  		
  		
  		<?php
				if(isset($_COOKIE['nama'])){
			?>
			<li><a href="order.php?page=orderudang">Order</a></li>
			<?php
				}
				else {
			?>
			<li style="cursor: pointer;"><a onclick="alert('Anda Belum Login. Silahkan Login Dulu')">Order</a></li>
			<?php
				}
			?>

  		<li><a href="index.php?page=tentang">Tentang Kami</a></li>

  			<?php
				if(isset($_COOKIE['nama'])){
			?>
			<li style="float: right">
				<div class="col-md-2 header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h4> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style ="color: #FCFCFC"></i>
								<span style ="color: #FCFCFC"><?//=$hitung;?> Item</div>

							</h4>
						</a>
					</div>	
				</div>
			</li>
			
			<?php
				}
				else {
			?>
			<li style="float: right; cursor: pointer;">
				<div class="col-md-2 header-right">
					<div class="cart box_1">
						<a onclick="alert('Anda Belum Login. Silahkan Login Dulu')">
							<h4> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style ="color: #FCFCFC"></i>
								<span style ="color: #FCFCFC"><?//=$hitung;?> Item</div>

							</h4>
						</a>
					</div>	
				</div>
			</li>
			<?php
				}
			?>

		


		<li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">☰</a>
  </li></a>
	</ul>
	</div>
