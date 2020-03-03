<?php
    session_start();
    if(isset($_SESSION['loggued_on_user']))
        echo "<html>
        <body style=\"background-color: bisque\">
            <h1>Signed In as ". $_SESSION['loggued_on_user']."\n"."</h1>
            <h1>Redirecting in 3 seconds...</h1>
            <meta http-equiv=\"refresh\" content=\"3;url=./landing.php\"/>
        </body>
    </html>";
        
        
    else
    echo "<html>
       <body style=\"background-color: bisque\">
           <h1>YOU AREN'T SIGNED IN</h1>
           <h1>Redirecting in 3 seconds...</h1>
           <meta http-equiv=\"refresh\" content=\"3;url=./landing.php\"/>
       </body>
    </html>";
?>

