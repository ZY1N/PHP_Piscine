#! /usr/bin/php
<?php
$foo = 0;
foreach ($argv as $item)
{
    if ($foo == 1)
        echo $item."\n";
    $foo = 1;
}
?>