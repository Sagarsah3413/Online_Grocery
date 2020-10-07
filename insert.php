<?php
require_once './shared/database.php';

$count = 672;
while($count <= 728)
{
    $query = "UPDATE `products` SET `image` = '$count" . ".jpg' WHERE `products`.`productid` = $count;";
    $dbconnection -> query($query);
    $count++;
    echo $query . '<br>';
}

?>