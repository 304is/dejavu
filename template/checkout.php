<?$title='Deja Vu | Проверка '; 
include_once ("../lib/db.php");
$rowis = fetchAll("SELECT goods.name,goods.price,basket.quantity,basket.date FROM `basket`
LEFT JOIN goods ON goods.id=basket.id_goods");?>
<?php require_once('header.php'); ?> 
<!--cart-items-->
	<div class="cart-items">
		<div class="container">
			<h2>Моя корзина <?php  if ($rowsed) {
                    foreach ($rowsed as $value) {
                ?> (<?=$value["COUNT(id)"];?>)<?php  }
                    } else {
                        echo "0";
                    }?> </h2>
			<?php foreach ($rowis as $value) {
                ?> 
			<div class="cart-header">
				<div class="close"><p><a href="javascript:;">Убрать </a></p> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						 <img src="images/m1.png" class="img-responsive" alt="">
					</div>
					<div class="cart-item-info">
						<h3><a href="#"><?=$value["name"];?></a></h3>
						<ul class="qty">
							<li><p>Бесплатная доставка</p></li>
						</ul>
						<div class="delivery">
							<p>Стоимость : <?=$value["price"]*$value["quantity"];?>&#8376 (<?=$value["quantity"];?> шт)</p>
							<span>Доставлен в <?=$value["date"];?></span>
							<div class="clearfix"></div>

						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php
                        };
                ?>
	</div>
	<!--//checkout-->	
<?php require_once('footer.php'); ?> 