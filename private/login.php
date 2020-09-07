<?php
$accept= false;
if(isset($_POST['button']) && $_POST['button'] === 'submit')
{
    $user="paparanjeet";
    $pass="omshantikimakabhosda";
    if($_POST['password'] === $pass && $_POST['email']===$user)
    {
        setcookie("username",$user, time() + (86400), "/");
        setcookie("userpass", $pass, time() + (86400), "/");
        $accept = true;
    }
    else
    {
        echo "<script>alert('invalid email or password');</script>";
    }
    if($accept)
    {
            header("Location: report.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Document</title>
</head>
<body>
    <div class="head">  
        <div class="main">
            <div class="up">
                <div class="top">
                    <img src="images/Img2.png" alt="">
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="form">
                    <p class="txt">Login Here<span><img src="images/Img0.png" alt=""></span></p>
                                         
                    <div class="input">
                        <input type="text" placeholder="Username" name="email" >
                        <span class="pic"><img src="images/Img4.png" alt=""></span>
                    </div>
                   <div class="input">
                        <input type="password" placeholder="Password" name="password" >
                        <span class="pic"><img src="images/Img5.png" alt=""></span>
                    </div>
                    
                    <button type="submit" class="btn submit" form="form" value="submit" name="button">
                        <img src="images/Img3.png" alt="">
                    </button>
                </form>
                <p class="txt">Don't know credentials?</p>
                <p>Contact admin!!!</p>
            </div>  
        </div>  
    </div>

</body>
</html>