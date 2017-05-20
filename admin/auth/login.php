<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<<<<<<< 3a207749778781b432a794d2487275127c78c4b5
<title>Deja Vu</title>
=======
<title>Авторизация</title>
>>>>>>> 95c53c791bd77a353554565b097bd553c2d7f1e9
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../template/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../template/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../template/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../template/assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../template/assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="../template/assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="../template/assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="../template/assets/css/style.css" />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="../template/assets/css/styleTheme1.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="../template/assets/css/styleTheme2.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="../template/assets/css/styleTheme3.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="../template/assets/css/styleTheme4.css" />

</head>
<body class="full-lg">
<div id="wrapper">

<div id="loading-top">
		<div id="canvas_loading"></div>
		<span>Checking...</span>
</div>

<div id="main">
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
						
								<div class="account-wall">
										<section class="align-lg-center">
										<div class="site-logo">
											<p><img src="../../template/images/logo-big.png"></p>
										</div>
										<h1 class="login-title"><span>Вход</span><small> В админ-меню</small></h1>
										</section>
										<form id="form-signin" class="form-signin">
												<section>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user"></i></div>
																<input  type="text" class="form-control" name="username" placeholder="Логин">
														</div>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-key"></i></div>
																<input type="password" class="form-control"  name="password" placeholder="Пароль">
														</div>
														<button class="btn btn-lg btn-theme-inverse btn-block" type="submit" id="sign-in">Войти</button>
												</section>		
										</form>
										<a href="#" class="footer-link">&copy; 304 ИС &trade; </a>
								</div>	
								<!-- //account-wall-->
								
						</div>
						<!-- //col-sm-6 col-md-4 col-md-offset-4-->
				</div>
				<!-- //row-->
		</div>
		<!-- //container-->
		
</div>
<!-- //main-->

		
</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
		
<!-- Jquery Library -->
<script type="text/javascript" src="../template/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../template/assets/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="../template/assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../template/assets/plugins/mmenu/jquery.mmenu.js"></script>
<script type="text/javascript" src="../template/assets/js/styleswitch.js"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="../template/assets/plugins/form/form.js"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="../template/assets/plugins/datetime/datetime.js"></script>
<!-- Library Chart-->
<script type="text/javascript" src="../template/assets/plugins/chart/chart.js"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="../template/assets/plugins/pluginsForBS/pluginsForBS.js"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="../template/assets/plugins/miscellaneous/miscellaneous.js"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="../template/assets/js/caplet.custom.js"></script>
<script type="text/javascript">
$(function() {
		   //Login animation to center 
			function toCenter(){
					var mainH=$("#main").outerHeight();
					var accountH=$(".account-wall").outerHeight();
					var marginT=(mainH-accountH)/2;
						   if(marginT>30){
							   $(".account-wall").css("margin-top",marginT-15);
							}else{
								$(".account-wall").css("margin-top",30);
							}
				}
				toCenter();
				var toResize;
				$(window).resize(function(e) {
					clearTimeout(toResize);
					toResize = setTimeout(toCenter(), 500);
				});
				
			//Canvas Loading
			  var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
			  throbber.appendTo(document.getElementById('canvas_loading'));
			  throbber.start();
			  
			//Set note alert
			
	
			
			$("#form-signin").submit(function(event){
					event.preventDefault();
					var main=$("#main");
					//scroll to top
					main.animate({
						scrollTop: 0
					}, 500);
					main.addClass("slideDown");		
					
					// send username and password to php check login
					$.ajax({
						url: "checklogin.php", data: $(this).serialize(), type: "POST", dataType: 'json',
						success: function (e) {
								setTimeout(function () { main.removeClass("slideDown") }, !e.status ? 500:3000);
								 if (!e.status) { 
									 $.notific8('Check Username or Password again !! ',{ life:5000,horizontalEdge:"bottom", theme:"danger" ,heading:" ERROR :); "});
									return false;
								 }
								 setTimeout(function () { $("#loading-top span").text("Yes, account is access...") }, 500);
								 setTimeout(function () { $("#loading-top span").text("Redirect to account page...")  }, 1500);
								 setTimeout( "window.location.href='../main/index.php'", 3100 );
						}
					});	
			});
	});
</script>
</body>
</html>