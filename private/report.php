<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'grocers';

$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);

if(!($_COOKIE['username'] && $_COOKIE['userpass']))
{
    mysqli_close($dbconnection);
    header("Location: login.php");
}

if(('admin' !== $_COOKIE['username']) || $_COOKIE['userpass'] !== 'password')
{
    mysqli_close($dbconnection);
    header("Location: login.php");
}
 ?>
<?php
    if($_POST){
        $orderid = explode(',', $_POST['orderid']);
        $pack = explode(',', $_POST['pack']);
        $deliver = explode(',', $_POST['deliver']);
        $query = "SELECT * FROM `orders` WHERE `orderid` IN ({$_POST['orderid']});";
        $data = $dbconnection-> query($query);
        $index=0;
        while($row = $data -> fetch_assoc()){
            $sqlquery="UPDATE `orders` SET `packed` = '$pack[$index]', `delivered` = '$deliver[$index]' WHERE `orders`.`orderid` = $orderid[$index]";
            $dbconnection -> query($sqlquery);
            $index++;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <title>Report</title>
</head>
<body>
    <header>
        <button form="formm" value="submit" name="submit">Submit</button>
        <button><a href="logout.php">Logout</a></button>
    </header>
<form action="#" method="POST" id="formm">
    <table>
        <tbody><tr>
            <th>Customer</th>
            <th>Packed</th>
            <th>Delivered</th>
        </tr>
    </tbody>
    <?php
        $sqlquery = "SELECT * FROM `orders` WHERE (`delivered`=0);";
        $data = $dbconnection -> query($sqlquery);
        while($row = $data -> fetch_assoc()) {
    ?>
    <tr>
        <td id="<?php echo $row['orderid'] ?>"><?php echo $row['name']; ?></td>
    <?php
        if ($row['packed'])
        echo "<td><input type='checkbox' name='' checked></td>";
        else 
        echo "<td><input type='checkbox' name='' ></td>";
    ?>
        <td><input class="del" name="id" type="checkbox"></td>
    </tr>
    <?php  } ?>
    </table>
</form>
</body>
<script src="del.js"></script>
</html>