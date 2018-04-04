#!/usr/bin/php
<?php
function ft_split($str){
    $sp = array_filter(explode(' ', $str));
    sort($sp);
    return ($sp);
}
$sp = ft_split($argv[1]);
$i = 2;
while ($argv[$i])
    $sp = array_merge($sp, ft_split($argv[$i++]));
sort($sp);
foreach ($sp as $elem)
{
    print ($elem);
    print ("\n");
}
?>