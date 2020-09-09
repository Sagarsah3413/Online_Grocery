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
    <link rel="icon" href="../home/images/logo.png">
    <title>Buy Now</title>
</head>
<body>
    <?php require_once'../shared/header.php'; ?>
        <h3 class="kind">kindly enter your details<br/>
            Allow location for better 
        </h3>
        <section id="body">
            <form onsubmit="return verify();" action="bought.php" method="POST" id="formm">
                <div id="info">Our services are limited within Rajbiraj,Nepal only till now. <br>|| हाम्रा सेवाहरू राजविराज, नेपाल भित्र सीमित छन् ||</div>
                <p>
                    <label for="name">Name :</label>
                    <input class="escape" type="text" name="name" onclick="choose(this.id);" id="uname" autocomplete="off" />
                    <span id="username" class="under"></span>
                </p>
                <p>
                    <label for="number">Contact No. :</label>
                    <input class="escape"  name="contact" onclick="choose(this.id);" id="num" autocomplete="off" />
                    <span id="phone" class="under"></span>
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input class="escape" placeholder="Optional" name="email" onclick="choose(this.id);" id="mail" autocomplete="off" />
                    <span id="gmail" class="under"></span>
                </p>
                <div class="order lock" id="message">Start Location/GPS then click below button to deliver to current location.</div>
                <div class="order">
                    <div id="use">Use location</div>
                        <script src="location.js"></script>
                </div>
                <p>
                    <label for="address">Address :</label>
                    <input class="escape" placeholder="Rajbiraj,Saptari,Nepal" type="text" name="address" onclick="choose(this.id);" id="add" autocomplete="off" />
                    <span id="loc" class="under"></span>
                </p>
                <p>
                    <label for="landmark">Landmark :</label>
                    <input class="escape" placeholder="Optional" type="text" name="landmark" onclick="choose(this.id);" id="land" autocomplete="off" />
                    <span id="mark" class="under"></span>
                </p>
            </form>
        </section>
        <div class="order lock" id="message"></div>
        <div class="order">
            <button form="formm" value="submit" name="submit">order now</button>
            <span id="less" class="under"></span>
        </div>

        <h4 class="tq">thanks for shopping !!!</h4>
        <h5>visit again</h5>
        <?php require_once'../shared/footer.php'; ?>
</body>
<script src="loginpage.js"></script>
<script src="verifysignup.js"></script>
</html>