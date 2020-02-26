#!/usr/bin/php
<?php 
function error()
{
    echo "Invalid URL \n";
    exit ;
}

if($argc != 2)
{
    echo "error \n";
    exit ;
}

//opening up the url and getting the html
if(($c = curl_init($argv[1])) == false)
    error();
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$str = curl_exec($c);

//time to extract the url and make the directory
$website = preg_replace("/https:\/\//", "", $argv[1]);
$website = preg_replace("/http:\/\//", "", $website);
if(!is_dir($website))
    mkdir($website);

preg_match_all('/<img src="(.*?)".*?>/', $str, $out, PREG_SET_ORDER);
foreach ($out as $instance)
{
    $url = $instance[1];
    if (preg_match("/https:\/\//", $url) == 0)
    {
        if(preg_match("/www/", $url) == 0)
            $url = "https://www.".$website.$url;
        else
            $url = "https://".$website.$url;
    }
    print($url."\n");
    $ch = curl_init ($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 2);
    $rawdata=curl_exec($ch);
    curl_close ($ch);
    file_put_contents($website."/".basename($url), $rawdata);
}
?>