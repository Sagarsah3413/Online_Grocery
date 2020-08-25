<link rel="stylesheet" href="<?php echo $sharedfolder; ?>../stylesheet/slider.css">
<div id="image">
    <style> 
        #slider div.img1 {
            background-image: url(<?php echo $sharedfolder; ?>../home/images/img1.jfif);
        }

        #slider div.img2 {
            background-image: url(<?php echo $sharedfolder; ?>../home/images/img2.jfif);
        }

        #slider div#img3 {
            background-image: url(<?php echo $sharedfolder; ?>../home/images/img3.jfif);
        }
    </style>
    <i id="prev">
        <img src="<?php echo $sharedfolder; ?>../home/images/img4.png" width="50px" alt="">
    </i>
    <i id="next">
        <img src="<?php echo $sharedfolder; ?>../home/images/img5.png" width="50px" alt="">
    </i>
    <div id="slider">
        <div class="img1">
            <p><a href="../groceries/groceries.php">add to cart</a></p>
        </div>
        <div class="img2">
            <p> <a href="../fruits/fruits.php">buy now</a></p>
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