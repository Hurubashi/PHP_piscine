#!/usr/bin/php
<?php
function assos_arr($arr)
{
    $i = 0;
    $res = array();
    while ($arr[$i])
    {
        if (!$res[$arr[$i]])
            $res[$arr[$i]] = intval($arr[$i + 1]);
        else
            $res[$arr[$i]] = ($res[$arr[$i]] + intval($arr[$i + 1])) / 2;
        $i = $i + 2;
    }
    return ($res);
}

$input = fopen("php://stdin", "r");
while (1)
{
    $var = fgets($input);
    if ($var == FALSE)
    {
        fclose($input);
//        print_r($sp);
        $sp = assos_arr($sp);
//        array_multisort($sp, SORT_ASC, $sp);
        ksort($sp);
        foreach ($sp as $elem => $key)
        {
            if ($key)
                print ($elem . ' ' . $key . "\n");
        }
        return ;
    }
    $var = trim($var);
    $arr = explode(';', $var);
    if (!$sp)
        $sp = $arr;
    else
        $sp = array_merge($sp, $arr);
}
print_r($sp);
?>