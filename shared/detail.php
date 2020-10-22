<?php
require '../shared/database.php';
require '../shared/function.php';
$sharedfolder='../shared/';

if(!isset($_GET['productid']) || empty($_GET['productid']))
    exit;

$productid=$_GET['productid'];

$query="SELECT * FROM `products` WHERE `productid`='$productid';";
$data=$dbconnection->query($query);

if($data->num_rows != 1)
    exit;

$row=$data->fetch_assoc();
if(!$row['description'])
    exit;

$images=explode(',',$row['image']);
$imagecount=count($images);

$init = ($imagecount==1) ? 0 : 1;
$description=string_in($row['description'],'<','>');
$descriptioncount=count($description);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Each Electronics</title>
    <link rel="stylesheet" href="../stylesheet/detail.css">
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
                <?php
                for ($i=$init; $i < $imagecount; $i++) { ?>

                <img src="<?php echo $sharedfolder; ?>../productimg/<?php echo $images[$i] ?>" alt="">
                
                <?php } ?>
            </div>
        </div>
        <div class="child grid" id="name">
            <div class='items'>
                <h2 id="tag"></h2>
                <h1 id="title"><?php echo $row['product name'] ?></h1>
                <div id="price">Rs.<span class="rate"><?php echo $row['price'];?></span> <?php if(!empty($row['mprice'])){ ?> <span class="cross">Rs.<?php echo $row['mprice']; ?></span> <?php } ?></div>
                <div class='cart' id="<?php echo $row['productid'] ?>">
                    <article>
                        <span class="control"><img class="plus" src="../home/images/minus.png" alt=""></span>
                        Quantity 
                        <input type="number" min="0" value="0">
                        <span class="control"><img class="plus" src="../home/images/plus.png" alt=""></span>
                    </article>
                    <p>
                        <img class="plus" src='../home/images/cart.png' alt='cart'> 
                        <span class="addcart">Add To Cart</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="child" id="describe">
            <h2>Details</h2>
            <?php
            for ($i=0; $i < $descriptioncount; $i++) {?>
                <h3>&#8627; <?php echo $description[$i]; ?></h3>
            <?php } ?>
        </div>
    </div>
    <?php require_once'../shared/footer.php'; ?>
</body>
<script src="swipe.js"></script>
<script src="detail.js"></script>
<script src="../shared/add.js"></script>
</html>