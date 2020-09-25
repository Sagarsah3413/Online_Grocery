<?php

// $catagory=[];
// $query = "SELECT * FROM subcat;";
// $data = $dbconnection -> query($query);
// while($row = $data -> fetch_assoc()){
//     $catagory[$row['subcatid']] = 0;
// }

require '../shared/writing.php';
$query = "SELECT * FROM products;";
$data = $dbconnection -> query($query);
while ($row = $data -> fetch_assoc()) {
    if($row['productid'] <= 602)
    {
        $query = "UPDATE `products` SET `wholeprice`='{$row['price']}' WHERE `productid`='{$row['productid']}';";
        $dbconnection -> query($query);
    }
}

?>