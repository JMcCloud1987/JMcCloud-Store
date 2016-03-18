<?php 

require_once 'require/error_reporting.php';
require 'require/error_reporting.php';
require 'require/sharedVar.php';

?>
<!doctype html>

<html>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="_css/styles.css">

	<head>
		<?php include "includes/head.php" ?>
	</head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta charset="utf-8">
		
		<div id="mainmenu">
			<?php include "includes/header.php" ?>
			

			<header>
				<div class="inset">
				<div class="cf:after">
				<article>
					<img src="img/header.png" hspace="60" >
					</article>
				</div>
				<div>
				<aside>
				<img src="img/sale.png" height="" width="" hspace="62" vspace="50">
				</aside>
				</div>
				<div class="cf:before">
				<aside>
				<img src="img/slogan.png" hspace="15" vspace="50">
				</aside>
				</div>
			
			</header>
			<div class="cf">
			<nav id="mainmenu a">
			<?php include "includes/nav.php" ?>
			</nav>
			</head>
			</div>
			</div>
</div>
		
	
	<body class="subpage">
		<h1>New Arrivals</h1>

		<div id="slideshow" class="cf:after">
			<img src="img/MaynardChucks(pair).png" height="180" width="360">
			<img src="img/Black(pair).png" height="180" width="360">
			<img src="img/TwistyChucks(pair).png" height="180" width="360">
			<img src="">
			<img src="">
		</div>
			<div id="slideshow" class="cf:after">
			<img src="img/MaynardChucks(pair).png" height="180" width="360">
			<img src="img/Black(pair).png" height="180" width="360">
			<img src="img/TwistyChucks(pair).png" height="180" width="360">
			<img src="">
			<img src="">
		</div>

	

		<script type="text/javascript" src="_js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="_js/author.js"></script>
		<script type="text/javascript">
		
			$(document).ready(slideshow_apply);

			function slideshow_apply(){
				var slideshow = $('#slideshow ');

				function slideshow_fade() {
					lastimg = slideshow.find('img:last');

					lastimg.delay(2000).animate({'opacity':'0'},1000, function(){
						lastimg.prependTo(slideshow).css({'opacity':'1'});
						slideshow_fade();
					});
				}

				slideshow_fade();

			}

		</script>

			<?php include 'includes/footer.php' ?>
		</div>
	</body>
</html>