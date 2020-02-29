<?php
    session_start();
    if($_GET['submit'] == "OK" && isset($_GET['login']) && isset($_GET['passwd']))
	{
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
	}
	//$_SESSION = array();
    //session_destroy();
?>

<html><body>
    <form method="get" action="index.php">
        Username: <input type="text" name="login" value = "<?php echo $_SESSION['login']; ?>"/>
        <br />
        Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>">
        <input type="submit" name="submit" value="OK">
    </form>
</body></html>