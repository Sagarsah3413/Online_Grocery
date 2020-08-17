<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <title>homepage</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div class="container">
        <nav>
            <div>home</div>
            <div>groceries</div>
            <div>fruits</div>
            <div>vegetables</div>
        </nav>
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
            <div id="grid">
                <?php
                for ($i=0; $i < 5; $i++) {
                    echo "<div id='items'> 
                                <div>
                                <img src='images/down.png' alt='product pic'>
                                </div>
                                <h4>product</h4>
                                <p>Rs 130 <span>140</span></p>
                                <div id='cart'>
                                    <img src='images/cart.png' alt='cart'>
                                    <p> Add To Cart</p> 
                                </div>
                            </div>";
                            
                }
                ?>
            </div>

            <h2>fruits</h2>
            <div id="grid">
                <?php
                for ($i=0; $i < 5; $i++) { 
                    echo "<div id='items'> 
                                <div>
                                <img src='images/down.png' alt='product pic'>
                                </div>
                                <h4>product</h4>
                                <p>Rs 130 <span>140</span></p>
                                <div id='cart'>
                                    <img src='images/cart.png' alt='cart'>
                                    <p> Add To Cart</p> 
                                </div>
                            </div>";
                }
                ?>
            </div>

            <h2>vegetables</h2>
            <div id="grid">
                <?php
                for ($i=0; $i < 5; $i++) { 
                    echo "<div id='items'> 
                                <div>
                                <img src='images/down.png' alt='product pic'>
                                </div>
                                <h4>product</h4>
                                <p>Rs 130 <span>140</span></p>
                                <div id='cart'>
                                    <img src='images/cart.png' alt='cart'>
                                    <p> Add To Cart</p> 
                                </div>
                            </div>";
                }
                ?>
            </div>
        </div>

    </div>
    
</body>
<script src="home.js"></script>
<script>
    var integer = 3;
</script>

</html>
        
        