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
						<h2>Rp </h2>
						<h4 style="margin-top: 6px;">Stock :</h4>
						<a href="index.php?page=udang"> <button class="bton bton2">INFO</button> </a>
						
						
							<h5>Kuantitas :</h5>
							 <div class="quantity"> 
								<div class="quantity-select">
								    <input style="background-color: white; color: black" class="value-minus" type="button" value="-" id="moins" onclick="minus()">
								    <input class="value" type="text" size="25" value="1" id="count">
								    <input style="background-color: white; color: black" class="value-plus" type="button" value="+" id="plus" onclick="plus()">
								</div>
							
								</div>
							</div>
						<script>	
							    var count = 1;
							    var countEl = document.getElementById("count");
							    function plus(){
							        count++;
							        countEl.value = count;
							    }
							    function minus(){
							      if (count > 1) {
							        count--;
							        countEl.value = count;
							      }  
							    }
						</script>

					</div>
					<div class="description" style="margin-top: 12px;">
						<input type="hidden" name="kuantitas" value="1">
						
						<input onclick="changeurl()" type="submit" class="bton bton2" value="Add Cart" name="addKeranjang">		
					</div>
				</div>
		</div>