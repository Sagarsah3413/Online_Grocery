<?php
    if(!$_COOKIE)
    {
        echo "Bhag Bhosdike";
    }
    else
    {
        foreach($_COOKIE as $index => $value)
            setcookie($index , '', time() - (84600 * 30), '/');

        header('Location: login.php');
    }
 ?>