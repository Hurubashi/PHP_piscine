<?php

function is_login_in_arr($results)
{
    while ($row = mysqli_fetch_assoc($results)) {
		if ($row['login'] == $_POST['login']) {
			return (true);
		}
	}
	return (false);
}

include "install.php";

$conn = mysqli_connect($server, $username, $password);
mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
$results = mysqli_query($conn, "SELECT * FROM users");

if ($_POST) {
	if ($_POST['submit'] == "OK") {
		if ($_POST['passwd'] == false || $_POST['login'] == false)
			;
		else
		{
			if (is_login_in_arr($results))
				header('Location: user_already_exist.php');
			else
			{
                $results = mysqli_query($conn, "SELECT * FROM users");
			    $row = mysqli_fetch_assoc($results);
                $user_passwd = hash('sha256', $_POST['passwd']);
                var_dump($row);
                echo $_POST['login'];
                $row = "INSERT INTO users (login, passwd)
                VALUES ('$_POST[login]', '$user_passwd')";
                $results = mysqli_query($conn, $row);
				header('Location: login_form.php');
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en" >

	<head>
		<meta charset="UTF-8">
		<title>Create account</title>

		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


		<link rel="stylesheet" href="css/style.css">


	</head>

	<body class="form-body">
		<div class="form-login-page">
			<div class="form">
				<form class="register-form" name="create_account_form.php" action="create_account_form.php" method="post">
					<input type="text" placeholder="login" name="login"/>
					<input type="password" placeholder="password" name="passwd"/>
				<!--	 <input type="text" placeholder="email address" name="email"/> --!>
					<button tybe="submit" name="submit" value="OK">create</button>
					<p class="message-form">Already registered? <a href="login_form.php">Sign In</a></p>
				</form>
			</div>
		</div>
	</body>

</html>
