<?php
include "install.php";
session_start();
if (!$_SESSION['loggued_on_use'])
    echo "Need to log in";
else
{
    $conn = mysqli_connect($server, $username, $password);
    mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
    $name = $_SESSION['loggued_on_use'];

    echo $name;
    $results = mysqli_query($conn, "SELECT * FROM cart WHERE user_name='$name'");
    while ($row = mysqli_fetch_assoc($results))
    {
        $i = 1;
        var_dump($row);
        $order = "INSERT INTO orders (name, artist, price, user, order_id)
         VALUES ('$row[name]', '$row[artist]', '$row[price]', '$_SESSION[loggued_on_use]', '$row[order_id]');";
        mysqli_query($conn, $order);
	}

    $cart = "DELETE FROM cart WHERE user_name='$_SESSION[loggued_on_use]'";
	$results = mysqli_query($conn, $cart);
	if (!$i) {
		$hren = "Location: shopping_cart.php";
	} else {
    	$hren = "Location: thanks_for_making_order.php";
	}
    header("$hren");
}
?>
