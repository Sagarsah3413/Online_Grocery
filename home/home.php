<?php
    require_once '../shared/database.php';
    $sharedfolder='../shared/';
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
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <title>homepage</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div id="product">
        <div id="search">
            <input type="text">
            <span><img src="images/search.png" alt=""></span>
        </div>
        <div id="image">
            <i id="prev">
                <img src="images/img4.png" width="50px" alt="">
            </i>
            <i id="next">
                <img src="images/img5.png" width="50px" alt="">
            </i>
            <div id="slider">
                <div class="img1">
                    <p><a href="../groceries/groceries.php">add to cart</a></p>
                </div>
                <div class="img2">
                    <p> <a href="../fruits/fruits.php">buy now</a></p>
                </div>
                <div id="img3">
                    <p><a href="../vegetables/vegetables.php">free home delievery</a></p>
                </div>
                <div class="img1">
                    <p><a href="../groceries/groceries.php">add to cart</a></p>
                </div>
                <div class="img2">
                    <p><a href="../fruits/fruits.php">buy now</a></p>
                </div>
            </div>
        </div>
        <h3>groceries</h3>
        <div class="groceries">
            <div class="allsub">
                <div class="sub"><img src="images/snacks2.jpg" alt="rice">
                    <span class="text">snacks & drinks</span>
                </div>
                <div class="sub"> <img src="images/rice.jpg" alt="rice">
                    <span class="text">rice, pulses & grains</span>
                </div>
                <div class="sub"> <img src="images/snacks1.jpg" alt="rice">
                    <span class="text">oils, masala & salt</span>
                </div>
                <div class="sub"> <img src="images/snacks1.jpg" alt="rice">
                    <span class="text">aata, sooji, besan & maida</span>
                </div>
                <div class="sub"><img src="images/snacks2.jpg" alt="rice">
                    <span class="text">dry fruits</span>
                </div>
                <div class="sub"> <img src="images/rice.jpg" alt="rice">
                    <span class="text">tea, coffee & sugar</span>
                </div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                // $query = "SELECT * FROM (SELECT * FROM grocers.`products` where type='" . $type[0] . "' ORDER BY productid DESC LIMIT $offset,5) sub ORDER BY productid ASC;";
                $query = "SELECT * FROM `products` WHERE `type`='$type[0]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus"src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>
                            <span class="control"><img class="plus" src="images/minus.png" alt=""></span>
                            Quantity 
                            <input type="number" min="0" value="0">
                            <span class="control"><img class="plus" src="images/plus.png" alt=""></span>
                        </article>
                        <p>
                            <img class="plus" src='images/cart.png' alt='cart'> 
                            <span class="addcart">Add To Cart</span>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <h3>fruits</h3>
        <div class="fruits">
            <div class="all">
                <div class="fruit1"><img src="images/fruit1.jpg"  alt="fruits"></div>
                <div class="fruit1"><img src="images/fruit2.jpg"  alt="fruits"></div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[0]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>
                            <span class="control"><img class="plus" src="images/minus.png" alt=""></span> 
                            Quantity 
                            <input type="number" min="0" value="">
                            <span class="control"><img class="plus" src="images/plus.png" alt=""></span>
                        </article>
                        <p>
                            <img class="plus" src='images/cart.png' alt='cart'>
                            <span class="addcart">Add To Cart</span>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <h3>vegetables</h3>
        <div class="vegetables">
            <div class="veggies">
                <div class="vege"><img src="images/vege2.jpg"  alt="fruits"></div>
                <div class="vege"><img src="images/vege1.jpg"  alt="fruits"></div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[0]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>
                            <span class="control"><img src="images/minus.png" alt=""></span>
                            Quantity
                            <input type="number" min="0" value="" >
                            <span class="control"><img src="images/plus.png" alt=""></span>
                        </article>
                        <p>
                            <img src='images/cart.png' alt='cart'> 
                            <span class="addcart">Add To Cart</span>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <h3>household and appliances</h3>
        <div class="fruits">
            <div class="all">
                <div class="fruit1"><img src="images/fruit1.jpg"  alt="fruits"></div>
                <div class="fruit1"><img src="images/fruit2.jpg"  alt="fruits"></div>
                <div class="fruit1"><img src="images/dryfruit.jpg"  alt="fruits"></div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[0]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='../home/images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>
                            <span class="control"><img class="plus" src="../home/images/minus.png" alt=""></span> 
                            Quantity 
                            <input type="number" min="0" value="">
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
        </div>
        <h3>health and care</h3>
        <div class="fruits">
            <div class="all">
                <div class="fruit1"><img src="images/fruit1.jpg"  alt="fruits"></div>
                <div class="fruit1"><img src="images/fruit2.jpg"  alt="fruits"></div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[0]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='../home/images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <span class="cross">Rs <?php echo $row['mprice']; ?></span></p>
                    <div class='cart' id="<?php echo $row['productid'] ?>">
                        <article>
                            <span class="control"><img class="plus" src="../home/images/minus.png" alt=""></span> 
                            Quantity 
                            <input type="number" min="0" value="">
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
        </div>
    </div>
    
    <?php require_once'../shared/footer.php'; ?>
</body>
<script src="home.js"></script>
<!-- <script src="../shared/ajax.js"></script> -->
</html>