<?php
    $server = "localhost";
    $username = "root";
    $password = "fjdjrufu1302";

    $conn = mysqli_connect($server, $username, $password);
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS musicshop");
    $conn = mysqli_connect($server, $username, $password, 'musicshop');
    $conn_content = file_get_contents('musicshop.sql');
    mysqli_multi_query($conn, $conn_content);
    mysqli_error($conn);
    if(!$conn)
        die("Connection failed: ". mysqli_connect_error());
?>

