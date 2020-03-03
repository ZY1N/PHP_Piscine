<?php
    session_start();

    if(!isset($_SESSION['loggued_on_user']))
        header("Location: ./notsignedin.html");

    $fp = fopen("order.txt", "a");
    $toread = $_SESSION['loggued_on_user']. "\n\t". 
                'Sticker: '.$_SESSION['Sticker']."\n\t". 
                'Tshirt: '.$_SESSION['Tshirt']."\n\t". 
                'Jacket: '.$_SESSION['Jacket']."\n\t". 
                'Performance Tshirt: '.$_SESSION['Performance Tshirt']."\n\t". 
                'Pullover: '.$_SESSION['Pullover']."\n\t". 
                'Jogger: '.$_SESSION['Jogger']."\n\t". 
                'Summer Zipup: '.$_SESSION['Summer Zipup']."\n\n\n";
    fwrite($fp, $toread);
    fclose($fp);


    $_SESSION['Sticker'] = 0;
    $_SESSION['Tshirt'] = 0;
    $_SESSION['Jacket'] = 0;
    $_SESSION['Performance Tshirt'] = 0;
    $_SESSION['Pullover'] = 0;
    $_SESSION['Jogger'] = 0;
    $_SESSION['Summer Zipup'] = 0;
?>

<html>
        <body style="background-color: bisque">
            <h1>Your Order Has Been Submitted</h1>
            <h1>Redirecting in 3 seconds...</h1>
            <meta http-equiv="refresh" content="3;url=./landing.php" />
        </body>
</html>