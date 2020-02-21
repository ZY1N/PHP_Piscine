#! /usr/bin/php
<?php

$file = fopen("php://stdin", 'r');

while(1)
{
	echo "Enter a number: ";
	$nbr = fgets($file);
	$nbr = preg_replace("/[\n]/", "", $nbr);
	if (feof($file))
	{
		echo "^D\n";
		break;
	}	
	if (is_numeric($nbr))
	{
		echo "The number $nbr is";
		if ($nbr % 2 == 0)
			echo " even\n";
		else if ($nbr % 2 == 1)
			echo " odd\n";
	}
	else
		echo "'$nbr' is not a number\n";
}

fclose($file);
?>
