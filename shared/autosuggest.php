<?php

require_once 'database.php';

if(isset($_GET['value']))
{
    $value = $_GET['value'];
    // echo $value;
    // return;
    $query = "SELECT * FROM `products` WHERE `product name` LIKE '%$value%' AND `available` = 1;";
    $data = $dbconnection -> query($query);
    $iterate = $data -> num_rows;
    $suggestion = [];
    if($iterate > 4)
    {
        for ($i=0; $i < $iterate; $i++) {
            $row = $data -> fetch_assoc();
            $suggestion[] = $row['product name'];
        }
    }else
    {
        while($row = $data -> fetch_assoc()){
            $suggestion[] = $row['product name'];
        }
    };
    $dbconnection -> close();
    echo json_encode($suggestion);
}
?>