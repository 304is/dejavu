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
<<<<<<< Updated upstream
					<h3><?=$row['good_name']?></h3>
					<p><?=$row['description']?></p>
					<div class="galry">
						
=======
					<h3><b>ВОППЕР</b></h3>
					<p><b>ВОППЕР</b> — это вкуснейшая приготовленная на огне 100% говядина с сочными помидорами, 
					свежим нарезанным листовым салатом, густым майонезом, хрустящими маринованными огурчиками и 
					рубленым белым луком на нежной булочке с кунжутной посыпкой.</p>
					<div class="galry">
						<div class="prices">
							<h5 class="item_price">750.00тг</h5>
						</div>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
						<p>Категория : <a href="#"><?=$row['category_name']?></a></p>
=======
						<p>Категория : <a href="#"> Бургеры</a></p>
>>>>>>> Stashed changes
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<<<<<<< Updated upstream
=======
	<!-- collapse -->
	<div class="collpse tabs">
		<div class="container">
			<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
				
				<div class="panel panel-default">
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Отзывы (5)
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
						 Терри Ричардсон объявление кальмаров. 3 волк луна оффиция ауте, не cupidatat скейтборд долор бранч. Еда грузовик киноа nesciunt сайт laborum eiusmod. Бранч 3 волк луна темпор, они могут возникнуть поставить птичку на это кальмар одного происхождения кофе нет assumenda шордич эт. Нигилу аним куфия гельветика, крафтовое пиво лаборе Уэс Андерсон кред nesciunt sapiente ЕА proident. Объявление веганский excepteur вице-мясник ломо. Леггинсы occaecat ремесло фермы до стола пиво, необработанный деним эстетической синтезатор nesciunt вы, вероятно, не слышали их accusamus лаборе устойчивого и VHS.
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!--//collapse -->
	<!--related-products-->
	<div class="related-products">
>>>>>>> Stashed changes
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