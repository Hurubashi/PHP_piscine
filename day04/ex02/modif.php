<?php
if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] || $_POST['submit'] !== "OK") {
    echo "ERROR\n";
    return ;
}
if (!file_exists("../private"))
    mkdir("../private");
if (file_exists("../private/passwd"))
{
    $array_data = unserialize(file_get_contents("../private/passwd"));
    foreach ($array_data as $value => $acc) {
        if ($acc['login'] === $_POST['login'] && $acc['passwd'] === hash('whirlpool', $_POST['oldpw']))
        {
            echo "IF WORKS!";
            $array_data[$value]['passwd'] = hash('whirlpool', $_POST['newpw']);
            $OK = 1;
        }
    }
    if ($OK)
    {
        file_put_contents("../private/passwd", serialize($array_data));
        echo "OK\n";
        return ;
    }
}
echo "ERROR\n";
?>
