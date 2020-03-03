<?php
    session_start();
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
            <h1>Cart is Cleared</h1>
            <h1>Redirecting in 3 seconds...</h1>
            <meta http-equiv="refresh" content="3;url=./cart.php" />
        </body>
</html>