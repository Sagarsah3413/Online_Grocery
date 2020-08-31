<?php
    $sharedfolder='../shared/';
    require_once '../shared/database.php';
    $accept = 0;
    if(isset($_GET['value']) && !empty($_GET['value']))
    {
        $value = $dbconnection -> real_escape_string($_GET['value']);
        $query = "SELECT * FROM `products` WHERE `product name` LIKE '%$value%' ORDER BY `product name` ASC;";
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
            ?>
            <div class='items'> 
                <div>
                    <img class="plus" src='../productimg/<?php echo $row['image']; ?>' alt='product pic'>
                </div>
                <h4><?php echo $row['product name']; ?></h4>
                <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span> <?php } ?></p>
                <div class="cart" id="<?php echo $row['productid'] ?>">
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
            <?php }}; $dbconnection -> close();?>
            
        </div>
    </div>
</body>
    <script src="../shared/add.js"></script>
</html>