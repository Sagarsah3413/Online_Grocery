<?php require '../shared/database.php'; ?><?php
    // if(!(isset($_POST['submit']) && $_POST['submit'] === 'submit')){
    //     exit;
    // }
    // function take($sum) {
    //     for($i=0;$i<6;$i++)
    //         if($sum<500*($i+1))
    //         return($i*5);
    //     return(30);
    // }

    // $to = 'onlinebazzar07@gmail.com';
    // $subject = 'My subject';
    // $header = 'From: ';
    // $mailbody='';
    // $productquantity = '';
    // $productid = '';

    // $productid = explode(',', $_POST['product']);
    // $productquantity = explode(',', $_POST['quantity']);


    
    // $customer = [];
    // $customer['name'] = 'Customer name is: ' . $_POST['name'];
    // $customer['number'] = 'Customer contact number is: '.  $_POST['contact'];
    // $customer['email'] = 'Customer EmailId is: '. $_POST['email'];

    // $index = 0;$total=0;
    // $query = "SELECT * FROM `products` WHERE `productid` IN ({$_POST['product']});";
    // $data = $dbconnection-> query($query);
    // $bill = "\r\n\r\n";
    // $bill = "Id\tName\tQuantity\tRate\tTotal\r\n";
    // while($row = $data -> fetch_assoc())
    // {
    //     $bill .= $row['productid'] . '. ';
    //     $bill .= $row['product name'] . "\t";
    //     $bill .= $productquantity[$index] . "\t";
    //     $bill .= $row['price'] . "\t";
    //     $total += $row['price']*floatval($productquantity[$index]); 
    //     $bill .= $row['price']*floatval($productquantity[$index]) . "\r\n";
    //     $index++;
    // }
    // $totalsav = $total;
    
    // mysqli_close($dbconnection);
    // require '../shared/writing.php';

    // $query = "SELECT * FROM `customer` WHERE `number`={$_POST['contact']}";
    // $data = $dbconnection -> query($query);
    // $history = $data -> num_rows;
    
    // if($history > 0)
    // {
    //     $row = $data -> fetch_assoc();
    //     $total -= take($total);

    //     $freq = floatval($row['buying']) + 1;
    //     $index += floatval($row['quantity']);
        
    //     $hold = $totalsav + floatval($row['total']);
    //     $query = "UPDATE `customer` SET `buying` = '$freq', `quantity` = '$index', `total` = '$hold' WHERE `customer`.`customerid` = {$row['customerid']}; ";
    //     $dbconnection -> query($query);

    // }elseif($history <= 0){
        
    //     $total -= take($total);
    //     $query = "INSERT INTO `customer` (`name`, `number`, `email`, `buying`, `quantity`, `total`) VALUES ('{$_POST['name']}', '{$_POST['contact']}', '{$_POST['email']}', '1', $index, $totalsav);";
    //     $dbconnection -> query($query);
    // }
    // $discount = take($totalsav);


    // $bill .= "\r\n";
    // $bill .= "Grand Total: $total" . "\r\n\r\n";
    // $customer['product'] = $bill;
    
    // $customer['address'] = 'Delivered at address: '. $_POST['address'];
    // if($_POST['landmark'])
    //     $customer['landmark'] = 'Landmark near: '. $_POST['landmark'];

    // $header.=$_POST['email'];
    // foreach ($customer as $key => $value) {
    //     $mailbody.= $value;
    //     $mailbody.= "\r\n";
    // }
    // if($totalsav > 2999)
    //     $mail .= "GIFT DE DENA ISS WALE CUSTOMER KO";
    // mail($to,$subject,$mailbody);

    // // $total = 79;
    // // $discount = 0;
    // // $totalsav = 90;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../home/images/logo.png">
    <title>ORDER</title>
    <link rel="stylesheet" href="bought.css">
</head>
<body>

    <section>
        <h1>Thank you for shopping with us.</h1>
        <h1>Your order of <?php echo "<span style='color:rgb(250,101,1)' 'font-weight:600'> Rs.$total</span>"; ?><?php if($discount){ echo "<span style='color:rgb(250,101,1)' 'font-weight:600'>(Discount: $discount, Initial price: $totalsav)</span>"; } ?> will be <span> delivered to your doorsteps soon</span>.</h1>
        <?php
        if($totalsav > 2999){
            echo "<h1 style='font-weight:700'>Congratulations! You earned  giveaway reward.</h1>";
        }
        ?>
        <h2>A coupon code has been activated. On shopping of <span> Rs.500 and above </span>
            get reward up <span> Rs.50</span> .<br/>
            On shopping of <span> Rs.3000</span>  and above get discount and <span> EXCITING GIVEAWAYS...!!!</span>  <br/>
        </h2>
        <div id="load">Save your Order</div>
        <div><a href="../home/home.php">Back to home</a></div>
    </section>
</body>
</html>