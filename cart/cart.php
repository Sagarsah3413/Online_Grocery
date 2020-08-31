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
    <link rel="icon" href="../home/images/logo.png">
    <title>Cart</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div id="info">Our services are limited within Rajbiraj,Nepal only till now. <br>|| हाम्रा सेवाहरू राजविराज, नेपाल भित्र सीमित छन् ||</div>
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
    <?php require_once '../shared/slider.php' ?>
    <?php require_once '../shared/footer.php'; ?>  
</body>
<script src="cart.js" defer></script>
<script src="../shared/ajax.js" defer></script>
<script src="../shared/slider.js"></script>
</html>