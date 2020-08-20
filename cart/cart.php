<?php
    $sharedfolder='../shared/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../home/home.css"> -->
    <link rel="stylesheet" href="../stylesheet/header.css">
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
        <tr>
            <td><img src="../home/images/down.png" alt=""><span>Product name</span></td>
            <td><button class="minus">-</button><input type="text" value="0"><button class="plus">+</button></td>
            <td>Rs.40</td>
            <td>Rs.400</td>
        </tr>
        <tr>
            <td><img src="../home/images/down.png" alt=""><span>Product name</span></td>
            <td><button class="minus">-</button><input type="text" value="0"><button class="plus">+</button></td>
            <td>Rs.40</td>
            <td>Rs.400</td>
        </tr>
    </table>
    <div id="total">
        <div>Grand Total: Rs.<span>4000</span>/- only</div>
    </div>
    <article>
        <div><a href="<?php echo $sharedfolder; ?>../buy now/buynow.php">Place Order Now</a></div>
    </article>
    
</body>
<script src="cart.js"></script>
</html>
        
        