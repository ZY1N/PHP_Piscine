#! /usr/bin/php
<?php
function error()
{
    echo "Wrong Format\n";
    exit ;
}

$day_of_week = ary("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
//$num_of_day = ary()
$month = ary("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
//$year =

if($argc > 1)
{
    $str = $argv[1];
    $ary = explode(" ", $str);
    if(count($ary) != 5)
        error();
    //change all the array to lowercase
    $ary = array_change_key_case($ary, CASE_LOWER);
    //check to see if have extraneous tab and space
    if(in_array("/\s+/", $ary))
        error();
    //time to check the format
    //day and day of week check in ary 0 and 2
    if($ary[0])

    


    print_r($ary);
    exit ;
}
error();
?>