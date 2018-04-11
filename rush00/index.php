<!DOCTYPE html>
<html lang="en" >

	<head>
		<meta charset="UTF-8">
		<title>Music for everyone!</title>

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
					<li><a href="<?php
session_start();
if ($_SESSION) {
	if ($_SESSION['loggued_on_use'] == 'admin') {
		echo "shop_adm.php";
	} else {
		echo "shopping_cart.php";
	}
} else {
	echo "shopping_cart.php";
} ?>">Shopping Cart</a></li>
					<li class="username"><a href="<?php
if ($_SESSION['loggued_on_use'] == 'admin') {
	echo "admin_profile.php";
} else if ($_SESSION['loggued_on_use']) {
	echo "delete_account_form.php";
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
        <?php
        include "install.php";

        echo		'<section class="content">';
		echo	'<article class="post">';

		echo		'<div class="container">';
		echo			'<h3>Choose Buy Listen</h3>';

		$conn = mysqli_connect($server, $username, $password);
        mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
        $results = mysqli_query($conn, "SELECT * FROM music_genre");
        echo			'<div class="columns thirds">';
        while ($row = mysqli_fetch_assoc($results))
        {
            echo				'<div class="item"> <h4 class="item-title"> '.$row['name'].' </h4>';
            echo					'<img src="'.$row['img'].'" class="item-image" />';
            echo					'<div class="genre-button" ><a href="alboms.php?id_genre='.$row['id'].'" class="square_btn">CHOSE</a></div>';
            echo				'</div>';
        }
		echo			'</div>';
		echo	'</article>';
		echo '</section>';
        ?>

	</body>
</html>
