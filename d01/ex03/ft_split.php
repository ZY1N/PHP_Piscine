#! /usr/bin/php
<?php

function ft_split($str)
{
	$ary = explode(" ", $str);
	
	for($i = 0; $ary[$i]; $i++)
	{
		if($ary[$i] == " ")
			unset($ary[$i]);
	}
	sort($ary);
	return($ary);
}

?>
