#!/usr/bin/php
<?php
$input = fopen("php://stdin", "r");
while ($input)
{
    echo "Enter a number: ";
    $var = fgets($input);
    if ($var == FALSE)
    {
        echo "\n";
        fclose($input);
        return ;
    }
    $var = trim($var);
    if (is_numeric($var))
    {
        if($var % 2)
            echo "The number ".$var." is odd\n";
        else
            echo "The number ".$var." is even\n";
    }
    else
        echo "'".$var."' is not a number\n";
}
?>