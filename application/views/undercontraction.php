<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Countdown Under Construction Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Under Construction template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo(base_url())?>under-contraction/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo(base_url())?>under-contraction/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo(base_url())?>under-contraction/css/jquery.countdown.css" />
<meta name="google-site-verification" content="3j3_eWfQDOcllhNjsAtiM2NKiEHz8Ao3vZmJhS6Je8A" />
<!-- font-awesome icons -->
<link href="<?php echo(base_url())?>under-contraction/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--//fonts--> 
</head>
<body>
	<div class="w3layouts-banner-slider">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="agileits-banner-info">
									<div class="banner-dot"></div>
								</div>
							</li>
							<li>
								<div class="agileits-banner-info agileits-banner-info1">
									<div class="banner-dot"></div>
								</div>
							</li>
						</ul>
					</div>
					<script src="<?php echo(base_url())?>under-contraction/js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
	</div>
    <div class="bg agile">
     	<div class="container">
			<h1>Countdown Under Construction</h1>
			<!--timer-->
			<div class="agileits-timer"> 
				<div class="clock">
					<div class="column days">
						<div class="timer" id="days"></div>
						<div class="text">DAYS</div>
					</div>
					<div class="timer days"></div>
					<div class="column">
						<div class="timer" id="hours"></div>
						<div class="text">HOURS</div>
					</div>
					<div class="timer"></div>
					<div class="column">
						<div class="timer" id="minutes"></div>
						<div class="text">MINUTES</div>
					</div>
					<div class="timer"></div>
					<div class="column">
						<div class="timer" id="seconds"></div>
						<div class="text">SECONDS</div>
					</div>
					<div class="clear"> </div>
				</div>	 
			</div>
			<!--//timer-->
			<!--newsletter-->
			<div class="newsletter">
				<h2>Subscribe Now</h2>
				<form action="#" method="post">
					<input type="text" name="email" size="30" required="" placeholder="Please fill your email" />
					<input type="submit" value="Subscribe" />
				</form>
            </div>
			<!--//newsletter-->
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
				</ul>
			</div>
			<!--copyright-->
			<div class="copy w3ls">
		       <p>© 2017 Countdown Under Construction . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
			<!--//copyright-->
        </div>
   </div>
<!--scripts--> 
	<script type="text/javascript" src="<?php echo(base_url())?>under-contraction/js/moment.js"></script>
	<script type="text/javascript" src="<?php echo(base_url())?>under-contraction/js/moment-timezone-with-data.js"></script>
	<script type="text/javascript" src="<?php echo(base_url())?>under-contraction/js/timer.js"></script>
<!--//scripts--> 
</body>
</html>	