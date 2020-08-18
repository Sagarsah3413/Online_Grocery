<?php
    require_once '../shared/database.php';
    session_start();
    $offset = 0;
    $type = ['grocer','fruit','vegetable'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fruits.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/sidemenu.css">
    <title>Groceries</title>
</head>
<body>
    <?php require_once '../shared/header.php'; ?>
    <div class="container">
        <?php require_once '../shared/sidemenu.php' ?>
        <div id="product">
            <h2>fruits</h2>
            <div class="grid">
                <?php
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[1] . "' ORDER BY `productid` DESC LIMIT $offset,7) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img src='../home/images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <?php echo $row['price']; ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article><span class="control"><img src="../home/images/minus.png" alt=""></span> Quantity <span class="quantity"> 0</span><span class="control"><img src="../home/images/plus.png" alt=""></span></article>
                        <p><img src='../home/images/cart.png' alt='cart'> <span class="addcart">Add To Cart</span></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

<script src="fruits.js"></script>
</html>