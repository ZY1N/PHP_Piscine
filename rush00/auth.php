<?php
    function auth($login, $passwd)
    {
        $found = FALSE;
        if(file_exists("../htdocs/private/passwd"))
            $ary = unserialize((file_get_contents("../htdocs/private/passwd")));
        foreach ($ary as $key => $item)
        {
            if($item['login'] == $login)
            {
                if($item['passwd'] == hash("whirlpool", $passwd))
                    $found = TRUE;
            }
        }
        return $found;
    }
?>