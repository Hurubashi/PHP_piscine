<?php

session_start();

$_SESSION['loggued_on_use'] = "";
header("Location: index.php");

?>
