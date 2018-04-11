<!DOCTYPE html>
<html lang="en" >

	<head>
		<meta charset="UTF-8">
		<title>Thanks!</title>

		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


		<link rel="stylesheet" href="css/style.css">


	</head>

	<body>

		<header class="header">
			<div class="container">
				<h1 class="site-title">Music Shop</h1>
				<span class="site-tagline">Turn on music!</span>
			</div>
		</header>
		<nav class="main-nav">
			<div class="container">
				<ul>
					<li><a href="index.php">Genres</a></li>
					<li><a href="#">Shopping Cart</a></li>
					<li class="username"><a href="<?php
session_start();
if ($_SESSION['loggued_on_use']) {
	;
} else {
	echo "login_form.php";
} ?>"><?php if (!$_SESSION['loggued_on_use']) {
	echo "LOGIN"; ?></a></li>
<?php } else {
	echo $_SESSION['loggued_on_use'];
?></a></li>
					<li class="username"><a href="logout.php">Logout</a></li>
<?php } ?>
				</ul>
			</div>
		</nav>

		<body class="form-body">
			<div class="form-login-page">
				<div class="form">
					<form class="login-form" name="login_form.php" action="login_form.php" method="post">
						<h3>Thank you for choosing our shop!</h3>
					</form>
				</div>
			</div>
		</body>

	</body>
</html>
