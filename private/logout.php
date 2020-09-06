<?php
    if(!$_COOKIE)
    {
        echo "Bhag Bhosdike";
        echo "<br><button><a href='login.php'>Idhar click karr</a></button>";
    }
    else
    {
        foreach($_COOKIE as $index => $value)
            setcookie($index , '', time() - (84600 * 30), '/');

        header('Location: login.php');
    }
 ?>