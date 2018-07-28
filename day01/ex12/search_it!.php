#!/usr/bin/php
<?php
$i = 2;
$arr = array();
while ($argv[$i])
{
    $tmp = explode(':', $argv[$i++]);
    $arr[$tmp[0]] = $tmp[1];
}
if ($arr[$argv[1]])
    print ($arr[$argv[1]]. "\n");
?>
