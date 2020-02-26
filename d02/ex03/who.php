#! /usr/bin/php
<?php 
    date_default_timezone_set('America/Los_Angeles');
    $binarydata = fopen('/var/run/utmpx', 'r');
     $format = "a256user/a4id/a32line/ipid/itype/L2time/a256host/I16h/";
    while($line = fread($binarydata, 628))
    {
        $ary = unpack($format, $line);
        if($ary['type'] == 7)
            print($ary['user']." ".$ary['line']."  ".date("M d H:i", $ary['time1'])."\n");
    }
    fclose($binarydata);
?>