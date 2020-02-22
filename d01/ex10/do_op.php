#! /usr/bin/php
<?php
if($argc == 4)
{
    $one = preg_replace('/\s+/', '', $argv[1]);
    $operator = preg_replace('/\s+/', '', $argv[2]);
    $two = preg_replace('/\s+/', '', $argv[3]);
    $answer = 0;

    if($operator == '+')
        $answer = $one + $two;
    else if($operator == '-')
        $answer = $one - $two;
    else if($operator == '*')
        $answer = $one * $two;
    else if($operator == '/')
        $answer = $one / $two;
    else if($operator == '%')
        $answer = $one % $two;

    echo $answer."\n";
}
else
{
	echo "Incorrect Parameters\n";
}

?>
