<?
ob_start();
$title='Deja Vu | Проверка '; 
include_once ("../lib/db.php");
$user_id = $_SESSION['user_id'];
$rowis = fetchAll("SELECT basket.id,basket.id_user,goods.id AS goods_id ,goods.name,goods.price,basket.quantity,basket.date FROM `basket`
LEFT JOIN goods ON goods.id=basket.id_goods WHERE basket.id_user = '$user_id'");
$rowdelivery = fetchAll("SELECT `id`, `name` FROM `delivery`");
?>


<?php require_once('header.php'); ?> 
<!--cart-items-->
	<div class="cart-items">
		<div class="container">
			<h2>Моя корзина <?php  if ($rowsed) {
                    foreach ($rowsed as $value) {
                ?> <?='('.$value["COUNT(id)"].')';?><?php  }
                    } else {
                        echo "0";
                    }?>
					Общая сумма:<?php  if ($rows) {
                    foreach ($rows as $value) {
                ?> <?=$value["price_sum"];?><?php  }
                    } else {
                        echo "0";
                    }?>&#8376 </h2>
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
			
	<form method="post" class="form-inline">
	
	<label for="exampleInputdelivery1">Способ доставки: </label>
							<select name="orders_delivery"  id="exampleInputdelivery1" class="form-control">
								<? 
									foreach ($rowdelivery as $value) {  if ($value['id']) {?>
										 <option selected value = <?=$value['id']?> > <?=$value['name']?> </option> 
										 <?php } else {?>
										<option value = <?=$value['id']?> > <?=$value['name']?> </option>
									<? }
									}; ?>
							</select>
								<?php 
			if ($rowis) {
				foreach ($rowis as $value) {					
					$orders_price += $value["price"]*$value["quantity"];
                }
			}
						
                ?>
												<button type="submit"  name="orderssubmit" class="btn btn-info">Оформить заказ</button>

<?php 
if (isset ($_POST["orderssubmit"])) {
$orders_name = time();
$orders_delivery = $_POST["orders_delivery"];
	$sql = "INSERT INTO `orders`(`name`, `price`, `id_delivery`) VALUES ('$orders_name','$orders_price','$orders_delivery')";
	$idOds = InsertRow($sql);
	if ($rowis) {
	foreach ($rowis as $value) {					
		
	}
}
	
	
	
	
	header("Location: ../template/checkout.php");
};
?>	
			
							</form>
						
	</div>
	
	<!--//checkout-->
	
<?php require_once('footer.php'); 
ob_end_flush();?>
