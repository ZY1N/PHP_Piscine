#! /usr/bin/php
<?php

function sortfunc($a, $b)
{
    $a = strtolower($a);
    $b = strtolower($b);
    $a = $a."\0";
    $b = $b."\0";
    $i = 0;

    $order = "abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|:\"<>?~";
    if ($a == $b)
        return 0;
    else
    {
        while($a[$i] && $b[$i])
        {
            if(strpos($order, $a[$i]) > strpos($order, $b[$i]))
                return 1;
            else if (strpos($order, $a[$i]) < strpos($order, $b[$i]))
                return -1;
            $i++;
        }
        if(strlen($a) > strlen($b))
            return 1;
        else
            return -1;
    }
}

function ft_split($str)
{
	$ary = explode(" ", $str);
	$ary = array_filter($ary);
	sort($ary);
	return($ary);
}

$foo = 0;
$ary = array();
foreach ($argv as $item)
{
    if ($foo == 1)
        $ary = array_merge($ary, explode(" ", $item));
    $foo = 1;
}

$ary = array_filter($ary);
usort($ary, "sortfunc");

 foreach ($ary as $item)
 {
     echo $item."\n";
 }

?>