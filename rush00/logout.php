<?php
    session_start();
    if($_POST['submit'] == "Delete" && isset($_POST['login']))
	{
        echo"hello";
        //header("Location: ./logout.php");
        if(file_exists("../htdocs/private/passwd"))
            $ary = unserialize((file_get_contents("../htdocs/private/passwd")));
        else
            $ary = array();
        //check to see if it exists within the ary and exits if it does exist
        echo"hello";
		foreach ($ary as $key => &$entry)
        {
            if($entry['login'] === $_POST['login'])
			{
                //need to update the entry
                $entry['login'] = "";
                echo $entry['login'];
                $entry['passwd'] = "";
                echo $entry['passwd'];
                echo"hello";
                break ;
            }
            print_r($key);
		}
        file_put_contents("../htdocs/private/passwd", serialize($ary));
    }

    $_SESSION['loggued_on_user'] = "";
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
?>

<!-- <html>
        <body style="background-color: bisque">
            <h1>Logged Out</h1>
            <h1>Redirecting in 3 seconds...</h1>
            <meta http-equiv="refresh" content="3;url=./landing.php" />
        </body>
</html> -->