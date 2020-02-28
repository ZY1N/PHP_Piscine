<?php
//name, value, expiration date(in seconds)
$time = time();
if($_GET['action'] == 'set')
{
	setcookie($_GET['name'], $_GET['value'], $time + 7777);
}
else if($_GET['action'] == 'get')
{
	echo $_COOKIE[$_GET['name']]."\n";
}
else if($_GET['action'] == 'del')
{
	setcookie($_GET['name'] ,$_COOKIE[$_GET['name']], $time - 60);
}
?>
