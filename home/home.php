<?php
    require_once '../shared/database.php';
    $sharedfolder='../shared/';
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
        <div id="product">
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
                            <p><a href="../fruits/fruits.php">buy now</a></p>
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
                
                    <div class="mainsub"> <img src="images/snacks2.jpg" width="90%" alt="rice"></div>
                    <div class="foursub">
                        <div class="sub"> <img src="images/rice.jpg" width="90%" alt="rice"></div>
                        <div class="sub"> <img src="images/snacks1.jpg" width="90%" alt="rice"></div>
                        <div class="sub"> <img src="images/snacks1.jpg" width="90%" alt="rice"></div>
                        <div class="sub"> <img src="images/rice.jpg" width="90%" alt="rice"></div>
                    </div>
                    
                </div>

                <h3>fruits</h3>
            <div class="fruits">
                
                <div class="all"> <img src="images/fruit1.jpg" width="90%" alt="fruits"></div>
                <div class="two">
                    <div class="fruit1"><img src="images/fruit2.jpg" width="90%" alt="fruits"></div>
                    <div class="fruit1"><img src="images/dryfruit.jpg" width="90%" alt="fruits"></div>
                </div>
            </div>
            
            <h3>vegetables</h3>
            <div class="vegetables">
                <div class="vege"><img src="images/vege1.jpg" width="90%" alt="fruits"></div>
                <div class="vege"><img src="images/vege2.jpg" width="90%" alt="fruits"></div>
            </div>
        </div>

</body>
<script src="home.js"></script>
</html>
        
        