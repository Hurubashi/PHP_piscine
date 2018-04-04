#!/usr/bin/php
<?php
$str = $argv[1];
while (strpos($str, "  ") !== FALSE)
    $str = str_replace("  ", " ", $str);
$str = trim($str);
print_r($str);
?>
