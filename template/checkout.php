<?$title='Deja Vu | Проверка '; ?>
<?php require_once('header.php'); ?> 
<!--cart-items-->
	<div class="cart-items">
		<div class="container">
			<h2>Моя корзина (3)</h2>
			<script>$(document).ready(function(c) {
				$('.close1').on('click', function(c){
					$('.cart-header').fadeOut('slow', function(c){
						$('.cart-header').remove();
					});
					});	  
				});
			</script>
			<div class="cart-header">
				<div class="close1"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						 <img src="images/m1.png" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum - это не просто </a><span>Время забирать:</span></h3>
						<ul class="qty">
							<li><p>Мин. стоимость заказа:</p></li>
							<li><p>Бесплатная доставка</p></li>
						</ul>
						<div class="delivery">
							<p>Плата За Обслуживание : $10.00</p>
							<span>Доставлен в 1-1:30 часа</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			<div class="cart-header2">
				<div class="close2"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						 <img src="images/m2.png" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum - это не просто </a><span>Время забирать:</span></h3>
						<ul class="qty">
							<li><p>Мин. стоимость заказа:</p></li>
							<li><p>Бесплатная доставка</p></li>
						</ul>
						<div class="delivery">
							<p>Плата За Обслуживание : $10.00</p>
							<span>Доставлен в 1-1:30 часа</span>
							<div class="clearfix"></div>
						</div>	
					</div>
				   <div class="clearfix"></div>
				</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
							$('.cart-header3').fadeOut('slow', function(c){
						$('.cart-header3').remove();
					});
					});	  
					});
				</script>
			<div class="cart-header3">
				<div class="close3"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						 <img src="images/m3.png" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum - это не просто </a><span>Время забирать:</span></h3>
						<ul class="qty">
							<li><p>Мин. стоимость заказа:</p></li>
							<li><p>Бесплатная доставка</p></li>
						</ul>
						<div class="delivery">
							<p>Плата За Обслуживание : $10.00</p>
							<span>Доставлен в 1-1:30 часа</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>		
		</div>
	</div>
	<!--//checkout-->	
<?php require_once('footer.php'); ?> 