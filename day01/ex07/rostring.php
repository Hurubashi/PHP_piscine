#!/usr/bin/php
<?php
if ($argv[1])
{
    $str = $argv[1];
    while (strpos($str, "  ") !== FALSE)
        $str = str_replace("  ", " ", $str);
    $str = trim($str);
    $sp = explode(' ',$str);
    $i = 0;
    while($sp[$i])
        $i++;
    $tmp = $sp[0];
    $sp[0] = $sp[$i];
    $sp[$i] = $tmp;
    $sp = implode($sp, ' ');
    $sp = trim($sp);
    print ($sp);
    print "\n";
}
?>