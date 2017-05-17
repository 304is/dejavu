<!DOCTYPE html>
<html>
<head>
<title><? echo $title ?></title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //Custom Theme files -->
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
							<ul class="dropdown-menu multi-column columns-4">
								<div class="row">
									<div class="col-sm-3">
										<h4>By Relation</h4>
										<ul class="multi-column-dropdown">
											<li><a class="list" href="products.php">Friend</a></li>
											<li><a class="list" href="products.php">Lover</a></li>
											<li><a class="list" href="products.php">Sister</a></li>
											<li><a class="list" href="products.php">Brother</a></li>
											<li><a class="list" href="products.php">Kids</a></li>
											<li><a class="list" href="products.php">Parents</a></li>
										</ul>
									</div>																		
									<div class="col-sm-3">
										<h4>By Flavour</h4>
										<ul class="multi-column-dropdown">
											<li><a class="list" href="products.php">Chocolate</a></li>
											<li><a class="list" href="products.php">Mixed Fruit</a></li>
											<li><a class="list" href="products.php">Butterscotch</a></li>
											<li><a class="list" href="products.php">Strawberry</a></li>
											<li><a class="list" href="products.php">Vanilla</a></li>
											<li><a class="list" href="products.php">Eggless Cakes</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<h4>By Theme</h4>
										<ul class="multi-column-dropdown">
											<li><a class="list" href="products.php">Heart shaped</a></li>
											<li><a class="list" href="products.php">Cartoon Cakes</a></li>
											<li><a class="list" href="products.php">2-3 Tier Cakes</a></li>
											<li><a class="list" href="products.php">Square shape</a></li>
											<li><a class="list" href="products.php">Round shape</a></li>
											<li><a class="list" href="products.php">Photo cakes</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<h4>Weight</h4>
										<ul class="multi-column-dropdown">
											<li><a class="list" href="products.php">1 kG</a></li>
											<li><a class="list" href="products.php">1.5 kG</a></li>
											<li><a class="list" href="products.php">2 kG</a></li>
											<li><a class="list" href="products.php">3 kG</a></li>
											<li><a class="list" href="products.php">4 kG</a></li>
											<li><a class="list" href="products.php">Large</a></li>
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
						<form id="loginForm">
							<fieldset id="body">
								<fieldset>
									<label for="email">Адрес электронной почты</label>
									<input type="text" name="email" id="email">
								</fieldset>
								<fieldset>
									<label for="password">Пароль</label>
									<input type="password" name="password" id="password">
								</fieldset>
								<input type="submit" id="login" value="Войти в систему
">
								<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Запомни меня</i></label>
							</fieldset>
							<p>Новый пользователь? <a class="sign" href="account.php">Зарегистрироваться</a> <span><a href="#">Забыли пароль?</a></span></p>
						</form>
					</div>
				</div>
				<div class="header-right cart">
					<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					<div class="cart-box">
						<h4><a href="checkout.php">
							<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<p><a href="javascript:;" class="simpleCart_empty">Очистить корзину </a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//header-->