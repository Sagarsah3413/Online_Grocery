<?php
    require_once '../shared/database.php';
    $sharedfolder='../shared/';
    $offset = 0;
    
    $query = "SELECT * FROM `subcat` WHERE `type` = 'stationary';";
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
    <link rel="icon" href="../home/images/logo.png">
    <title>Stationary</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div id="product">
        <?php require_once '../shared/slider.php'; ?>

        <?php
        if(isset($_GET['subcat']) && $_GET['subcat'] == 'instrument and copy')
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
                        ?>
                    <div class="items">
                        <div>
                            <img class="plus" src='../productimg/<?php echo $row['image']; ?>' alt='product pic'>
                        </div>
                        <h4><?php echo $row['product name']; ?></h4>
                        <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span> <?php } ?></p>
                        <div class='cart' id="<?php echo $row['productid'] ?>">
                            <article>
                                <span class="control"><img class="plus" src="../home/images/minus.png" alt=""></span>
                                Quantity 
                                <input type="number" min="0" value="0">
                                <span class="control"><img class="plus" src="../home/images/plus.png" alt=""></span>
                            </article>
                            <p>
                                <img class="plus" src='../home/images/cart.png' alt='cart'> 
                                <span class="addcart">Add To Cart</span>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php
            }
        }
        ?>
        
    </div>
    <?php require_once'../shared/footer.php'; ?>
</body>
<script src="../shared/add.js"></script>
<script src="../shared/slider.js"></script>
</html>