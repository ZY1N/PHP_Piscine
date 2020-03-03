<?php
    include 'auth.php';
    session_start();

    if (isset($_GET['login']) && isset($_GET['passwd']) && $_GET['login'] != "" && $_GET['passwd'] != "")
    {
        $is_correct = auth($_GET['login'], $_GET['passwd']);
        if($is_correct == TRUE)
        {
            $_SESSION['loggued_on_user'] = $_GET['login'];
            //need to get the coorect session things for cart
            $fh = fopen("userdata.csv", "r");
            while (($line = fgetcsv($fh)) !== FALSE) {
                //print_r($line);
                
                if($line[0] == $_GET['login'])
                {
                    $_SESSION['Sticker'] = $line[1];
                    $_SESSION['Tshirt'] = $line[2];
                    $_SESSION['Jacket'] = $line[3];
                    $_SESSION['Performance Tshirt'] = $line[4];
                    $_SESSION['Pullover'] = $line[5];
                    $_SESSION['Jogger'] = $line[6];
                    $_SESSION['Summer Zipup'] = $line[7]; 
                }
            }
            fclose($fh);
            header("Location: ./loggedin.html");
        }
        else
            header("Location: ./invalidsignin.html");
    }
?>
