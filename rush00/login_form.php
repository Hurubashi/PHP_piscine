<?php

include("auth.php");
session_start();

if ($_POST) {
	if ($_POST['login'] == 'admin' && $_POST['passwd'] == 'admin') {
		$_SESSION['loggued_on_use'] = $_POST['login'];
		header("Location: admin_profile.php");
	} else if (auth($_POST['login'], $_POST['passwd']) == true) {
		$_SESSION['loggued_on_use'] = $_POST['login'];
		header("Location: index.php");
	} else {
		$_SESSION['loggued_on_use'] = "";
	}
}

?>
<!DOCTYPE html>
<html lang="en" >

	<head>
		<meta charset="UTF-8">
		<title>Login</title>

		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


		<link rel="stylesheet" href="css/style.css">


	</head>

	<body class="form-body">
		<div class="form-login-page">
			<div class="form">
				<form class="login-form" name="login_form.php" action="login_form.php" method="post">
					<input type="text" placeholder="login" name="login"/>
					<input type="password" placeholder="password" name="passwd"/>
					<button>login</button>
					<p class="message-form">Not registered? <a href="create_account_form.php">Create an account</a></p>
				</form>
			</div>
		</div>
	</body>

</html>
