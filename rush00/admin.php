<?php
    session_start();
    if($_SESSION['loggued_on_user'] != 'admin')
        header("Location: ./notadmin.html");
    $file = file_get_contents("order.txt");

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
        //header('Location: some other page');
        //exit;
    }
    $loginexists = FALSE;
    // if($_POST['submit'] == "Delete" && isset($_POST['login']))
	// {
    //     header("Location: ./logout.php");
    //     if(file_exists("../htdocs/private/passwd"))
    //         $ary = unserialize((file_get_contents("../htdocs/private/passwd")));
    //     else
    //         $ary = array();
    //     //check to see if it exists within the ary and exits if it does exist
	// 	foreach ($ary as $key => &$entry)
    //     {
    //         if($entry['login'] === $_POST['login'])
	// 		{
    //             //need to update the entry
    //             $entry['login'] = "";
    //             $entry['passwd'] = "";
    //             break ;
	// 		}
	// 	}
    //     if($loginexists == FALSE)
    //     {
    //         error();
    //     }
    //     file_put_contents("../htdocs/private/passwd", serialize($ary));
    //     header("Location: ./logout.php");
        //exit;
    //}

?>

<html>
    <header>
        <style>
            #admin{
                text-align: center;
            }
            #recept{
                width:150px;
                border-style:solid;
                position:absolute;
                top: 70px;
            }
            #changestuff{
                position:absolute;
                text-align:center;
                top: 75px;
                left: 40%;

            }
            #deletestuff{
                position:absolute;
                text-align:center;
                top: 200px;
                left: 40%;

            }
            #bigone{
                width:100%;
                height:100%;
            }
        </style>
    </header>
    
    <body style="background-color: bisque">
        <h1 id="admin">ADMIN</h1>
    
        <div id="bigone">
        <div id="recept">   
            <center>ORDERS</center></br>
            <?php echo nl2br($file) ?>
        </div>
    
        <div id="changestuff">
            Change Password
            <form method="post" action="admin.php">
            Username: <input type="text" name="login">
            </br>
            Old Password: <input type="password" name="oldpw">
            </br>
            New Password: <input type="password" name="newpw">
            <input type="submit" name="submit" value="OK">
        </form>
        </div>

        <div id="deletestuff">
            Delete User
            <form method="post" action="logout.php">
            Username: <input type="text" name="login">
            <input type="submit" name="submit" value="Delete">
            </form>
        <a href="landing.php">GO HOME</a>
        </div>
       
        </div>
    </body>
</html>