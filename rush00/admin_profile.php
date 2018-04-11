<?php

session_start();

if ($_POST) {
	if ($_POST['submit'] == "BACK") {
		header("Location: index.php");
	} else if ($_POST['submit'] == "PHPMYADMIN") {
		header('Location: http://127.0.0.1:8080/phpmyadmin/');
	}
}

?>
<!DOCTYPE html>
<html lang="en" >

	<head>
		<meta charset="UTF-8">
		<title>Admin profile</title>

		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700|Righteous' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


		<link rel="stylesheet" href="css/style.css">


	</head>

	<body class="form-body">
		<div class="form-login-page">
			<div class="form">
				<form class="login-form" name="admin_profile.php" action="admin_profile.php" method="post">
					<h3>Hello admin!</h3>
					<button type="submit" name="submit" value="PHPMYADMIN">phpmyadmin</button>
					<button type="submit" name="submit" value="BACK" class="admin-form">take me home</button>
				</form>
			</div>
		</div>
	</body>

</html>
