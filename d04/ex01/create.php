<?php
    if(file_exists("./private") == FALSE)
    {
        mkdir("./private");
    }
    if($_POST['submit'] == "OK" && isset($_POST['login']) && isset($_POST['passwd']))
	{
		if($_POST['login'] == "" || $_POST['passwd'] == "")
		{
			echo "ERROR\n";
			exit ;
		}
        if(file_exists("./private/passwd"))
            $ary = unserialize((file_get_contents("./private/passwd")));
        else
            $ary = array();
        //check to see if it exists within the ary and exits if it does exist
        foreach ($ary as $key => $login)
        {
            if($login === $_POST['login'])
            {
                echo "ERROR\n";
                exit ;
            }
        }
        //if it doesnt exist make a array, serize it and put it into the file
        $name_passwd_ary = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
        $name_passwd_ary = serialize($name_passwd_ary);
        file_put_contents("./private/passwd", $name_passwd_ary);
        echo "OK\n";
        //header('Location: some other page');
        exit;
    }
    //echo "ERROR\n";
    //header('Location: ./index.html')
?>