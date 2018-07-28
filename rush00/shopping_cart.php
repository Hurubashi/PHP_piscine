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

<?php if (!$_SESSION['loggued_on_use']) { ?>
		<body class="form-body">
			<div class="form-login-page">
				<div class="form">
					<form class="login-form" name="login_form.php" action="login_form.php" method="post">
						<h3>Please login and add some stuff to your basket</h3>
					</form>
				</div>
			</div>
		</body>
<?php } else { ?>


<div class="shopping-cart">
	<div class="cart-title">
		Shopping Bag
	</div>

<?php

    include "install.php";
    $conn = mysqli_connect($server, $username, $password);
    mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
    $results = mysqli_query($conn, "SELECT * FROM cart WHERE user_name='$_SESSION[loggued_on_use]'");
    $total = 0;
    while ($row = mysqli_fetch_assoc($results))
    {
        $total = $row['price'] + $total;
        echo '<div class="cart-item">';
        echo 	'<div class="cart-buttons">';
        echo 		'<div class="genre-button"><a href="del_from_cart.php?id_name='.$row['order_id'].'" class="square_btn">DELETE</a></div>';
        echo	'</div>';

        echo	'<div class="image">';
        echo		'<img src="'.$row['img'].'" alt="" />';
        echo	'</div>';

        echo	'<div class="description">';
        echo		'<span>'.$row['name'].'</span>';
        echo		'<span>'.$row['artist'].'</span>';
        echo	'</div>';
        echo	'<div class="total-price">$'.$row['price'].'</div>';
        echo '</div>';
    }
	echo '<div class="cart-item">';
    echo   '<div class="cart-buttons">';
    echo      '<div class="genre-button"><a href="make_order.php?id_name=1" class="square_btn">Make Order</a></div>';
    echo '</div>';
?>

    <div class="cart-item">
        <div class="cart-buttons">
            <div class="cart-total-button">TOTAL</div>
        </div>
        <div class="total-price">$<?php echo $total;?></div>
    </div>

</div>
<?php } ?>

	</body>
</html>
