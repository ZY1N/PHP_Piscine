<?php
    if(file_exists("../htdocs/private") == FALSE)
    {
        if(file_exists("../htdocs") == FALSE)
            mkdir("../htdocs");
        mkdir("../htdocs/private");
    }
    if($_POST['submit'] == "OK" && isset($_POST['login']) && isset($_POST['passwd']))
	{
		if($_POST['login'] == "" || $_POST['passwd'] == "")
		{
			echo "ERROR\n";
			exit ;
		}
        if(file_exists("../htdocs/private/passwd"))
            $ary = unserialize((file_get_contents("../htdocs/private/passwd")));
        else
            $ary = array();
        //check to see if it exists within the ary and exits if it does exist
		foreach ($ary as $key => $item)
        {
            if($item['login'] === $_POST['login'])
            {
                echo "ERROR\n";
                exit ;
            }
        }
        //if it doesnt exist make a array, serize it and put it into the file
        $name_passwd_ary = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
        $ary[] = $name_passwd_ary;
        //$name_passwd_ary = serialize($name_passwd_ary);
        file_put_contents("../htdocs/private/passwd", serialize($ary));
        echo "OK\n";
        //header('Location: some other page');
        exit;
    }
    //echo "ERROR\n";
    //header('Location: ./index.html')
?>
