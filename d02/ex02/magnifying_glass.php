#! /usr/bin/php
<?php
function upper($matches){
    return ($matches[1].$matches[2].strtoupper($matches[3]).$matches[4].strtoupper($matches[5]).$matches[6]);}
if($argc == 2)
{
    if(file_exists($argv[1]))
        $tab = file($argv[1]);
    else
    {
        echo"file doesn't exist\n";
        exit();
    }
    $string = "";
    foreach ($tab as $line)
    {
        if(preg_match("/<a/", $line) > 0)
            $line = preg_replace_callback('/(<a.*)(title=")(.*)(">)(.*)(<\/a>)/', 'upper' , $line);
        $string .= $line;
    }
    echo $string;
}
?>