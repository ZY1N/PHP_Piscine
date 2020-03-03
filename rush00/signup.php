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
            header('Location: ./signupfailure.html');
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
                header('Location: ./signupfailure.html');
                exit ;
            }
        }
        //if it doesnt exist make a array, serize it and put it into the file
        $name_passwd_ary = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
        $ary[] = $name_passwd_ary;
        file_put_contents("../htdocs/private/passwd", serialize($ary));
        //make csv file
        //$headers = array("");

        if(!file_exists("userdata.csv"))
        {
            fclose(fopen("userdata.csv", "w"));
        }
        $fh = fopen("userdata.csv", "a");
        $data = array(
                "name" => $_POST['login'],
                "Sticker" => "0",
                "Tshirt" => "0",
                "Jacket" => "0",
                "Performance Tshirt" => "0",
                "Pullover" => "0",
                "Jogger" => "0",
                "Summer Zipup" => "0",
        );
        fputcsv($fh, $data);
        fclose($fh);        
        header('Location: ./signupsuccess.html');
    }
?>
