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
						<button class="bton bton2">INFO</button>
						
						
							<h5>Kuantitas :</h5>
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
								</div>
						</div>
						<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
					</div>
					<div class="description" style="margin-top: 12px;">
						<input type="hidden" name="kuantitas" value="1">
						
						<input onclick="changeurl()" type="submit" class="bton bton2" value="Add Cart" name="addKeranjang">		
					</div>
				</div>
		</div>