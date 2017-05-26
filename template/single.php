<?php
	session_start();
	ob_start();
	$_SESSION["user"] = 2;
	$user = $_SESSION["user"];
	$id = $_GET['id'];
	$title='Deja Vu | Одна страница'; 
	include_once("../lib/db.php");
	include_once("inc/good_data_select.php");
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
					<h3><?=$product_row['good_name']?></h3>
					<p><?=$product_row['description']?></p>
					<div class="avgball">
						<p>Общая оценка товара: <?=$valuation_ball['avgball']?></p>
					</div>
					<?
					if (!$_SESSION['user']) {
						echo "Авторизируйтесь чтобы оценить товар.";
					}
					if ($valuation_row['id_user'] != $_SESSION['user']) {
					?>
					<div class="valuation">
						<form method="post">
						<p>Оцените товар: 
							<select name="raiting">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>

						</p>
						<p><input type="submit" name="evaluate" value="Оценить"></p>
						</form>
					</div>
					<?} else {
								echo '<p>Вы уже оценивали товар.</p>';
							}
					?>
					<div class="prices">
						<h5 class="item_price"><?=$product_row['price']?> тг.</h5>
					</div>
					<div class="btn_form">
					<form method="post">
										<p class="qty"> Количество :  </p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">

							<input name = "user_id" type = "hidden" value="1">
							<input name = "goods_id" type = "hidden" value = <?=$product_row["good_id"]?>>
							<input name="submit" type="submit" class="item_add items" value="ДОБАВИТЬ В КОРЗИНУ">
							</form>
					</div>
					<div class="tag">
						<p>Категория : <a href="#"><?=$product_row['category_name']?></a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--related-products-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="review">
					<h1>Отзывы</h1>
          <?php
              if ($review_row) {
                  foreach ($review_row as $value) {
          ?>
						<div id=<?=$value['id']?>>
							<p><b><?=$value['username']?></b> <?=gmdate("Y-m-d", $value["date"])?></p>
							<p><?=$value['comments']?></p>
						</div>
            <?
                }
            } else {
                echo "Для данного товара пока нет отзывов";
            }
            	if ($_SESSION['user']) {
            ?>
            <form method="post">
            	<textarea type="text" name="comment" placeholder="Ваш комментарий..."></textarea>
            	<br>
            	<input type="submit" name="submit" value="Добавить">
            </form>
            <?} else {
            			echo "Войдите чтобы оставить комментарий.";
            		};
            ?>
					</div>
				</div>
			</div>	
		</div> 
<?php require_once('footer.php');
if (isset($_POST['evaluate'])){
	$id_user_raiting = $_SESSION['user'];
	$id_goods_raiting = $id;
	$raiting  = $_POST['raiting'];
	$date_raiting = time();
	$raiting_insert="
		INSERT INTO valuation(id_goods, id_user, ball, date)
		VALUES ('$id_goods_raiting', '$id_user_raiting', '$raiting', '$date_raiting')
	";
	InsertRow($raiting_insert);
	header("Location: single.php?id=".$id);
}
if (isset($_POST['submit'])) {
	$id_user = $_SESSION['user'];
	$id_goods = $id;
	$comments = $_POST['comment'];
	$date = time();
	$comment_insert = "
		INSERT INTO review(id_user, id_goods, comments, date)
		VALUES ('$id_user', '$id_goods', '$comments', '$date')
	";
	InsertRow($comment_insert);
	header("Location: single.php?id=".$id);
};

$user_id = $_POST["user_id"];
$goods_id = $_POST["goods_id"];
$quantity = $_POST["quantity"];
if (isset ($_POST["submit"])) {
	$cart_insert = "INSERT INTO `basket`(`id_user`, `id_goods`, `quantity`) VALUES ('$user_id','$goods_id','$quantity')";
	InsertRow($cart_insert);
	header("Location: ../template/single.php?id={$_GET['id']}");
};
ob_flush();
?> 