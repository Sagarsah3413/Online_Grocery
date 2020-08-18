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
                <div class="hits"><a href="<?php echo $sharedfolder; ?>../home/home.php">Home</a> <span id="close"><span class="one"></span><span class="two"></span> </span></div>
                <div><a href="#">Grocery</a></div>
                <div><a href="#">Fruits</a></div>
                <div><a href="">Vegetables</a></div>
            </section>
        </nav>
    </div>
    
    
    <div class="headtext">logo</div>

    <div class="cart">
        <span id="carticon" class="headtext">
            <img src="<?php echo $sharedfolder ?>../home/images/cart.png" alt="">
        </span>
        <nav id="cartmenu">
            <section>
                <div id="closecartcont" class="hits"><span id="closecart"> <span class="one"></span><span class="two"></span> </span></div>
            </section>
        </nav>
    </div>
</header>
<script src="<?php echo $sharedfolder; ?>header.js" defer></script>