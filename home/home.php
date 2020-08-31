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
    <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="../stylesheet/product.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="icon" href="images/logo.png">
    <title>Home</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>

    <div class="nepali">
        <div class="tribhuwan">
            <div class="chowk"><img src="images/chowk.jpg" alt="chowk"></div>
            <p>॥ शॉपिंग्को लागि <span>ADD TO CART</span>  मा क्लिक गर्नुहोस् ॥
            ॥ सामान थरी थरी ,<span> राजबिराज</span> भरी , <span> FREE HOME DELIVERY</span> ॥</p>
        </div>
        <div class="discount">
            <div><img src="images/offer.jpg" alt="offer"></div>
            <p>॥ <span>Rs.500 + </span> को  <span>SHOPPING</span> मा
             <span>Rs.50</span>  सम्मको  <span>COUPON CODE</span>
             र <span>Rs.3000 + </span> को <span>SHOPPING</span> मा
            <span>EXCITING SURPRISE GIFTS</span> पनि पाउनुहोस् ॥</p>
        </div>
    </div>

    <div id="product">
        
        <?php require_once '../shared/slider.php' ?>
        <h3><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('all') ?>">groceries</a></h3>
        <div class="groceries">
            <div class="allsub">
                <div class="sub">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('snacks & drinks') ?>">snacks & drinks</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('snacks & drinks') ?>"><img src="images/snacks.png" alt="rice"></a>
                    
                </div>
                <div class="sub">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('rice, pulses & grains') ?>">rice, pulses & grains</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('rice, pulses & grains') ?>"><img src="images/groc2.jpeg" alt="rice"></a>
                    
                </div>
                <div class="sub"> 
                    <figcaption class="text">
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('oils, masala & salt') ?>">oils, masala & salt</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('oils, masala & salt') ?>"><img src="images/groc3.jpeg" alt="rice"></a>
                    
                </div>
                <div class="sub">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('aata, sooji, besan & maida') ?>">aata, sooji, besan, maida & sattu</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('aata, sooji, besan & maida') ?>"> <img src="images/groc4.jpeg" alt="rice"></a>
                    
                </div>
                <div class="sub">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('dry fruits') ?>">dry fruits</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('dry fruits') ?>"><img src="images/groc5.jpeg" alt="rice"></a>
                    
                </div>
                <div class="sub">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('tea, coffee & sugar') ?>">tea, coffee & sugar</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('tea, coffee & sugar') ?>"><img src="images/groc6.jpeg" alt="rice"></a>
                    
                </div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                // $query = "SELECT * FROM (SELECT * FROM grocers.`products` where type='" . $type[0] . "' ORDER BY productid DESC LIMIT $offset,5) sub ORDER BY productid ASC;";
                $query = "SELECT * FROM `products` WHERE `type`='$type[0]' ORDER BY `product name` ASC LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus"src='../productimg/<?php echo $row['image']; ?>' alt='product pic'>
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
        
        <h3><a href="<?php echo $sharedfolder; ?>../vegetables/vegetables.php?subcat=<?php echo urlencode('all') ?>">vegetables</a></h3>
        <div class="vegetables">
            <div class="veggies fortwo">
                <div class="vege">
                    <a href="<?php echo $sharedfolder; ?>../vegetables/vegetables.php?subcat=<?php echo urlencode('all') ?>"><img src="images/aalo.jpeg"  alt="fruits"></a>
                </div>
                <div class="vege">
                    <a href="<?php echo $sharedfolder; ?>../vegetables/vegetables.php?subcat=<?php echo urlencode('all') ?>"><img src="images/img4.jpeg"  alt="fruits"></a>
                </div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[1]' ORDER BY `product name` ASC LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img src='../productimg/<?php echo $row['image']; ?>' alt='product pic'>
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
        <h3><a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('all') ?>">household and appliances</a></h3>
        <div class="fruits">
            <div class="all forthree">
                <div class="fruit1">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('house cleaning products') ?>">house cleaning products</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('house cleaning products') ?>"><img src="images/clean.jpeg"  alt="fruits"></a>
                </div>
                <div class="fruit1">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('pooja products') ?>">pooja products</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('pooja products') ?>"><img src="images/pooja.jpeg"  alt="fruits"></a>
                </div>
                <div class="fruit1">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('home appliances') ?>">home appliances</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('home appliances') ?>"><img src="images/appliances.jpeg"  alt="fruits"></a>
                </div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[2]' ORDER BY `product name` ASC LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='../productimg/<?php echo $row['image']; ?>' alt='product pic'>
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
        <h3><a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('all') ?>">health and care</a></h3>
        <div class="fruits">
            <div class="all fortwo">
                <div class="fruit1 vege">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('personal care products') ?>">personal care products</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('personal care products') ?>"><img src="images/pers.jpeg"  alt="fruits"></a>
                </div>
                <div class="fruit1 vege">
                    <figcaption class="text">
                        <a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('baby care products') ?>">baby care products</a>
                    </figcaption>
                    <a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('baby care products') ?>"><img src="images/baby.jpeg"  alt="fruits"></a>
                </div>
            </div>
            <h3>our popular items</h3>
            <div class="grid">
                <?php
                $query = "SELECT * FROM `products` WHERE `type`='$type[3]' ORDER BY `product name` ASC LIMIT 5;";
                $data = $dbconnection -> query($query);
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div class='items'> 
                    <div>
                        <img class="plus" src='../productimg/<?php echo $row['image']; ?>' alt='product pic'>
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