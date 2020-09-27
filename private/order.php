<?php
require '../shared/database.php';
require '../shared/function.php';
// if(!($_COOKIE['username'] && $_COOKIE['userpass']))
// {
//     mysqli_close($dbconnection);
//     header("Location: login.php");
// }


// if($_COOKIE['username'] !== 'paparanjeet' || $_COOKIE['userpass'] !== 'omshantikimakabhosda')
// {
//     mysqli_close($dbconnection);
//     header("Location: login.php");
// }
if(!isset($_GET['orderid']) && empty($_GET['orderid']))
{
    mysqli_close($dbconnection);
    header('Location: report.php');
}

$query = "SELECT * FROM `orders` WHERE `orderid` = {$_GET['orderid']};";
$data = $dbconnection-> query($query);
$row = $data->fetch_assoc();

if($row['delivered'] != 0 && $row['packed'] != 0){
    mysqli_close($dbconnection);
    header('Location: report.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <style>
        * a{
            text-decoration: none;
            color: inherit;
        }
        *{
            box-sizing: border-box;
        }
        .center{
            text-align: center;
        }
        .right{
            text-align: right;
        }
    </style>
    <title>Order detail</title>
</head>
<body>
    <header>
        <button><a href="report.php">Go back</a></button>
        <button><a href="logout.php">Logout</a></button>
    </header>
    <section>
        <h1 class="center">Customer name <?php echo $row['name']; ?></h1>
    </section>
    <table>
    <tbody>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
        </tr>
    </tbody>
    <?php
        $list = $row['product'];
        $list = string_in($list, '<', '>');
        $name = [];
        $quantity = [];
        $eagle = '';
        $dmc = '';
        foreach ($list as $key) {
            $dmc = $key;
            $eagle = string_in($key, '[', ']')[0];
            $dmc = str_replace('--'."[$eagle]", '', $dmc);
    ?>
    <tr>
        <td><?php echo $dmc; ?></td>
        <td><?php echo $eagle; ?></td>
    </tr>
    <?php  } ?>
    </table>
    <section class="center">
        <h1>Total: <?php echo $row['total']; ?></h1>
        <h1>Discount: <?php echo $row['discount']; ?></h1>
        <h1>Grand total: <?php echo ($row['total']-$row['discount']); ?></h1>
        <h1><Address>Address: <?php echo $row['address']; ?></Address></h1>
    </section>
</body>
</html>