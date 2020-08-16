<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>homepage</title>
</head>
<body>
    <div id="product">
        <h3>products</h3>
        <h2>groceries</h2>
        <div id="grid">
            <?php
            for ($i=0; $i < 5; $i++) { 
                echo "<div id='items'> 
                            <div id='img'>
                            <img src='images/down.png' alt='product pic'>
                            </div>
                            <div id='details'>
                                <h4>product</h4>
                                <p>Rs 130 <span>140</span></p>
                                <div id='cart'>
                                    <img src='images/cart.png' alt='cart'>
                                    <p> Add To Cart</p> 
                                </div>
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
                            <div id='img'>
                            <img src='images/down.png' alt='product pic'>
                            </div>
                            <div id='details'>
                                <h4>product</h4>
                                <p>Rs 130 <span>140</span></p>
                                <div id='cart'>
                                    <img src='images/cart.png' alt='cart'>
                                    <p> Add To Cart</p> 
                                </div>
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
                            <div id='img'>
                            <img src='images/down.png' alt='product pic'>
                            </div>
                            <div id='details'>
                                <h4>product</h4>
                                <p>Rs 130 <span>140</span></p>
                                <div id='cart'>
                                    <img src='images/cart.png' alt='cart'>
                                    <p> Add To Cart</p> 
                                </div>
                            </div>
                        </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>
        
        