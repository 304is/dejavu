<?
ob_start();
$title='Deja Vu | Проверка '; 
include_once ("../lib/db.php");
$rowis = fetchAll("SELECT basket.id,goods.name,goods.price,basket.quantity,basket.date FROM `basket`
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
			<?php 
			if ($rowis) {
			foreach ($rowis as $value) {
                ?> 
			<div class="cart-header">
				<div class="close"></div>
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
							<form method="post">
							<input name = "cart_id" type = "hidden" value = <?=$value["id"]?>>
							<input name="submit" type="submit" class="item_add items" value="Убрать">
							</form>
						
<?
$cart_id = $_POST["cart_id"];
if (isset ($_POST["submit"])) {
$rowsql = fetchOne("DELETE FROM basket WHERE id='$cart_id'"); 
	header("Location: ../template/checkout.php");
};             
?>                        
 

						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php
                        }};
                ?>
	</div>
	
	<!--//checkout-->	
<?php require_once('footer.php'); 
ob_end_flush();?>
