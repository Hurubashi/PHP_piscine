<?php
if (!$_POST['login'] || !$_POST['passwd'] || $_POST['submit'] !== "OK") {
    echo "ERROR\n";
    return ;
}

if (!file_exists("../private"))
    mkdir("../private");
if (file_exists("../private/passwd")) {
    $array_data = unserialize(file_get_contents("../private/passwd"));
    foreach ($array_data as $value) {
        if ($value['login'] === $_POST['login']) {
            echo "ERROR\n";
            return;
        }
    }
}
$array_data[] = ['login' => $_POST['login'], "passwd" => hash('whirlpool', $_POST['passwd'])];
file_put_contents("../private/passwd", serialize($array_data));
echo "OK\n";
?>