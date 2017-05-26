<?$title='Deja Vu | Главная'; ?>
<?php require_once('header.php');
echo $_SESSION['user'];?>

<!--banner-->
	<div class="banner">
		<div class="container">
			<h2 class="hdng">Ресторан <span>Deja Vu</span></h2>
			<p>Добро пожаловать!</p>
			<a href="category.php">НАЧАТЬ ПОКУПКИ</a>
			<div class="banner-text">			
				<img src="images/logo-big.png" alt="">	
			</div>
		</div>
	</div>		
<?php 
include_once('products_select.php'); 
include_once("../lib/db.php");
?>	
	<!--//banner-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			
		</div>
	</div>
	<!--//gallery-->
<?php require_once('footer.php'); ?> 