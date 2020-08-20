<?php require_once '../shared/database.php'; ?><?php
    if(!(isset($_POST['submit']) && $_POST['submit'] === 'submit')){
        exit;
    }
    print_r($_POST);
    
    $to = 'joysen833@gmail.com';
    $subject = 'My subject';
    $header = 'From: ';
    $mailbody='';

    $customer = [];
    $customer['name'] = 'Customer name is: ' . $_POST['name'];
    $customer['number'] = 'Customer contact number is: '.  $_POST['contact'];
    $customer['email'] = 'Customer EmailId is: '. $_POST['email'];
    $customer['address'] = 'Delivered at address: '. $_POST['address'];
    $customer['landmark'] = 'Landmark near: '. $_POST['landmark'];

    $header.=$_POST['email'];
    foreach ($customer as $key => $value) {
        $mailbody.= $value;
        $mailbody.= '\r\n\r\n';
    }
    mail($to,$subject,$mailbody,$header);
    header('Location: ../home/home.php');
?>