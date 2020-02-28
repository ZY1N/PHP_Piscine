<?php
if($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
{
    $base64pic = base64_encode(file_get_contents("./img/42.png"));
	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,".$base64pic."'>\n</body></html>\n";
}
else
{
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="exercise"');
    echo "<html><body>That area is accessible for members only</body></html>\n";
}
?>