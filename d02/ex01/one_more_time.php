#! /usr/bin/php
<?php
function error()
{
    echo "Wrong Format\n";
    exit ;
}

function error2()
{
    echo "Incorrect Elements\n";
    exit ;
}

$day_of_week = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$month = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre", "Janvier", "Fevrier", "Mars", 
    "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
if($argc > 1)
{
    $str = $argv[1];
    $ary = explode(" ", $str);
    if(count($ary) != 5)
        error();
    //check to see if have extraneous tab and space
    if(in_array("/\s+/", $ary))
        error();
    //time to check the format
    //day and day of week check in ary 0 and 2
    if(in_array($ary[0], $day_of_week) === FALSE || in_array($ary[2], $month) === FALSE)
        error2();
    //check the day of month
    if(!is_numeric($ary[1]) && !($ary[i] > 1 && $ary[i] < 32))
        error2();
    //check the time
    $timer = explode(":", $ary[4]);
    if(count($timer) != 3)
        error2();
    if(!is_numeric($timer[0]) && !is_numeric($timer[1]) && !is_numeric($timer[2]))
        error2();
    if(!($timer[0] >= 1 && $timer[0] <= 24 && $timer[1] >= 0 && $timer[1] <= 59 && $timer[2] >= 0 && $timer[2] <= 59))
        error2();
    //conversion into seconds
    $month = (array_search($ary[2], $month) + 1) % 12;
    $day = (array_search($ary[0], $day_of_week) + 1) % 7;
    $date = "$ary[3]-$month-$ary[1] $ary[4]";
    $format = 'Y-m-d h:i:s';
    $d = DateTime::createFromFormat($format, $date);
    $errors = DateTime::getLastErrors(); 
    if($errors["warning_count"] > 0)
        error2();
    if($d === FALSE)
        error2();
    $diff = strtotime($date) - strtotime('1970-01-01 01:00:00');
    echo $diff."\n";
    exit ;
}
error();
?>