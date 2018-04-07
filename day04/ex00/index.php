<?php
session_start();
if ($_GET["submit"] === "OK") {
    if ($_GET["login"] != NULL) {
        $_SESSION["login"] = $_GET["login"];
    }
    if ($_GET["passwd"] != NULL) {
        $_SESSION["passwd"] = $_GET["passwd"];
    }
}
else {
    $_GET["login"] = $_SESSION["login"];
    $_GET["passwd"] = $_SESSION["passwd"];
}
?>
<html><body>
<form action="index.php" method="get">
    Username: <input type="text" name="login" value="<?php echo $_GET["login"];?>"/>
    <br />
    Password: <input tupe="text" name="passwd" value="<?php echo $_GET["passwd"];?>"/>
    <input type="submit" name="submit" value="OK">
</form>
</body></html>
