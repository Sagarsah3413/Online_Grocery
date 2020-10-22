<?php
    $sharedfolder='../shared/';
    require_once '../shared/database.php';
    require_once '../shared/function.php';
    $url='https://www.onlinebazzar.co';
    $accept = 0;
    if(isset($_GET['value']) && !empty($_GET['value']))
    {
        $value = $dbconnection -> real_escape_string($_GET['value']);
        $query = "SELECT * FROM `products` WHERE `product name` LIKE '%$value%' AND `available` = 1 ORDER BY `product name` ASC;";
        $data = $dbconnection -> query($query);
    
        $accept = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="../stylesheet/product.css">
    <link rel="icon" href="../home/images/logo.png">
    <title>search</title>
</head>
<body>
    <?php require_once '../shared/header.php' ?>
    <div id="product">
        <h3>search results</h3>
        <div class="grid">
            <?php
            if($accept) {
            while($row = $data -> fetch_assoc()) {
                if(!$row['available'])
                    continue;
                if(!$row['description'])
                    eachproduct($row,$url);
                else
                    fordetailproduct($row,$url,$sharedfolder);
            ?>
            <?php }}; $dbconnection -> close();?>
        </div>
    </div>
</body>
    <script src="../shared/add.js"></script>
</html>