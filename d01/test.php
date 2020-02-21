#!/usr/bin/php

<?PHP

function my_add($p1, $p2)
{
	return $p1+ $p2;
}

print("Hello World\n");

$my_var = 42;
$my_string = "asdfasdf";
$my_tab = array("zero", "un", "deux");
$my_hash = array("key1" => "val1", "key2" => "val2");

//echo "$my_var\n$my_string";

$result = "21" + "21";
//echo $result."\n";

$my_tab[0] = "00";

//echo $my_tab[0];
//echo $my_hash["key1"];

//print($my_tab);
//print_r($my_tab);

$abc =  my_add("3", "4");

//echo $abc

//if ($my_tab[1] =="un")
//echo "OK";
//else
//echo "KO";


echo "$argc\n";
print_r($argv);

foreach ($my_tab as $elem)
{
	echo $elem;	
}

?>
