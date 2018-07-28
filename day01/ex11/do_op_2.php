#!/usr/bin/php
<?php
function ft_split($str){
    $sp = array_filter(explode(' ', $str));
//    sort($sp);
    return ($sp);
}
if ($argc == 2)
{
    $sp = $argv[1];
    $sp = trim($sp);
    if (strstr($sp, "+"))
    {
        $sp = explode('+', $sp);
        if (is_numeric(trim($sp[0])) && is_numeric(trim($sp[1])))
            $res = $sp[0] + $sp[1];
    }
    else if (strstr($sp, "-"))
    {
        $sp = explode('-', $sp);
        if (is_numeric(trim($sp[0])) && is_numeric(trim($sp[1])))
            $res = $sp[0] - $sp[1];
    }
    else if (strstr($sp, "*"))
    {
        $sp = explode('*', $sp);
        if (is_numeric(trim($sp[0])) && is_numeric(trim($sp[1])))
            $res = $sp[0] * $sp[1];
    }
    else if (strstr($sp, "/"))
    {
        $sp = explode('/', $sp);
        if (is_numeric(trim($sp[0])) && is_numeric(trim($sp[1])))
            $res = $sp[0] / $sp[1];
    }
    else if (strstr($sp, "%"))
    {
        $sp = explode('%', $sp);
        if (is_numeric(trim($sp[0])) && is_numeric(trim($sp[1])))
            $res = $sp[0] % $sp[1];
    }
    if ($res)
        print ($res);
    else
        echo "Syntax Error!";
    print "\n";
}
else
    echo "Incorrect Parametrs\n";
?>
