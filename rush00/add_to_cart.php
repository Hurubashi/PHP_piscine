<?php
include "install.php";
session_start();
if (!$_SESSION['loggued_on_use'])
	header("Location: shopping_cart.php");
else
{
    $conn = mysqli_connect($server, $username, $password);
    mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
    $name = $_GET['id_name'];
    $results = mysqli_query($conn, "SELECT * FROM albom WHERE name='$name'");
    $row = mysqli_fetch_assoc($results);

    $cart = "INSERT INTO cart (id, name, artist, price, img, user_name)
    VALUES ('$row[id]', '$row[name]', '$row[artist]', '$row[price]', '$row[img]', '$_SESSION[loggued_on_use]')";

    $results = mysqli_query($conn, $cart);
    $hren = "Location: alboms.php?id_genre=".$row['id'];
    header("$hren");
}
?>

