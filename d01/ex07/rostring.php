#! /usr/bin/php
<?php
if($argc > 1)
{
    $string = $argv[1];
    $ary = explode(" ", $string);
    $ary = array_filter($ary);
    $flag = 0;
    foreach ($ary as $item)
    {
        if($flag == 1)
            echo $item." ";
        $flag = 1;
    }
    echo $ary[0], "\n";
}
?>