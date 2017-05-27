<?php 
ob_start();
session_start();
$title='Deja Vu | Продукты';
include_once("../lib/db.php");
require_once('header.php'); 
$row = fetchAll("SELECT id,name,price FROM goods where id_category=".$_GET["id"]);
$cat = fetchOne("SELECT name FROM category where id=".$_GET["id"]);
 ?> 
	<div class="products">	 
		<div class="container">
			<h2><?=$cat["name"];?></h2>			
			<div class="col-md-9 product-model-sec">
                <?php
                if ($row) {
                    foreach ($row as $value) {
                ?>           
				<div class="product-grid">
					<a href="single.php?id=<?=$value["id"]?>">				
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/Воппер1.png" class="img-responsive" alt="">
							<div class="b-wrapper">
								<h4 class="b-animate b-from-left  b-delay03">							
									<button>Обзор</button>
								</h4>
							</div>
						</div>
					</a>				
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4><?=$value["name"];?></h4>								
							<span class="item_price"><?=$value["price"];?> тг</span>
							<div class="ofr">
							</div>
							<? if (!$_SESSION['user_id']) {
						echo "Авторизуйтесь, чтобы заказать товар.";
					}
					if ($_SESSION['user_id']) {
					?>
								<form method="post">
							<input name = "goods_id" type = "hidden" value = <?=$value["id"]?>>
							<input name = "quantity" type="text" class="item_quantity" value="1" />
							<input name="submit" type="submit" class="item_add items" value="В корзину">
							</form>
							<? };?>
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div>
                <?php
                        }
                    } else {
                        echo "В данной категории нет пищи";
                    }
                ?>
			</div>	
			<div class="col-md-3 rsidebar span_1_of_left">
				<section  class="sky-form">
					<div class="product_right">
						<h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Категории</h4>
						<div class="tab1">
							<ul class="place">								
								<li class="sort">Бургеры</li>
								<li class="by"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></li>								
							</ul>
							<div class="clearfix"> </div>
							<div class="single-bottom">						
								<a href="#"><p>Воппер</p></a>
								<a href="#"><p>Чикенфри</p></a>
								<a href="#"><p>БургерМакс</p></a>
								<a href="#"><p>ЖирБургер</p></a>
						    </div>
					    </div>						  
						<div class="tab2">
							<ul class="place">								
								<li class="sort">Суши</li>
								<li class="by"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></li>
							</ul>
							<div class="clearfix"> </div>
							<div class="single-bottom">						
								<a href="#"><p>Роллы</p></a>
								<a href="#"><p>Футомаки</p></a>
								<a href="#"><p>Хосомаки</p></a>	
								<a href="#"><p>Урамаки</p></a>	
						    </div>
					    </div>
						<div class="tab3">
							<ul class="place">								
								<li class="sort">Пицца</li>
								<li class="by"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></li>
							</ul>
							<div class="clearfix"> </div>
							<div class="single-bottom">						
								<a href="#"><p>Маргарита</p></a>
								<a href="#"><p>Итальяно</p></a>
								<a href="#"><p>Пеперони</p></a>
						    </div>
					    </div>
						<div class="tab4">
							<ul class="place">								
								<li class="sort">Напитки</li>
								<li class="by"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></li>
							</ul>
							<div class="clearfix"> </div>
							<div class="single-bottom">						
								<a href="#"><p>Кола</p></a>
								<a href="#"><p>Чай</p></a>
								<a href="#"><p>Коктейль</p></a>
						    </div>
					    </div>
						<!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!--//script -->	
					</div>
				</section>
				<section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Скидки</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>До - 10% </label>
						</div>
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5%  </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% </label>
						</div>
					</div>
				</section>  				 
				<section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Цена</h4>
					<ul class="dropdown-menu1">
						<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Dosis-Regular';" />
							</a></li>			
					</ul>
				</section>
				<!---->
				<script type="text/javascript" src="js/jquery-ui.min.js"></script>
				<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
									range: true,
									min: 0,
									max: 100000,
									values: [ 500, 100000 ],
									slide: function( event, ui ) {  $( "#amount" ).val( "₸" + ui.values[ 0 ] + " - ₸" + ui.values[ 1 ] );
									}
						 });
						$( "#amount" ).val( "₸" + $( "#slider-range" ).slider( "values", 0 ) + " - ₸" + $( "#slider-range" ).slider( "values", 1 ) );

						});//]]> 
					</script>
				<!---->
				
				</section>			 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->
<?php 
$categoryuser_id = $_SESSION["user_id"];
$goods_id = $_POST["goods_id"];
$quantity = $_POST["quantity"];
if (isset ($_POST["submit"])) {
	$sql = "INSERT INTO `basket`(`id_user`, `id_goods`, `quantity`) VALUES ('$categoryuser_id','$goods_id','$quantity')";
	InsertRow($sql);
	header("Location: ../template/category.php?id={$_GET['id']}");
};
?>	
<?php require_once('footer.php'); 
ob_end_flush();?>