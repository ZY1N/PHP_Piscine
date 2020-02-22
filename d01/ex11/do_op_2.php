#! /usr/bin/php
<?php
if($argc == 2)
{
    $string = $argv[1];
    $one = "";
    $two = "";
    $i = 0;
    while(strlen($string) > $i && strpos("-+/*%", $string[$i]) == FALSE)
    {
        $one = $one.$string[$i];
         $i++;
    }
    if(strlen($string) != $i)
        $operator = $string[$i++];
    while(strlen($string) > $i)
    {
        $two = $two.$string[$i];
         $i++;
    }
    $one = preg_replace('/\s+/', '', $one);
    $two = preg_replace('/\s+/', '', $two);
    if(!is_numeric($one) || !is_numeric($two))
    {
        echo "Syntax Error\n";
        exit ;
    }
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
    echo "Incorrect Parameters\n";
?>