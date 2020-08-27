<?php
    $sharedfolder='../shared/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="buynow.css">
    <title>Buy Now</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
        <h3 class="kind">kindly enter your details</h3>
        <section id="body">
            <form onsubmit="return verify();" action="bought.php" method="POST" id="form">
                <p>
                    <label for="name">Name :</label>
                    <input class="escape" type="text" name="name" onclick="choose(this.id);" id="uname" autocomplete="off" />
                    <span id="username" class="under"></span>

                </p>
                <p>
                    <label for="number">Contact No. :</label>
                    <input class="escape" name="contact" onclick="choose(this.id);" id="num" autocomplete="off" />
                    <span id="phone" class="under"></span>
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input class="escape" placeholder="Optional" name="email" onclick="choose(this.id);" id="mail" autocomplete="off" />
                    <span id="gmail" class="under"></span>
                </p>

                <p>
                    <label for="address">Address :</label>
                    <input class="escape" type="text" name="address" onclick="choose(this.id);" id="add" autocomplete="off" />
                    <span id="loc" class="under"></span>
                </p>
                <p>
                    <label for="landmark">Landmark :</label>
                    <input class="escape" placeholder="Optional" type="text" name="landmark" onclick="choose(this.id);" id="land" autocomplete="off" />
                    <span id="mark" class="under"></span>
                </p>


            </form>  
        </section>
        <div class="order">
            <button form="form" value="submit" name="submit">order now</button>
            <span id="less" class="under"></span>
        </div>

        <div class="rbj">
            <p>our services are limited within rajbiraj</p>
        </div>

        <h4 class="tq">thanks for shopping !!!</h4>
        <h5>visit again</h5>
        <?php require_once'../shared/footer.php'; ?>
</body>
<script src="loginpage.js"></script>
<script src="verifysignup.js"></script>
</html>