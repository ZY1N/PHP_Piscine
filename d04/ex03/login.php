<?php
    include 'auth.php';
    session_start();

    if (isset($_GET['login']) && isset($_GET['passwd']) && $_GET['login'] != "" && $_GET['passwd'] != "")
    {
        $is_correct = auth($_GET['login'], $_GET['passwd']);
        if($is_correct == TRUE)
        {
            echo"OK\n";
            $_SESSION['loggued_on_user'] = $_GET['login'];
        }
        else
            echo"ERROR\n";
    }
?>