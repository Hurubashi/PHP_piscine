#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    if (is_null($tab) != TRUE)
    {
        $tmp = $tab;
        sort($tmp);
        foreach ($tmp as $key => $value1) {
            if (strcmp($value1, $tab[$key]) !== 0)
                return (0);
        }
        return (1);
    }
    return (0);
}
?>