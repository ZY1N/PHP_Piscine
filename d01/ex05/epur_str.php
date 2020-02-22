#! /usr/bin/php
<?php
function ft_split($str)
{
	$ary = explode(" ", $str);
	$ary = array_filter($ary);
	sort($ary);
	return($ary);
}

$ary = ft_split($argv[1]);
$flag = 0;

foreach ($ary as $item)
{
    if($flag == 1)
        echo " ";
    echo $item;
    $flag = 1;
}
echo "\n";

?>