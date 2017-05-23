<?$title='Deja Vu | Одна страница'; ?>
<?php 
include ("../lib/db.php");
include ("inc/good_data_select.php");
require_once('header.php');
?> 
<!--//single-page-->
	<div class="single">
		<div class="container">
			<div class="single-grids">				
				<div class="col-md-4 single-grid">		
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/s1.png">
								<div class="thumb-image"> <img src="images/s1.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/s2.png">
								 <div class="thumb-image"> <img src="images/s2.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/s3.png">
							   <div class="thumb-image"> <img src="images/s3.png" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
						</ul>
					</div>
				</div>	
				<div class="col-md-8 single-grid simpleCart_shelfItem">		
					<h3><?=$row['good_name']?></h3>
					<p><?=$row['description']?></p>
					<div class="galry">
						
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<p class="qty"> Количество :  </p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					<div class="prices">
						<h5 class="item_price"><?=$row['price']?> тг.</h5>
					</div>
					<div class="btn_form">
						<a href="#" class="add-cart item_add">ДОБАВИТЬ В КОРЗИНУ</a>	
					</div>
					<div class="tag">
						<p>Категория : <a href="#"><?=$row['category_name']?></a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="review">
					<h1>Отзывы</h1>
					<?foreach ($review_row as $value) {?>
						<div id="1">
							<p><b><?=$value['username']?></b> <?=gmdate("Y-m-d", $value["date"])?></p>
							<p><?=$value['comments']?></p>
						</div>
						<?};?>
					</div>
				</div>
			</div>	
		</div>
<?php require_once('footer.php'); ?> 