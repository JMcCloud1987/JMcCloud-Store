<?php 
require 'require/sharedVar.php';
require 'require/functions.php';
require 'require/connect.php';
require 'require/error_reporting.php';

if (isset($_POST['delete']) && trim($_POST['delete']) != '') {
	if (isset($_POST['username']) && isset($_POST['password']) && trim($_POST['username']) != '' && trim($_POST['password']) != '') {

		$username = escape_quotes($_POST['username']);
		$password = escape_quotes(hash("sha512", $_POST['password']));

		$user = get_all_info("SELECT * FROM users WHERE Username='$username'");

		// Get the first instance of the user and store it into an array
		$userArray = $user->fetch_assoc();

		if(count($userArray) <= 0) {
			die("That username doesn't exist! Try making <i>$username</i> today! <a href='delete.php'>Back</a>");
		}
		if ($userArray['Password'] != $password) {
			die("<h2>Incorrect password! <a href='update.php'>Back</a></h2>");
		}

		insert_or_update_info("DELETE FROM users WHERE Username='$username'");	

		setcookie("c_user" , '' , time()-50000, '/');

	    $logged = false;

		echo "<h2>User has been deleted. <a href='index.php'>Home</a> </h2><br>";

	    exit;
	}
	else {
		echo "<h2>Please enter a username and password.</h2>";
	}
}

?>
<!doctype html>
<html>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
	<head>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<div id="container">
			<?php include "includes/header.php" ?>
			<?php include "includes/nav.php" ?>
		<h1>Delete User</h1>
		<form id="form_delete" method="post" action="">
				<ul>
					<li>
						<label for="username">Username</label>
						<input id="username" type="text" name="username" value="" />
					</li>
					<li>
						<label for="password">Password</label>
						<input id="password" type="password" name="password" value=""/>
					<li>
						<input type="submit" name="delete" value="delete">
					</li>
				</ul>
			</form>

			<form method="post" action="logout.php">
		 <ul>
		 <li>
		 <input type="submit" name="logout" value="Logout">
		 </li>
		 </ul>
		 </form>

			<?php include 'includes/footer.php' ?>
		</div>
		<h2>Haven't Registered? Register<a href="register.php"> here</a></h4>
	</body>
</html>