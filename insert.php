<?php
require_once './shared/database.php';

$count = 183;
while($count <= 197)
{
    $query = "UPDATE `products` SET `image` = '$count" . ".jpeg' WHERE `products`.`productid` = $count;";
    $dbconnection -> query($query);
    $count++;
    echo $query . '<br>';
}

?>