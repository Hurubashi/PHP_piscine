#!/usr/bin/php
<?php
function ft_split($str){
    $sp = array_filter(explode(' ', $str));
    sort($sp);
    return ($sp);
}
if ($argc == 4)
{
    $sp = ft_split($argv[1]);
    $i = 2;
    while ($argv[$i])
        $sp = array_merge($sp, ft_split($argv[$i++]));
    $i = 0;
    if (!(strcmp($sp[1], "+")))
        $res = $sp[0] + $sp[2];
    if (!(strcmp($sp[1], "-")))
        $res = $sp[0] - $sp[2];
    if (!(strcmp($sp[1], "*")))
        $res = $sp[0] * $sp[2];
    if (!(strcmp($sp[1], "/")))
        $res = $sp[0] / $sp[2];
    if (!(strcmp($sp[1], "%")))
        $res = $sp[0] / $sp[2];
    print ($res);
}
else
    echo "Incorrect Parametrs\n";
?>