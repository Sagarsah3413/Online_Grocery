<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

<header>
    <div id="bars" class="fill">
        <span id="open" class="headtext">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <nav class="content" id="menu">
            <section class="relative">
                <div class="hits"><span class="sidemenu"><a href="<?php echo $sharedfolder; ?>../home/home.php">home</a></span> <span id="close"><span class="one"></span><span class="two"></span> </span></div>
                <div><span class="sidemenu dropdown">grocery</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">snacks & drinks</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">rice, pulses & grains</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">Oils, masala & salt</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">aata, sooji, besan & maida</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">dry fruits</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">tea, coffee & sugar</a></li>
                    </ul>
                </div>
                <div><span class="sidemenu dropdown">fruits</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">citrus fruits</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">non citrus fruit</a></li>
                    </ul>
                </div>
                <div><span class="sidemenu dropdown">vegetables</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php">pulses</a></li>
                    </ul>
                </div>
                <div><span class="sidemenu dropdown">household and appliances</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php">pulses</a></li>
                    </ul>
                </div>
                <div><span class="sidemenu dropdown">health and care</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../health and care/health.php">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../health and care/health.php">personal care products</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../health and care/health.php">baby care products</a></li>
                    </ul>
                </div>
            </section>
        </nav>
    </div>
    
    
    <div class="headtext">logo</div>

    <div class="cart">
        <span id="carticon" class="headtext">
            <span id="index">0</span>
            <img src="<?php echo $sharedfolder ?>../home/images/cart.png" alt="">
        </span>
        <nav id="cartmenu">
            <section>
                <div id="closecartcont" class="hits">
                    <span id="closecart">
                        <span class="one"></span>
                        <span class="two"></span> 
                    </span>
                    <p>Hide</p>
                </div>
                <div class="extr">
                    
                </div>
                <article>
                    <div><a href="<?php echo $sharedfolder; ?>../cart/cart.php">view cart</a></div>
                    <div><a href="<?php echo $sharedfolder; ?>../buy now/buynow.php">buy now</a></div>
                </article>
            </section>
        </nav>
    </div>
</header>
<script src="<?php echo $sharedfolder; ?>header.js" defer></script>
<script src="<?php echo $sharedfolder; ?>headerlive.js" defer></script>