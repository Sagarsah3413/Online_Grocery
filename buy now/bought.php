<?php require_once '../shared/database.php'; ?><?php
    if(!(isset($_POST['submit']) && $_POST['submit'] === 'submit')){
        exit;
    }
    
    $to = 'joysen833@gmail.com';
    $subject = 'My subject';
    $header = 'From: ';
    $mailbody='';
    $productquantity = '';
    $productid = '';

    $productid = explode(',', $_POST['product']);
    $productquantity = explode(',', $_POST['quantity']);


    
    $customer = [];
    $customer['name'] = 'Customer name is: ' . $_POST['name'];
    $customer['number'] = 'Customer contact number is: '.  $_POST['contact'];
    $customer['email'] = 'Customer EmailId is: '. $_POST['email'];

    $index = 0;$total=0;
    $query = "SELECT * FROM `products` WHERE `productid` IN ({$_POST['product']});";
    $data = $dbconnection-> query($query);
    $bill = "\r\n\r\n";
    $bill = "Id\tName\tQuantity\tRate\tTotal\r\n";
    while($row = $data -> fetch_assoc())
    {
        $bill .= $row['productid'] . '. ';
        $bill .= $row['product name'] . '\t';
        $bill .= $productquantity[$index] . '\t';
        $bill .= $row['price'] . '\t';
        $total += $row['price']*floatval($productquantity[$index]); 
        $bill .= $row['price']*floatval($productquantity[$index]) . "\r\n";
        $index++;
    }
    $bill .= "\r\n";
    $bill .= "Grand Total: $total" . "\r\n\r\n";
    $customer['product'] = $bill;
    
    $customer['address'] = 'Delivered at address: '. $_POST['address'];
    if($_POST['landmark'])
        $customer['landmark'] = 'Landmark near: '. $_POST['landmark'];

    $header.=$_POST['email'];
    foreach ($customer as $key => $value) {
        $mailbody.= $value;
        $mailbody.= "\r\n";
    }
    echo $mailbody;
    mail($to,$subject,$mailbody,$header);
    $total=60;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bought.css">
</head>
<body>
    <header>
        
    </header>
    <section>
        <h1>Thank you for shopping with us.</h1>
        <h1>Your order of Rs.<?php echo $total; ?> will be delivered to your doorsteps soon.</h1>
        <h2>A coupon code has been activated on next 3 order <br/>
            you will get Rs.50 off on order of Rs.999 and up <br/>
            and Rs.110 off on order of Rs.1999 and up.
        </h2>
        <div><a href="../home/home.php">Back to home</a></div>
    </section>
</body>
</html>