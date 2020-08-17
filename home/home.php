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
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[0] . "' ORDER BY `productid` DESC LIMIT $offset,5) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div id='items'> 
                    <div>
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <?php echo $row['price']; ?> <span><?php echo $row['mprice']; ?></span></p>
                    <div id='cart'>
                        <img src='images/cart.png' alt='cart'>
                        <p> Add To Cart</p> 
                    </div>
                </div>
                <?php } ?>
            </div>

            <h2>fruits</h2>
            <div id="grid">
                <?php
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[1] . "' ORDER BY `productid` DESC LIMIT $offset,5) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div id='items'> 
                    <div>
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name'] ?></h4>
                    <p>Rs <?php echo $row['price'] ?> <span><?php echo $row['mprice'] ?></span></p>
                    <div id='cart'>
                        <img src='images/cart.png' alt='cart'>
                        <p> Add To Cart</p> 
                    </div>
                </div>
                <?php } ?>
            </div>

            <h2>vegetables</h2>
            <div id="grid">
                <?php
                $query = "SELECT * FROM (SELECT * FROM `grocers`.`products` where type='" . $type[0] . "' ORDER BY `productid` DESC LIMIT $offset,5) sub ORDER BY `productid` ASC;";
                $data = $dbconnection -> query($query);
        
                while($row = $data -> fetch_assoc()) {
                    ?>
                <div id='items'> 
                    <div>
                        <img src='images/down.png' alt='product pic'>
                    </div>
                    <h4><?php echo $row['product name']; ?></h4>
                    <p>Rs <?php echo $row['price']; ?> <span><?php echo $row['mprice']; ?></span></p>
                    <div id='cart'>
                        <img src='images/cart.png' alt='cart'>
                        <p> Add To Cart</p> 
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
    
</body>
<script>
    var integer = 3;
</script>

</html>
        
        