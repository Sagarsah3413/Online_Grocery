<?php
function string_in($string, $start, $end){
    $inner = [];
    $ini = 0;
    while((strpos($string, $start, $ini) !== false) && (strpos($string, $end, $ini) !== false)){
        $ini += strpos($string, $start, $ini) - $ini;
        $ini += strlen($start) - 1;
        $len = strpos($string, $end, $ini) - $ini - 1;
        $inner[] = substr($string, $ini+1, $len);
        $ini += $len;
        $ini += strlen($end);
    }
    return $inner;
};

function eachproduct(&$rowdata,$urldata){
    ?>
    <div class="items">
        <div>
            <img class="plus" src='<?php echo $urldata.'/productimg/'.$rowdata['image'];  ?>' alt='product pic'>
        </div>
        <h4><?php echo $rowdata['product name']; ?></h4>
        <p>Rs <span class="rate"><?php echo $rowdata['price']; ?></span> <?php if(!empty($rowdata['mprice'])){ ?> <span class="cross">Rs <?php echo $rowdata['mprice']; ?></span> <?php } ?></p>
        <div class='cart' id="<?php echo $rowdata['productid'] ?>">
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
<?php } ?>
<?php

function fordetailproduct(&$rowdata,$urldata,$shareddata){
    ?>
    <div class="items">
        <div>
            <!-- <img class="plus" src='../productimg/<?php //echo $row['image']; ?>' alt='product pic'> -->
            <img class="plus" src='<?php echo $urldata.'/productimg/'.explode(',',$rowdata['image'])[0]; ?>' alt='product pic'>
        </div>
        <h4><?php echo $rowdata['product name']; ?></h4>
        <p>Rs <span class="rate"><?php echo $rowdata['price']; ?></span> <?php if(!empty($rowdata['mprice'])){ ?> <span class="cross">Rs <?php echo $rowdata['mprice']; ?></span> <?php } ?></p>
        <div class='cart' id="<?php echo $rowdata['productid'] ?>">
            <article>
                <span class="control"><img class="plus" src="<?php echo $urldata.'/home/images/minus.png'; ?>" alt=""></span>
                Quantity 
                <input type="number" min="0" value="0">
                <span class="control"><img class="plus" src="<?php echo $urldata.'/home/images/plus.png'; ?>" alt=""></span>
            </article>
            <p>
                <img class="plus" src='<?php echo $urldata.'/home/images/cart.png'; ?>' alt='cart'> 
                <span class="addcart">Add To Cart</span>
            </p>
            <section><a href="<?php echo '/shared/detail.php?productid='. $rowdata['productid']; ?>">View Details<span class="">i</span></a></section>
        </div>
    </div>
<?php } ?>