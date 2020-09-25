<?php
$separate=[];
$group = ['groceries','stationary','cosmetic'];
foreach ($group as $key) {
    $separate[$key] = 0;
}

foreach ($catagory as $key => $value) {
    if($key<=12)
        $separate['groceries'] += $value;
    else
        $separate['stationary'] += $value;
}
?>