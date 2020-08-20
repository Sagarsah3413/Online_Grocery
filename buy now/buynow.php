<?php
    $sharedfolder='../shared/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheet/header.css">
    <link rel="stylesheet" href="buynow.css">
    <title>Buy Now</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
        <h3>kindly enter your details</h3>
        <section>
            <form onsubmit="return verify();" action="#" method="POST">
                <p>
                    <label for="name">Name :</label>
                    <input class="escape" type="text" name="name" onclick="choose(this.id);" id="name" autocomplete="off" />
                    <span id="Username" class="under"></span>

                </p>
                <p>
                    <label for="number">Contact No. :</label>
                    <input class="escape" name="contact" onclick="choose(this.id);" id="pass" autocomplete="off" />
                    <span id="Password" class="under"></span>
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input class="escape" name="email" onclick="choose(this.id);" id="text" autocomplete="off" />
                    <span id="email" class="under"></span>
                </p>

                <p>
                    <label for="address">Address :</label>
                    <input class="escape" type="text" name="address" onclick="choose(this.id);" id="pass" autocomplete="off" />
                    <span id="Password" class="under"></span>
                </p>


            </form>  
        </section>
        <div class="order">
            <button>place your order</button>
        </div>

        <div class="rbj">
            <p>our services are limited within rajbiraj</p>
        </div>

        <h4>thanks for shopping !!!</h4>
        <h5>visit again</h5>

</body>
</html>