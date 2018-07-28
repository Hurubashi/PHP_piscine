<?php

function is_login_and_passwd_in_arr($results, $login, $hashed_pass) {

    while ($row = mysqli_fetch_assoc($results)) {
		if ($row['login'] == $login && $row['passwd'] == $hashed_pass)
			return (true);
	}
	return (false);
}


function auth($login, $passwd) {
    include "install.php";
    $conn = mysqli_connect($server, $username, $password);
    mysqli_select_db($conn, "musicshop") or die ("mysqli_error($conn)");
    $results = mysqli_query($conn, "SELECT * FROM users");
	$hashed_pass = hash('sha256', $passwd);
	if (is_login_and_passwd_in_arr($results, $login, $hashed_pass)) {
		return (true);
	}
	return (false);
}

?>
