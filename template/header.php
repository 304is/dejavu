<?php
session_start();
$cartsuser_id = $_SESSION["user_id"];

include_once ("../lib/db.php");
$row = fetchAll("SELECT id,name FROM category");
$rowsed = fetchAll("SELECT COUNT(id) FROM `basket` WHERE id_user = '$cartsuser_id'");
$rows = fetchAll("SELECT SUM(goods.price*basket.quantity) AS price_sum FROM `basket`
LEFT JOIN goods ON goods.id=basket.id_goods
WHERE id_user = '$cartsuser_id'");?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title; ?></title>
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //js -->	
<!-- cart -->
<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin -->		
        <!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--//FlexSlider -->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  href="/"><div class="navbar-brand hidden-xs"></div><div class="navbar-brand1 visible-xs"></div></a>
				</div>
				<!--navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="/" class="active">Главная</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Категория<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<?php
											foreach ($row as $value) {
											?>
												<h4><li><a class="list" href="category.php?id=<?=$value["id"];?>"><?=$value["name"];?></a></li></h4>
											<?php
											}
											?>
										</ul>
									</div>																			
								</div>
							</ul>
						</li>
					</ul>
					<!--/.navbar-collapse-->
				</div>
				<!--//navbar-header-->
			</nav>
			<div class="header-info">
				<div class="header-right search-box">
					<a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>				
					<div class="search">
						<form class="navbar-form">
							<input type="text" class="form-control">
							<button type="submit" class="btn btn-default" aria-label="Left Align">
								Поиск
							</button>
						</form>
					</div>	
				</div>
				<div class="header-right login">
					<a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
					<div id="loginBox">
					<?if (!$_SESSION['user_id']) {?>                
						<form id="loginForm" method="post" action="auth_check.php">
							<fieldset id="body">
								<fieldset>
									<label for="email">Логин</label>
									<input type="text" name="username" id="email">
								</fieldset>
								<fieldset>
									<label for="password">Пароль</label>
									<input type="password" name="password" id="password">
								</fieldset>
								<input name="login" type="submit" id="login" value="Войти в систему">
								<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Запомни меня</i></label>
							</fieldset>
							<p>Новый пользователь? <a class="sign" href="account.php">Зарегистрироваться</a> <span><a href="#">Забыли пароль?</a></span></p>
						</form>
						<?} else { ?>
							<form id="loginForm" method="post" action="auth_check.php">
							<fieldset id="body">
								<p>Вы в системе как: <?=$_SESSION['user_name']?></p>
								<input name="logout" type="submit" id="login" value="Выйти из системы">
							</fieldset>
							</form>
						<?};?>
					</div>
				</div>
				<div class="header-right cart">
					<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					<div class="cart-box">
						<h4><a href="checkout.php">
							<span class="simpleCart_total1"><?php  if ($rows) {
                    foreach ($rows as $value) {
                ?> <?=$value["price_sum"];?><?php  }
                    } else {
                        echo "0";
                    }?>&#8376 <?php  if ($rowsed) {
                    foreach ($rowsed as $value) {
                ?> <?='('.$value["COUNT(id)"].')';?><?php  }
                    } else {
                        echo "0";
                    }?></span> 
						</a></h4>
						<p><a href="checkout.php" class="simpleCart_empty">Просмотреть корзину </a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//header-->