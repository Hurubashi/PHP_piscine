#!/usr/bin/php
<?php
function ft_split($str){
    $sp = array_filter(explode(' ', $str));
    sort($sp);
    return ($sp);
}
?>