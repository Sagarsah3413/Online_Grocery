<?php
    require_once '../shared/database.php';
    $sharedfolder='../shared/';
    $offset = 0;
    $type = ['grocer','vegetable','household and appliances','health and care'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="../stylesheet/product.css">
    <link rel="stylesheet" href="../stylesheet/header.css">

    <title>homepage</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div id="product">
        
        <?php require_once '../shared/slider.php' ?>
        <style>
            div#image{
                width:100%;
            }
        </style>
        <h3><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('all') ?>">groceries</a></h3>
        <div class="groceries">
            <div class="allsub">
                <div class="sub">
                    <img src="images/snacks.png" alt="rice">
                    <span class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('snacks & drinks') ?>">snacks & drinks</a>
                    </span>
                </div>
                <div class="sub"> 
                    <img src="images/rice.jpg" alt="rice">
                    <span class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('rice, pulses & grains') ?>">rice, pulses & grains</a>
                    </span>
                </div>
                <div class="sub"> 
                    <img src="images/snacks1.jpg" alt="rice">
                    <span class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('oils, masala & salt') ?>">oils, masala & salt</a>
                    </span>
                </div>
                <div class="sub"> 
                    <img src="images/snacks1.jpg" alt="rice">
                    <span class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('aata, sooji, besan & maida') ?>">aata, sooji, besan & maida</a>
                    </span>
                </div>
                <div class="sub">
                    <img src="images/snacks2.jpg" alt="rice">
                    <span class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('dry fruits') ?>">dry fruits</a>
                    </span>
                </div>
                <div class="sub"> 
                    <img src="images/rice.jpg" alt="rice">
                    <span class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('tea, coffee & sugar') ?>">tea, coffee & sugar</a>
                    </span>
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
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span> <?php } ?></p>
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
        
        <h3>vegetables</h3>
        <div class="vegetables">
            <div class="veggies">
                <div class="vege"><img src="images/vege2.jpg"  alt="fruits"></div>
                <div class="vege"><img src="images/vege1.jpg"  alt="fruits"></div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[1]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span> <?php } ?></p>
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
                $query = "SELECT * FROM `products` WHERE `type`='$type[2]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='../home/images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span> <?php } ?></p>
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
                $query = "SELECT * FROM `products` WHERE `type`='$type[3]' LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='../home/images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <span class="rate"><?php echo $row['price']; ?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs <?php echo $row['mprice']; ?></span> <?php } ?></p>
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
<!-- <script src="../shared/ajax.js"></script> -->
<script src="../shared/slider.js"></script>
<script src="../shared/add.js"></script>
</html>