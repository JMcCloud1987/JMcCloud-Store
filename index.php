<?php 
<<<<<<< HEAD

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
			

=======
require_once 'require/error_reporting.php';
require_once 'require/login_check.php';


?>
<!doctype html>
<html>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
	<head>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<body>
		<div id="container">
			<?php include "includes/header.php" ?>
>>>>>>> 0ca2423ff9ff32cfb0aaddad15344d9d3eb033a6
			<header>
				<div class="inset">
				<div class="cf:after">
				<article>
<<<<<<< HEAD
					<img src="img/header.png" hspace="60" >
=======
					<img src="img/header.png" hspace="0" >
>>>>>>> 0ca2423ff9ff32cfb0aaddad15344d9d3eb033a6
					</article>
				</div>
				<div>
				<aside>
<<<<<<< HEAD
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
			<img src="img/MaynardChucks(pair).png" height="380" width="580">
			<img src="img/Black(pair).png" height="380" width="580">
			<img src="img/TwistyChucks(pair).png" height="380" width="580">
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

=======
				<img src="img/sale.png" height="" width="" hspace="0" >
				</aside>
				</div>
				<div>
				<aside>
				<img src="img/slogan.png" hspace="0" >
				</aside>
				</div>
			</header>
			<div class="cf">
			<?php include "includes/nav.php" ?>
			</div>

<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta charset="utf-8">

			<div id="main" class="cf">
				<?php include 'includes/output_list.php' ?>

				<div id="main">
				<div class="inset">
					
						<h1>Home</h1>
							<section id="sect5">
						<h1>Slideshow</h1>

						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="img/Poster1.png" height="300" width="180" alt="Slide 1">
						      <div class="carousel-caption">
						       
						      </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster2.png" height="300" width="180" alt="Slide 2">
						      <div class="carousel-caption">
						       
						      </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster3.png" height="300" width="180" alt="Slide 3">
						      <div class="carousel-caption">
						       
						      </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster4.png" height="300" width="180" alt="Slide 4">
						      <div class="carousel-caption">
						       </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster5.png" height="300" width="180" alt="Slide 5">
						      <div class="carousel-caption">
						       
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster6.png" height="300" width="180" alt="Slide 6">
						      <div class="carousel-caption">
						       
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster7.png" height="300" width="180" alt="Slide 7">
						      <div class="carousel-caption">
						       
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster8.png" height="300" width="180" alt="Slide 8">
						      <div class="carousel-caption">
						       
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster9.png" height="300" width="180" alt="Slide 9">
						      <div class="carousel-caption">
						        
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster10.png" height="300" width="180" alt="Slide 10">
						      <div class="carousel-caption">
						        
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster11.png" height="300" width="180" alt="Slide 11">
						      <div class="carousel-caption">
						        
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster12.png" height="300" width="180" alt="Slide 12">
						      <div class="carousel-caption">
						       
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster13.png" height="300" width="180" alt="Slide 13">
						      <div class="carousel-caption">
						        
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster14.png" height="300" width="180" alt="Slide 14">
						      <div class="carousel-caption">
						        
						        </div>
						    </div>
						    <div class="item">
						      <img src="img/Poster15.png" height="300" width="180" alt="Slide 15">
						      <div class="carousel-caption">
						        

						      </div>
						    </div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

					</section>
				</div>
			</div>
>>>>>>> 0ca2423ff9ff32cfb0aaddad15344d9d3eb033a6
			<?php include 'includes/footer.php' ?>
		</div>
	</body>
</html>