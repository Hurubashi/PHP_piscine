<?php
include "install.php";
session_start();
if (!$_SESSION['loggued_on_use'])
    echo "Need to log in";
else
{
    $conn = mysqli_connect($server, $username, $password);
    mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
    $name = $_GET['id_name'];

    $cart = "DELETE FROM cart WHERE order_id='$name'";
    $results = mysqli_query($conn, $cart);
	if ($_SESSION['loggued_on_use'] == "admin") {
		$go_back_addr = "Location: shop_adm.php";
	} else {
		$go_back_addr = "Location: shopping_cart.php";
	}
    header("$go_back_addr");
}
?>
