<?php
require '../shared/database.php';
$sharedfolder='../shared/';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics</title>
    <link rel="stylesheet" href="electro.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div class="container">
        <div id="image">
            <i id="prev">
                <img src="<?php echo $sharedfolder; ?>../home/images/prev.png" width="50px" alt="">
            </i>
            <i id="next">
                <img src="<?php echo $sharedfolder; ?>../home/images/next.png" width="50px" alt="">
            </i>
            <div id="slider">
                <img src="<?php echo $sharedfolder; ?>../home/images/snacks.png" alt="">
                <img src="<?php echo $sharedfolder; ?>../home/images/groc2.jpeg" alt="">
                <img src="<?php echo $sharedfolder; ?>../home/images/groc3.jpeg" alt="">
                <img src="<?php echo $sharedfolder; ?>../home/images/snacks.png" alt="">
                <img src="<?php echo $sharedfolder; ?>../home/images/groc2.jpeg" alt="">
            </div>
        </div>
        <div class="child" id="name">
            <h1 id="title">Title of product</h1>
            <div id="price"><span class="rate">Rs.40000</span><span class="cross">Rs.30000</span></div>
        </div>
        <div class="child" id="describe">
            <h2>Details</h2>
            <?php
            for ($i=0; $i <5; $i++) {?>
                <h3>&#8627; gqrerbbbv</h3>
            <?php } ?>
        </div>
    </div>
    <?php require_once'../shared/footer.php'; ?>
</body>
</html>