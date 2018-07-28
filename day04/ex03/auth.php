<?php
function auth($login, $password)
{
    if (file_exists("../private/passwd"))
    {
        $array_data = unserialize(file_get_contents("../private/passwd"));
        foreach ($array_data as $value) {
            if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $password))
                return TRUE;
        }
    }
    return FALSE;
}
?>