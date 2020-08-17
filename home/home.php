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
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/sidemenu.css">
    <title>homepage</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div class="container">
        <?php require_once '../shared/sidemenu.php' ?>
        <div id="product">
            <section>
                <div id="image">
                    <i id="prev">
                        <img src="images/img4.png" width="50px" alt="">
                    </i>
                    <i id="next">
                        <img src="images/img5.png" width="50px" alt="">
                    </i>
                    <div id="slider">
                        <img src="images/img1.jfif">
                        <img src="images/img2.jfif">
                        <img src="images/img3.jfif">
                        <img src="images/img1.jfif">
                        <img src="images/img2.jfif">
                    </div>
                </div>
            </section>
            <h3>products</h3>
            <h2>groceries</h2>
            <div class="grid">
                <?php
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[0] . "' ORDER BY `productid` DESC LIMIT $offset,5) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div class="img">
                        <img src='images/down.png' alt='product pic' >
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <?php echo $row['price']; ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article><span class="control">+</span> Quantity <span>0</span><span class="control">-</span></article>
                        <p><img src='images/cart.png' alt='cart'> <span class="addcart">Add To Cart</span></p>
                    </div>
                </div>
                <?php } ?>
            </div>

            <h2>fruits</h2>
            <div class="grid">
                <?php
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[1] . "' ORDER BY `productid` DESC LIMIT $offset,5) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div class="img">
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name'] ?></h4>
                    <p>Rs <?php echo $row['price'] ?> <span class="cross">Rs <?php echo $row['mprice'] ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>Quantity <span>0</span></article>
                        <p><img src='images/cart.png' alt='cart'> Add To Cart</p> 
                    </div>
                </div>
                <?php } ?>
            </div>

            <h2>vegetables</h2>
            <div class="grid">
                <?php
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[2] . "' ORDER BY `productid` DESC LIMIT $offset,5) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'>
                    <div class="img">
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <?php echo $row['price']; ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>Quantity <span>0</span></article>
                        <p><img src='images/cart.png' alt='cart'> Add To Cart</p> 
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
    
</body>
<script src="home.js"></script>
</html>
        
        