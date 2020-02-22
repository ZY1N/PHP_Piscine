#! /usr/bin/php
<?php
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
sort($ary);

foreach ($ary as $item)
{
    echo $item."\n";
}

?>