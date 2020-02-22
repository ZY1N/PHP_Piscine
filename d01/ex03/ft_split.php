<?php

function ft_split($str)
{
	$ary = explode(" ", $str);
	$ary = array_filter($ary);
	sort($ary);
	return($ary);
}

?>
