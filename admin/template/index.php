<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<!-- Title-->
<title>CAPLET |  Admin HTML Themes</title>

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.ico">

<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="assets/css/style.css" />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="assets/css/styleTheme1.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="assets/css/styleTheme2.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="assets/css/styleTheme3.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="assets/css/styleTheme4.css" />

</head>
<body>
<div id="wrapper">
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     HEADER  CONTENT     ///////////////
		//////////////////////////////////////////////////////////////////////
		-->
		<? include("assets/inc/menu_inc/top_menu.php"); ?>
		<!-- //header-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     SLIDE LEFT CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     TOP SEARCH CONTENT     ///////
		//////////////////////////////////////////////////////////////////////
		-->
		<div class="widget-top-search">
			<span class="icon"><a href="#" class="close-header-search"><i class="fa fa-times"></i></a></span>
			<form id="top-search">
					<h2><strong>Quick</strong> Search</h2>
					<div class="input-group">
							<input  type="text" name="q" placeholder="Find something..." class="form-control" />
							<span class="input-group-btn">
							<button class="btn" type="button" title="With Sound"><i class="fa fa-microphone"></i></button>
							<button class="btn" type="button" title="Visual Keyboard"><i class="fa fa-keyboard-o"></i></button>
							<button class="btn" type="button" title="Advance Search"><i class="fa fa-th"></i></button>
							</span>
					</div>
			</form>
		</div>
		<!-- //widget-top-search-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     MAIN SHOW CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="main">
				
<? include ("assets/inc/footer_inc/footer_inc.php") ?>
				
		</div>
		<!-- //main-->
		
		
		
		<!--
		///////////////////////////////////////////////////////////////////
		//////////     MODAL MESSAGES     //////////
		///////////////////////////////////////////////////////////////
		-->
		<div id="md-messages" class="modal fade md-slideUp bg-theme-inverse" tabindex="-1" data-width="450">
				<div class="modal-header bd-theme-inverse-darken">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h4 class="modal-title"><i class="fa fa-inbox"></i> Inbox messages</h4>
				</div>
				<!-- //modal-header-->
				<div class="modal-body" style="padding:0">
						<div class="widget-im">
								<ul>
										<li>
												<section  class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<i class="fa fa-paperclip"></i>
																</span>
																<span>
																		<i class="fa fa-reply-all"></i>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
																</span>
																<span>
																		<time datetime="2013-11-16">1 : 52 am</time>
																</span>
														</div>
														<h4><a href="javascript:void(0)">Edlado Holder</a>
														</h4>
														<div class="im-thumbnail"><img alt="" src="assets/img/avatar2.png" /></div>
														<label></label>
														<div class="pre-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="yes">YES.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">NO.</a>
														</div>
												</div>
										</li>
										<li>
												<section  class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<i class="fa fa-paperclip"></i>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
																</span>
																<span>
																		<time datetime="2013-11-16">12 : 00 pm</time>
																</span>
														</div>
														<h4><a href="javascript:void(0)">Laine Franchi</a>
														</h4>
														<div class="im-thumbnail"><i class="glyphicon glyphicon-user"></i></div>
														<div class="pre-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="yes">YES.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">NO.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<a href="javascript:void(0)" class="im-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
																</span>
																<span>
																		<time datetime="2013-11-16">4 : 45 pm</time>
																</span>
														</div>
														<h4><a href="javascript:void(0)">Cinda Collar</a>
														</h4>
														<div class="im-thumbnail"><img alt="" src="assets/img/avatar.png" /></div>
														<label data-color="theme"></label>
														<div class="pre-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="yes">YES.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">NO.</a>
														</div>
												</div>
										</li>
								</ul>
								<button class="btn btn-inverse btn-block btn-lg" title="See More"><i class="fa fa-plus"></i></button>
						</div>
						<!-- //widget-im-->
				</div>
				<!-- //modal-body-->
		</div>
		<!-- //modal-->
		
		
		
		<!--
		//////////////////////////////////////////////////////////////////////////
		//////////     MODAL NOTIFICATION     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="md-notification" class="modal fade md-stickTop bg-danger" tabindex="-1" data-width="500">
				<div class="modal-header bd-danger-darken">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h4 class="modal-title"><i class="fa fa-bell-o"></i> Notification</h4>
				</div>
				<!-- //modal-header-->
				<div class="modal-body" style="padding:0">
						<div class="widget-im notification">
								<ul>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago lasted" datetime="2014">when you opened the page</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Your request approved</h4>
														<div class="im-thumbnail bg-theme-inverse"><i class="fa fa-check"></i></div>
														<div class="pre-text">One Button (click to remove this)</div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="accept">Accept.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago" datetime="2013-11-17T14:24:17Z">timeago</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Dashboard new design!! you want to see now ? </h4>
														<div class="im-thumbnail bg-theme"><i class="fa fa-bell-o"></i></div>
														<div class="pre-text">Two Button (with link and click to close this) Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse" href="dashboard.html">Go Now.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">Later.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago" datetime="2013-11-17T01:24:17Z">timeago</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Error 404 <small>( File not  found )</small></h4>
														<div class="im-thumbnail bg-warning"><i class="fa fa-exclamation-triangle"></i></div>
														<div class="pre-text">Two Button (click to  action and remove) </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="accept">Accept.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="actionNow">Fixed now.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago" datetime="2013-09-17T09:24:17Z">timeago</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Upgrade Premium ?</h4>
														<div class="im-thumbnail bg-inverse">
																<i class="fa fa-cogs"></i></div>
														<div class="pre-text"> Three button (test action) </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="actionNow">Now.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">Later.</a>
																<a class="btn btn-danger im-confirm" href="javascript:void(0)" data-confirm="yes">Delete.</a>
														</div>
												</div>
										</li>
								</ul>
						</div>
						<!-- //widget-im-->
				</div>
				<!-- //modal-body-->
		</div>
		<!-- //modal-->
		
		
		
		<!--
		//////////////////////////////////////////////////////////////
		//////////     LEFT NAV MENU     //////////
		///////////////////////////////////////////////////////////
		-->
<? include("assets/inc/menu_inc/left_menu.php"); ?>
		<!-- //nav left menu-->
		
		
				<!--
		/////////////////////////////////////////////////////////////////
		//////////     RIGHT NAV MENU     //////////
		/////////////////////////////////////////////////////////////
		-->
		<nav id="menu-right">
				<ul>
						<li class="Label label-lg">Theme color</li>
						<li>
							<span class="text-center">
								<div id="style1" class="color-themes col1"></div>
								<div id="style2" class="color-themes col2" ></div>
								<div id="style3" class="color-themes col3" ></div>
								<div id="style4" class="color-themes col4" ></div>
								<div id="none" class="color-themes col5" ></div>
							</span>
						</li>
						<li class="Label label-lg">Contact Group</li>
						<li data-counter-color="theme">
								<span><i class="icon fa fa-smile-o"></i> Friends</span>
								<ul>
										<li class="Label">A</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Alexa 
														<small>Johnson</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Alexander 
														<small>Brown</small>
												</a>
										</li>
										<li class="Label">F</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/3.jpg" /> Fred
														<small>Smith</small>
												</a>
										</li>
										<li class="Label">J</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/4.jpg" /> James
														<small>Miller</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Jefferson
														<small>Jackson</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/6.jpg" /> Jordan
														<small>Lee</small>
												</a>
										</li>
										<li class="Label">K</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/7.jpg" /> Kim
														<small>Adams</small>
												</a>
										</li>
										<li class="Label">M</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/8.jpg" /> Meagan
														<small>Miller</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Melissa
														<small>Johnson</small>
												</a>
										</li>
										<li class="Label">N</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/10.jpg" /> Nicole
														<small>Smith</small>
												</a>
										</li>
										<li class="Label">S</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Samantha
														<small>Harris</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="block">
														<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Scott
														<small>Thompson</small>
												</a>
										</li>
								</ul>
						</li>
						<li>
								<span><i class="icon  fa fa-home"></i> Family</span>
								<ul>
										<li class="Label">A</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/3.jpg" /> Adam
														<small>White</small>
												</a>
										</li>
										<li class="Label">B</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/4.jpg" /> Ben
														<small>Robinson</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Bruce
														<small>Lee</small>
												</a>
										</li>
										<li class="Label">E</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/6.jpg" /> Eddie
														<small>Williams</small>
												</a>
										</li>
										<li class="Label">J</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/7.jpg" /> Jack
														<small>Johnson</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/8.jpg" /> John
														<small>Jackman</small>
												</a>
										</li>
										<li class="Label">M</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Martina
														<small>Thompson</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/10.jpg" /> Matthew
														<small>Watson</small>
												</a>
										</li>
										<li class="Label">O</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Olivia
														<small>Taylor</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Owen
														<small>Wilson</small>
												</a>
										</li>
								</ul>
						</li>
						<li data-counter-color="theme-inverse">
								<span><i class="icon  fa fa-briefcase"></i> Work colleagues</span>
								<ul>
										<li class="Label">D</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/3.jpg" /> David
														<small>Harris</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/4.jpg" /> Dennis
														<small>King</small>
												</a>
										</li>
										<li class="Label">E</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Eliza
														<small>Walker</small>
												</a>
										</li>
										<li class="Label">L</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/6.jpg" /> Larry
														<small>Turner</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/7.jpg" /> Lisa<br />
														<small>Wilson</small>
												</a>
										</li>
										<li class="Label">M</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/8.jpg" /> Michael
														<small>Jordan</small>
												</a>
										</li>
										<li class="Label">R</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Rachelle
														<small>Cooper</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/10.jpg" /> Rick
														<small>James</small>
												</a>
										</li>
								</ul>
						</li>
						<li class="Label label-lg">Total week Earnings</li>
						<li>
								<span><i class="icon  fa fa-bar-chart-o"></i> See This week</span>
								<ul>
										<li class="Label">themeforest</li>
										<li><span><i class="label label-warning pull-right">HTML</i> Earnings $395 </span></li>
										<li><span> Earnings $485 </span></li>
										<li><span><i class="label label-info pull-right">Wordpress</i> Earnings $1,589 </span></li>
										<li class="Label">codecanyon </li>
										<li><span><i class="label label-danger pull-right">Item 6537086</i> Earnings $897</span></li>
										<li><span>Sunday Earnings $395</span></li>
										<li class="Label">Other</li>
										<li><span><i class="label label-success  pull-right">up 35%</i> Total Earnings $5,025</span></li>
								</ul>
						</li>
						<li>
								<span>
									<div class="widget-mini-chart align-xs-right">
											<div class="pull-left">
													<div class="sparkline mini-chart" data-type="bar" data-color="warning" data-bar-width="10" data-height="45">2,3,7,5,4,6,6,3</div>
											</div>
											<p>This week Earnings</p>
											<h4>$11,987</h4>
									</div>
									<!-- //widget-mini-chart -->			
								</span>
						</li>	
						<li>
								<span>
									<div class="widget-collapse dark">
											<header>
													<a data-toggle="collapse" href="#collapseRightMenu"><i class="collapse-caret fa fa-angle-down"></i>Collaps Header </a>
											</header>
											<section class="collapse" id="collapseRightMenu">
													<div class="collapse-boby">
															<div class="widget-slider">
																	<p>Upload status</p>
																	<div class="progress progress-dark progress-xs tooltip-in">
																			<div class="progress-bar bg-darkorange" aria-valuetransitiongoal="75"></div>
																	</div>
																	<label class="progress-label">Master.zip 4 / 5 </label>
																	<!-- //progress-->
																	<div class="progress progress-dark progress-xs">
																			<div class="progress-bar bg-theme-inverse" aria-valuetransitiongoal="45"></div>
																	</div>
																	<label class="progress-label lasted">Profile 2 / 5 </label>
																	<!-- //progress-->
															</div>
															<!-- //widget-slider-->
													</div>
													<!-- //collapse-boby-->
											</section>
											<!-- //collapse-->
									</div>
									<!-- //widget-collapse-->
								</span>
						</li>	
						<li class="Label label-lg">Processing </li>
						<li>
								<span>								
							<p>Server Processing</p>
									<div class="progress progress-dark progress-stripes progress-xs">
											<div class="progress-bar bg-danger" aria-valuetransitiongoal="37"></div>
									</div>
									<label class="progress-label">Today , CPU 37%</label>
									<!-- //progress-->
									<div class="progress progress-dark progress-xs">
											<div class="progress-bar bg-warning" aria-valuetransitiongoal="23"></div>
									</div>
									<label class="progress-label lasted">Today , Server load  22.85%</label>
									<!-- //progress-->
								</span>
						</li>
						<li class="Label label-lg">Quick Friends Chat </li>
						<li class="img">
								<a href="#" class="online">
										<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Olivia
										<small>Taylor</small>
								</a>
						</li>
						<li class="img">
								<a href="#" class="online">
										<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Owen
										<small>Wilson</small>
								</a>
						</li>
						<li class="img">
								<a href="#">
										<img alt="" src="assets/photos_preview/50/people/8.jpg" /> Meagan
										<small>Miller</small>
								</a>
						</li>
						<li class="img">
								<a href="#" class="busy">
										<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Melissa
										<small>Johnson</small>
								</a>
						</li>
						<li class="img">
								<a href="#" class="online">
										<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Samantha
										<small>Harris</small>
								</a>
						</li>
						<li class="Label label-lg">visitors Real Time</li>
						<li>
								<span>
									<div class="widget-chart">
											<div id="realtimeChart" class="demo-placeholder" style="height:150px"></div>
											<div id="realtimeChartCount" class="align-lg-center"><span>0</span> visitors on site </div>
									</div><!-- // widget-chart -->
								</span>
						</li>	
				</ul>
		</nav>
		<!-- //nav right menu-->
		
		
</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
		
<!-- Jquery Library -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/mmenu/jquery.mmenu.js"></script>
<script type="text/javascript" src="assets/js/styleswitch.js"></script>
<script type="text/javascript" src="assets/js/styleswitch.js"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="assets/plugins/form/form.js"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="assets/plugins/datetime/datetime.js"></script>
<!-- Library Chart-->
<script type="text/javascript" src="assets/plugins/chart/chart.js"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="assets/plugins/pluginsForBS/pluginsForBS.js"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="assets/plugins/miscellaneous/miscellaneous.js"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="assets/js/caplet.custom.js"></script>

</body>
</html>
