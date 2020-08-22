<?php
    $sharedfolder='../shared/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <table>
        <tr>
            <th>your product</th>
            <th>quantity</th>
            <th>rate</th>
            <th>total cost</th>
        </tr>
    </table>
    <div id="total">
        <div>Grand Total: Rs.<span>0</span>/- only</div>
    </div>
    <article id="body">
        <div><a href="<?php echo $sharedfolder; ?>../home/home.php">Continue Shopping</a></div>
        <div><a href="<?php echo $sharedfolder; ?>../buy now/buynow.php">Place your Order </a></div>
    </article>
    <div id="image">
        <i id="prev">
            <img src="../home/images/img4.png" width="50px" alt="">
        </i>
        <i id="next">
            <img src="../home/images/img5.png" width="50px" alt="">
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
    <?php require_once'../shared/footer.php'; ?>  
</body>
<script src="cart.js" defer></script>
<script src="../shared/ajax.js" defer></script>
</html>