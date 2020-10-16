<?php
    require_once '../shared/database.php';

    $input = file_get_contents('php://input');
    $input = json_decode($input);

    if(!($input))
    {
        echo json_encode($input);
        return;
    }
    $query = "SELECT `productid`,`image` from `products` where `productid` in (" . implode(',',$input) .");";
    $data = $dbconnection -> query($query);
    $array = [];
    
    while($row = $data -> fetch_assoc())
    {
        $array[$row['productid']] = explode(',',$row['image'])[0];
    }
    echo json_encode($array);
?>