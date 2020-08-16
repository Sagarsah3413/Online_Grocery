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
            <section></section>
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
                            </div>";
                }
                ?>
            </div>
        </div>

    </div>
    
</body>

</html>
        
        