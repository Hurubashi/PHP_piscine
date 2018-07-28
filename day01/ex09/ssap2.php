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

function get_sort_val($c) {
    $tab = "abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $size = strlen($tab);
    for ($i = 0; $i < $size; $i++) {
        if ($c == $tab[$i])
        {
            print ($tab[$i]);
            print ($i);
            return ($i);
        }
    }
    return (0);
}

function rot_str($str)
{
    $i = 0;
    while ($str[$i])
    {
        $str[$i] = chr(get_sort_val($str[$i]));
        $i++;
    }
    return ($str);
}
$array_lowercase = array_map('strtolower', $sp);
$array_lowercase = array_map('rot_str', $array_lowercase);
array_multisort($array_lowercase, SORT_ASC,SORT_STRING, $sp);
foreach ($sp as $elem)
{
    print ($elem);
    print ("\n");
}
?>