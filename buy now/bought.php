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


    // for ($i=0; $i < $index; $i++) { 
    //     # code...
    // }
    
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
    header('Location: ../home/home.php');
?>