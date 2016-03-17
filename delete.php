<?php 
$password = escape_quotes(hash("sha512", $_POST['password']));

$user = get_all_info("SELECT * FROM users WHERE Username='$username'");

// Get the first instance of the user and store it into an array
$userArray = $user->fetch_assoc();

if(count($userArray) <= 0) {
	die("<h2>That username doesn't exist! Please type in the correct username. 
		<a href='delete.php'>Back</a></h2>");
}
if ($userArray['Password'] != $password) {
	die("<h2>Incorrect password! <a href='delete.php'>Back</a></h2>");
}
if (isset($_POST['delete']) && trim($_POST['delete']) != '') {
	if (isset($_POST['username']) && isset($_POST['password']) 
		&& trim($_POST['username']) != '' && trim($_POST['password']) != '') {

		$username = escape_quotes($_POST['username']);
		$password = escape_quotes(hash("sha512", $_POST['password']));

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
}if ($userArray['Password'] != $password) {
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
			<input id="password" type="password" name="password" value="" />
		</li>
		<li>
			<input id="submit_delete" type="submit" name="delete" value="Delete">
		</li>
	</ul>
</form>

<script type="text/javascript" src="_js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="_js/author.js"></script>
		<script type="text/javascript">
$( document ).ready(function() {
    $("#form_delete").submit(function( event ) {
		var answer = confirm("Are you sure you want to delete the user?");

		if (answer == true) {
		    return;
		}

		event.preventDefault();
	});
});
	</script>
	<?php include 'includes/footer.php' ?>
		</div>
	
	</body>
</html>

