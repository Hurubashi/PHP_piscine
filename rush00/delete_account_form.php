<?php

include "auth.php";

session_start();

function ret_index_of_login($arr, $login)
{
	foreach ($arr as $key=>$value) {
		if ($value['login'] == $login) {
			return ($key);
		}
	}
	return (-1);
}

if ($_POST) {
	if ($_POST['submit'] == "NO")
		header("Location: index.php");
	else if ($_POST['submit'] == "YES") {
        include "install.php";
        $conn = mysqli_connect($server, $username, $password);
        mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
        $results = mysqli_query($conn, "SELECT * FROM users");
        $user = "DELETE FROM users WHERE login='$_SESSION[loggued_on_use]'";
        $results = mysqli_query($conn, $user);
		$_SESSION['loggued_on_use'] = "";
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html lang="en" >

	<head>
		<meta charset="UTF-8">
		<title>Don't do this!</title>

		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


		<link rel="stylesheet" href="css/style.css">


	</head>

	<body class="form-body">
		<div class="form-login-page">
			<div class="form">
				<form class="login-form" name="delete_account_form.php" action="delete_account_form.php" method="post">
					<h3>Do you really want to delete your user account?</h3>
					<button type="submit" name="submit" value="NO">no</button>
					<button type="submit" name="submit" value="YES" class="delete-account-yes">yes</button>
				</form>
			</div>
		</div>
	</body>

</html>
