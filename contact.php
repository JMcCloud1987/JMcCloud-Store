<<<<<<< HEAD
<?php 
require 'require/sharedVar.php';
require 'require/functions.php';
require 'require/connect.php';
require 'require/error_reporting.php';

if (isset($_POST['login']) && trim($_POST['login']) != '') {
	if (isset($_POST['username']) && isset($_POST['password']) && trim($_POST['username']) != '' && trim($_POST['password']) != '') {

		$username = escape_quotes($_POST['username']);
		$password = escape_quotes(hash("sha512", $_POST['password']));

		$user = get_all_info("SELECT * FROM users WHERE Username='$username'");

		// Get the first instance of the user and store it into an array
		$userArray = $user->fetch_assoc();

		if(count($userArray) <= 0) {
			die("That username doesn't exist! Try making <i>$username</i> today! <a href='login.php'>Back</a>");
		}
		if ($userArray['Password'] != $password) {
			die("Incorrect password! <a href='login.php'>Back</a>");
		}
		$salt = hash("sha512", rand() . rand() . rand());

		setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
		setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");

		$userID = $userArray['ID'];
		insert_or_update_info("UPDATE users SET Salt='$salt' WHERE ID='$userID'");

		die("You are now logged in as $username. <a href='index.php'>Home</a>");
	}
	else {
		echo "Please enter a username and password.";
	}
}

?>
<!doctype html>
<html>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="_css/styles.css" >

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
			<div id="main" >	
				<article>
				<img src="img/portrait.png" height="215">
				<h3>Contact</h3>
				<aside>
				<p>
				Arthasnolimits08@yahoo.com
				(909)243-3981
				Instagram: Jasmine_McCloud_Art
				Fontana,CA </p>


				</article>
				
			</div>

					</section>
		
=======
<?php
$to = "omarpatel123@gmail.com";
$subject = "Portfolio Contact";
$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];
$body = <<<EMAIL
Hi! My name is $name and my topic is $topic
$message
Sincerely,
$name
P.S. Oh yeah, my email is $email.
EMAIL;


$header = "From: $email";
if ($_POST) {
 if ($name == '' || $email == '' || $message == '')
 {
 $feedback = 'Fill out all the fields';
 } else {
 mail($to, $subject, $body, $header);
 $feedback = 'Hey, this is actually working!';
 }
}
?>



<!doctype html>
<html>
	<head>
		<title>
			Contact
			:: JMcCloud Art & Design
			:: Art Has No Limit's
		</title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
		<body>
		<div id="container">
		<p id="feedback"><?php echo $feedback; ?></p>
			<?php include "includes/header.php" ?>
			<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
		<?php include "includes/nav.php" ?>
>>>>>>> 0ca2423ff9ff32cfb0aaddad15344d9d3eb033a6
			<div id="main" class="cf">
				<form method="post" action="?">
					<ul>
						<li>
							<label for="name">Name</label>
							<input type="text" name="name" id="name" />
						</li>
						<li>
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						<li>
							<label for="topic">Topic</label>
							<select id="topic" name="topic">
<<<<<<< HEAD
								<option value="Feedback">Feedback</option>
								<option value="Purchase">Purchase</option>
								<option value="Questions">Questions</option>
=======
								<option value="Tacos">Tacos</option>
								<option value="Bananas">Bananas</option>
								<option value="Whatever">Whatever</option>
>>>>>>> 0ca2423ff9ff32cfb0aaddad15344d9d3eb033a6
							</select>
						</li>
						<li>
							<label for="message">Tell me about your day:</label>
							<textarea id="message" name="message" col="42" rows="9"></textarea>
						</li>
						<li>
							<input type="submit" value="submit">
						</li>
					</ul>
				</form>
			</div>
<<<<<<< HEAD

			<?php include 'includes/footer.php' ?>
		</div>
	</body>

=======
			<footer id="closing" class="cf">
				<div class="contact">
					<div class="address">
						Los Angeles Modern Auctions (LAMA)
						16145 Hart St. Van Nuys, CA 91406
					</div>
					<div class="phone">p. 323.904.1950</div>
					<div class="fax">f. 323.904.1954</div>
					<div class="email"><a href="mailto:lama@lamodern.com">lama@lamodern.com</a></div>
				</div>
				<div class="copy">
					All website design, text, and images are Copyright 2015 by Modern Auctions, Inc. ALL RIGHTS RESERVED.
					Any use of materials on this website, including reproduction, modification, distribution or republication, without the prior written consent of MAI, is strictly prohibited.
				</div>
			</footer>
		</div>
	</body>
>>>>>>> 0ca2423ff9ff32cfb0aaddad15344d9d3eb033a6
</html>