<?php
    require_once '../shared/database.php';
    session_start();
    $offset = 0;
    $type = ['grocer','fruit','vegetable'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/sidemenu.css">
    <title>homepage</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
    <div class="container">
        <?php require_once '../shared/sidemenu.php' ?>
        <div id="product">
            <section>
                <div id="image">
                    <i id="prev">
                        <img src="images/img4.png" width="50px" alt="">
                    </i>
                    <i id="next">
                        <img src="images/img5.png" width="50px" alt="">
                    </i>
                    <div id="slider">
                        <img src="images/img1.jfif">
                        <img src="images/img2.jfif">
                        <img src="images/img3.jfif">
                        <img src="images/img1.jfif">
                        <img src="images/img2.jfif">
                    </div>
                </div>
            </section>
            
        </div>

    </div>
    
</body>
<script src="home.js"></script>
</html>
        
        