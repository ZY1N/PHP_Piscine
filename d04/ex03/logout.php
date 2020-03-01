<?php
    session_start();
    $_SESSION['loggued_on_user'] = "";
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
?>