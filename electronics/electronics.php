<?php
require '../shared/database.php';
require '../shared/function.php';
$url = 'https://onlinebazzar.co';
$sharedfolder='../shared/';
    $offset = 0;
    
    $query = "SELECT * FROM `subcat` WHERE `type` = 'electronics';";
    $data = $dbconnection -> query($query);

    if(isset($_GET['subcat'])){
        $subcat = [];
        $show = urldecode($_GET['subcat']);
        while($row = $data->fetch_assoc()){
            $subcat[$row['subcatname']] = $row['subcatid'];
        }
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/product.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="electro.css">
    <title>Electronics</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div id="product">
        <?php require_once '../shared/slider.php'; ?>
        
        <?php
        if(isset($_GET['subcat']) && $_GET['subcat'] == 'all')
        {
            foreach ($subcat as $key => $value) {
                $query = "SELECT * FROM `products` WHERE `subcatid` = $value ORDER BY `product name` ASC;";  
                $data = $dbconnection->query($query);

                ?>
                <h3><?php echo $key; ?></h3>
                <div class="grid">
                    <?php while($row = $data->fetch_assoc()){ 
                        if(!$row['available'])
                            continue;
                        if($row['description'])
                            fordetailproduct($row,$url,$sharedfolder);
                        else
                            eachproduct($row,$url);
                        ?>
                    <?php } ?>
                </div>
                <?php
            }
        }elseif (isset($_GET['subcat']) && isset($subcat[$show])) {
            $query = "SELECT * FROM `products` WHERE `subcatid` = {$subcat[$show]} ORDER BY `product name` ASC;";
            $data = $dbconnection->query($query);

        ?>

        <h3><?php echo $show; ?></h3>

        <div class="grid">
            <?php while($row = $data->fetch_assoc()){ 
                if(!$row['available'])
                    continue;
                if($row['description'])
                    fordetailproduct($row,$url,$sharedfolder);
                else
                    eachproduct($row,$url);
                ?>
            <?php } ?>
        </div>
        <?php } ?>
        
    </div>
    <?php require_once'../shared/footer.php'; ?>
</body>
    <script src="../shared/add.js"></script>
    <script src="../shared/slider.js"></script>
</html>