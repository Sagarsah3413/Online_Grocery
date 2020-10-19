<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

<header>
    <div id="bars" class="fill">
        <span id="open" class="headtext">
            <span></span>
            <span></span>
            <span></span>
            <label>Catagories</label>
        </span>
        <nav class="content" id="menu" style="display: none;">
            <section class="relative">
                <div class="hits"><span class="sidemenu"><a href="<?php echo $sharedfolder; ?>../home/home.php">home</a></span> <span id="close"><span class="one"></span><span class="two"></span> </span></div>
                <div><span class="sidemenu dropdown">grocery</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('all') ?>">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('snacks & drinks') ?>">snacks & drinks</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('rice, pulses & grains') ?>">rice, pulses & grains</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('oils, masala & salt') ?>">Oils, masala & salt</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('aata, sooji, besan, maida & sattu') ?>">aata, sooji, besan, maida & sattu</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('dry fruits') ?>">dry fruits</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../groceries/groceries.php?subcat=<?php echo urlencode('tea, coffee & sugar') ?>">tea, coffee & sugar</a></li>
                    </ul>
                </div>
                <div>
                    <span class="sidemenu dropdown">
                        <a href="<?php echo $sharedfolder; ?>../vegetables/vegetables.php?subcat=<?php echo urlencode('all') ?>">vegetables</a>  
                    </span>
                </div>
                <div><span class="sidemenu dropdown">household and appliances</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('all') ?>">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('house cleaning products') ?>">house cleaning products</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('pooja products') ?>">pooja products</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('home appliances') ?>">home appliances</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../household/household.php?subcat=<?php echo urlencode('kitchen and dining') ?>">kitchen appliances </a></li>
                    </ul>
                </div>
                <div><span class="sidemenu dropdown">health and care</span>
                    <ul>
                        <li><a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('all') ?>">view all</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('personal care products') ?>">personal care products</a></li>
                        <li><a href="<?php echo $sharedfolder; ?>../health and care/health.php?subcat=<?php echo urlencode('baby care products') ?>">baby care products</a></li>
                    </ul>
                </div>
                <!-- <div><span class="sidemenu dropdown">Stationary</span>
                    <ul>
                        <li><a href="<?php //echo $sharedfolder; ?>../stationary/stationary.php?subcat=<?php //echo urlencode('instrument and copy') ?>">instrument and copy</a></li>
                    </ul>
                </div> -->
                <div>
                    <span class="sidemenu dropdown">
                    <a href="<?php echo $sharedfolder; ?>../stationary/stationary.php?subcat=<?php echo urlencode('instrument and copy') ?>">Stationary</a> 
                    </span>
                </div>
                <div>
                    <span class="sidemenu dropdown">
                    <a href="<?php echo $sharedfolder; ?>../electronics/electronics.php?subcat=<?php echo urlencode('tv') ?>">Television</a> 
                    </span>
                </div>
                <div>
                    <span class="sidemenu dropdown">
                    <a href="<?php echo $sharedfolder; ?>../bday/bday.php?subcat=<?php echo urlencode('all')?>">Birthday, Party and Occasion</a> 
                    </span>
                </div>
                <div><span class="sidemenu"> <a href="../about/about.php">About us</a> </span></div>
            </section>
        </nav>
    </div>
    
    
    <div class="headtext logo"><a href="<?php echo $sharedfolder; ?>../home/home.php"><img src="../home/images/logo.png" alt=""></a></div>
    <form action="" value="submit" method="POST" id="form">
        <div id="search">
            <input type="search" placeholder="Search Here">
            <span><a href="<?php echo $sharedfolder ?>../search/search.php?value=" id="initsearch"><img src="<?php echo $sharedfolder; ?>../home/images/search.png" alt=""></a></span>
            <ul>
                <li><a href="<?php echo $sharedfolder ?>"></a></li>
                <li><a href="<?php echo $sharedfolder ?>"></a></li>
                <li><a href="<?php echo $sharedfolder ?>"></a></li>
                <li><a href="<?php echo $sharedfolder ?>"></a></li>
            </ul>
        </div>
    </form>
    <div class="cart">
        <span id="carticon" class="headtext">
            <span id="index">0</span>
            <img src="<?php echo $sharedfolder ?>../home/images/cart.png" alt="">
            <label>My Items</label>
        </span>
        <nav id="cartmenu" style="display: none;">
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
<aside></aside>
<script src="<?php echo $sharedfolder; ?>header.js" defer></script>
<script src="<?php echo $sharedfolder; ?>headerlive.js" defer></script>