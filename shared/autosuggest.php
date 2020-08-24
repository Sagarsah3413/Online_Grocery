<?php

require_once 'database.php';
// echo 'hered';
// if(isset($_SERVER['Content-type']) && $_SERVER['Content-type'] == 'application/x-www-form-urlencoded')
// {
//     echo "here";
//     return;
// }

if(isset($_GET['value']))
{
    $value = $_GET['value'];
    $query = "SELECT * FROM `products` WHERE `product name` LIKE '%$value%';";
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
    echo json_encode($suggestion);
}
?>