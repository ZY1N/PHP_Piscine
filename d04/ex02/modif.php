<?php
    function error()
    {
        echo "ERROR\n";
        exit ;
    }

    $loginexists = FALSE;
    if($_POST['submit'] == "OK" && isset($_POST['login']) && isset($_POST['newpw']) && isset($_POST['oldpw']))
	{
        if($_POST['login'] == "" || $_POST['newpw'] == "" || $_POST['oldpw'] == '')
		{
			echo "ERROR\n";
			exit ;
		}
        if(file_exists("../htdocs/private/passwd"))
            $ary = unserialize((file_get_contents("../htdocs/private/passwd")));
        else
            $ary = array();
        //check to see if it exists within the ary and exits if it does exist
		foreach ($ary as $key => &$entry)
        {
			//print($entry['login']."\n");
			//print $_POST['login'."\n"];
            if($entry['login'] === $_POST['login'])
			{
                //need to update the entry
				$loginexists = TRUE;
				if ($entry['passwd'] == hash("whirlpool", $_POST['oldpw']))
                    $entry['passwd'] = hash("whirlpool", $_POST['newpw']);
                else
					error();
                break ;
			}
			//print_r($key);
		}
        if($loginexists == FALSE)
        {
            error();
        }
        file_put_contents("../htdocs/private/passwd", serialize($ary));
        echo "OK\n";
        //header('Location: some other page');
        //exit;
    }
    //echo "ERROR\n";
    //header('Location: ./index.html')
?>
