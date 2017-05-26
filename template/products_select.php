<?php
	$sql = "
		SELECT  goods.id, goods.name AS goods_name, goods.date, goods.description, goods.price, category.name AS category_name, goods.active
		FROM goods
		LEFT JOIN category
		ON  category.id = goods.id_category
	";
	$row = fetchAll($sql);
	?>
<? foreach ($row as $value) { ?>	
<div class="product-grid">
					<a href="single.php">				
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/m1.png" class="img-responsive" alt="">
							<div class="b-wrapper">
								<h4 class="b-animate b-from-left  b-delay03">							
									<button><a href="single.php?id=<?=$value["id"]?>">Просмотреть</a></button>
								</h4>
							</div>
						</div>
					</a>				
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4><?=$value["goods_name"]?></h4>								
							<span class="item_price"><?=$value["price"]?> &#8376;</span>
							<div class="ofr">
								<p class="disc"><?=$value["category_name"]?></p>
							</div>
							<form method="post">
							<input name = "user_id" type = "hidden" value="1">
							<input name = "goods_id" type = "hidden" value = <?=$value["id"]?>>
							<input name = "quantity" type="text" class="item_quantity" value="1" />
							<input name="submit" type="submit" class="item_add items" value="Добавить">
							</form>
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div>
				<?};?>
<?php 
$user_id = $_POST["user_id"];
$goods_id = $_POST["goods_id"];
$quantity = $_POST["quantity"];

?>				
				
				