<?php require '../shared/database.php'; ?><?php
    if(!(isset($_POST['submit']) && $_POST['submit'] === 'submit')){
        exit;
    }

    function take($sum) {
        for($i=0;$i<6;$i++)
            if($sum<500*($i+1))
            return($i*5);
        return(0);
    }

    $to = 'onlinebazzar07@gmail.com';
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
    
    $customer['location'] = 'Customer Location is :'. $_POST['location'];
    $list = '';

    $index = 0;$total=0;
    $query = "SELECT * FROM `products` WHERE `productid` IN ({$_POST['product']});";
    $data = $dbconnection-> query($query);
    $bill = "\r\n\r\n";
    $list = '';
    $bill = "Id\tName\tQuantity\tRate\tTotal\r\n";
    while($row = $data -> fetch_assoc())
    {
        $bill .= $row['productid'] . '. ';
        $bill .= $row['product name'] . "\t";
        $bill .= $productquantity[$index] . "\t";
        
        $list .= "<{$row['product name']}--[{$productquantity[$index]}]>";
        $bill .= $row['price'] . "\t";
        $total += $row['price']*floatval($productquantity[$index]); 
        $bill .= $row['price']*floatval($productquantity[$index]) . "\r\n";
        $index++;
    }
    $totalsav = $total;
    
    // mysqli_close($dbconnection);
    // require '../shared/writing.php';

    $query = "SELECT * FROM `customer` WHERE `number`={$_POST['contact']}";
    $data = $dbconnection -> query($query);
    $history = $data -> num_rows;

    
    if($history > 0)
    {
        $row = $data -> fetch_assoc();
        $total -= take($total);

        $freq = floatval($row['buying']) + 1;
        $index += floatval($row['quantity']);
        
        $hold = $totalsav + floatval($row['total']);
        $query = "UPDATE `customer` SET `buying` = '$freq', `quantity` = '$index', `total` = '$hold' WHERE `customer`.`customerid` = {$row['customerid']}; ";
        $dbconnection -> query($query);

    }elseif($history <= 0){
        
        $total -= take($total);
        $query = "INSERT INTO `customer` (`name`, `number`, `email`, `buying`, `quantity`, `total`) VALUES ('".addslashes($_POST['name'])."', '".addslashes($_POST['contact'])."', '".addslashes($_POST['email'])."', '1', $index, $totalsav);";
        $dbconnection -> query($query);
    }
    
    $discount = take($totalsav);
    
    $landmark = (!empty($_POST['landmark'])) ? $_POST['landmark'] : '';

    $query = 'INSERT INTO `orders` (`orderid`, `name`, `number`, `address`, `product`, `total`, `discount`, `packed`, `delivered`) VALUES (NULL,"'.addslashes($_POST['name']).'", "'.addslashes($_POST['contact']).'", "'.addslashes($_POST['address'])."<".addslashes($landmark).">".'", "'.addslashes($list).'", "'.$total.'","'.$discount.'", FALSE, FALSE);';
    $value = $dbconnection -> query($query);
    



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
    
    if($totalsav > 2999)
        $mailbody .= "GIFT DE DENA ISS WALE CUSTOMER KO";
    // mail($to,$subject,$mailbody,$header);

    // $total = 79;
    // $discount = 0;
    // $totalsav = 90;

    
    if(!empty($_POST['email']))
    {
        $header = 'From: onlinebazzar07@gamil.com' . "\r\n" .
        'Reply-To: onlinebazzar07@gamil.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $to = $_POST['email'];
        $subject = 'Order from onlinebazzar.co';
        $mailbody = "Your order Rs.$total has been placed and will be delivered within 1-2hrs. Thank you for shopping with onlinebazzar.co .";
        // mail($to,$subject,$mailbody,$header);
    }


    


    // $query = "SELECT * FROM `products` WHERE `productid` IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);";
    // $query = "SELECT * FROM `products` WHERE `productid` IN ({$_POST['product']});";
                
    // $data = $dbconnection-> query($query);
    // $index = 0;
    // $table = '';
    // $style = '<style>
    //             table {
    //                 width: 100%;
    //                 table-layout: auto;
    //                 border-collapse: collapse;
    //             }
                
    //             thead tr td {
    //                 text-align: center;
    //                 font-size: 37px;
    //             }
                
    //             td {
    //                 font-size: 32px;
    //                 height:80px;
                    
    //             }
                
    //             thead,
    //             td {
    //                 text-transform: capitalize;
    //                 border: 0.5px solid #200d0d;
                    
    //             }
                
    //         </style>';
    // $overhead = '<div style="font-size:20px;color:#6eca22;">Customer name: '.$_POST['name'].'</div>';
    // $overhead .= '<div style="font-size:20px;color:#6eca22;">Contact number: '.$_POST['contact'].'</div>';
    // $overhead .= '<div style="font-size:20px;color:#6eca22;">Address to deliver: '.$_POST['address'].'</div>';

    // $table .= '<table style="table-layout: fixed;">
    //             <thead>
    //                 <tr style="background-color: #34ca9d;">
    //                 <td style="text-align: center;width:46%;">Item</td>
    //                 <td style="text-align: center;width:18%;">Rate</td>
    //                 <td style="text-align: center;width:18%;">Quantity</td>
    //                 <td style="text-align: center;width:18%;">Total</td>
    //                 </tr>
    //             </thead>';
    // while ($row = $data -> fetch_assoc()) {
    //     $table .= '<tr>
    //                     <td style="width:46%;">'.($index+1).'. '.$row["product name"].'</td>
    //                     <td style="width:18%;">Rs.'.$row["price"].'</td>
    //                     <td style="width:18%;">'.$productquantity[$index].'</td>
    //                     <td style="width:18%;">Rs.'. $row['price']*$productquantity[$index] .'</td>
    //                 </tr>';
    //     $index++;
    // }
    // $table .= '</table>';
    // $footer = '';
    // if($discount>0)
    // {
    //     $footer .= '<div style="color:#ff0000;text-align:right;font-size:23px;">Total Price: Rs.'.$totalsav.'</div>';
    //     $footer .= '<div style="color:#95cc13;text-align:right;font-size:23px;">Discount: Rs.'.$discount.'</div>';
    //     $footer .= '<div style="color:#cc9216;text-align:right;font-size:23px;">Grand Total: Rs.'.$total.'</div>';
    // }else
    // {
    //     $footer .= '<div style="color:#cc9216;text-align:right;font-size:23px;">Grand Total: Rs.'.$total.'</div>';
    // }
    

    //pdf reader
    // require_once './tcpdf/tcpdf.php';

    // $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    // $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0, 6, 255), array(0, 64, 128));
    // $pdf->setFooterData(array(0,64,0), array(0,64,128));
    
    // $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    // $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // // set default monospaced font
    // $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
    // $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
    // // set auto page breaks
    // $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
    // // set image scale factor
    // $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
    
    // // set default font subsetting mode
    // $pdf->setFont('courierB', '', 14, '', true);

    // $pdf->AddPage();
    // $content = '<html><head>'.$style.'</head><body>'.$overhead.$table.$footer.'</body></html>';
    // $pdf->writeHTML($content, true, false, false, false, '');
    
    // $name = $_POST['name'].$_POST['contact'];
    // $pdf->Output(__DIR__ . '/pdfs/'.$name.'.pdf', 'F');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../home/images/logo.png">
    <title>ORDER</title>
    <link rel="stylesheet" href="bought.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    
</head>
<body>

    <section>
        <h1>Thank you for shopping with us.</h1>
        <h1>Your order of <?php echo "<span style='color:rgb(250,101,1)' 'font-weight:600'> Rs.$total</span>"; ?><?php if($discount){ echo "<span style='color:rgb(250,101,1)' 'font-weight:600'>(Discount: $discount, Initial price: $totalsav)</span>"; } ?> 
         will be <span> delivered to your doorsteps soon</span>.</h1>
        <!-- <h1><span style="color: #0b0c3f;">Scroll to the buttom of page to see your order.</span></h1> -->
    </section>
    <aside>
        <section>
            <div><a href="pdfs/<?php echo $name; ?>.pdf" download>Click to download digital bill</a></div>
        </section>
    <?php
        echo $table; ?>
    </aside>
    
    <section>
        <?php
        if($totalsav > 2999){
            echo "<h1 style='font-weight:700'>Congratulations! You earned  giveaway reward.</h1>";
        }
        ?>
        <h2>A coupon code has been activated. On shopping of <span> Rs.500 and above </span>
            get reward up <span> Rs.50</span> .<br/>
            On shopping of <span> Rs.3000</span>  and above get discount and <span> EXCITING GIVEAWAYS...!!!</span><br/>
        </h2>
        <!-- <div id="load"><a href="#" download>Save your Order</a></div> -->
        <div><a href="../home/home.php">Back to home</a></div>
    </section>
    

</body>
</html>
