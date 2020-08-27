<?php
require_once './shared/database.php';

$count = 1;
while($count <= 500)
{
    $query = "UPDATE `products` SET `image` = '$count" . ".jpg' WHERE `products`.`productid` = $count;";
    $dbconnection -> query($query);
    $count++;
    echo $query . '<br>';
}

?>