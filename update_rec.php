<?php

session_start();


$server = "localhost";
$username = "root";
$password = "9090";
$dbname = "house_of_wears";

$connection = mysqli_connect($server, $username, $password, $dbname);
//$createdb = "CREATE database test_prep";
// $createTable = "CREATE TABLE test_prep.students (`user_id` INT NOT NULL AUTO_INCREMENT, `name` varchar(100) NOT NULL, `age` INT NOT NULL, `email` varchar(100) NOT NULL, PRIMARY KEY(`user_id`));";

// if(mysqli_query($connection, $createdb))
// {
//     echo "DB CREATED";
// }

// if(mysqli_query($connection, $createTable))
// {
//     echo "table CREATED";
// }


if(!$connection)
{
    die("Connection Failed! 😢" .mysqli_connect_error());
}

$p_id = $_POST['p_id'];
// echo $user_id;


$select_query = mysqli_query($connection,"SELECT * FROM stock WHERE p_id='$p_id';");
$res = mysqli_fetch_assoc($select_query);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of Wears</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <img src="Logo1.png" alt="Logo">
                <title1>
                    <h5 style="color: #280680;"> House of Wears </h5>
                </title1>
                <tagline>
                    <H6 style="color: #65499c;"> Rent/Buy.Wear.Repeat </H6>
                </tagline>
            </div>
            <div class="search-container">
                <form>
                    <input type="text" placeholder="What are you looking for?">
                    <button type="submit">Search</button>
                </form>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="Rental.php">Rent</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </header>
<br>
<div class="containe">
<h1 style="text-align: center;">Update Product bearing Product ID of <?php echo $res['p_id']?></h1><br>
    <form method="POST" action="">
    <div class="form-group">
        <label for="name">Product Name:</label> 
        <input type="name" name="p_name" placeholder="Enter Product Name..." value="<?php echo $res['p_name']?>"> <br><br>
</div>
    <div class="form-group">
        <label for="name">Product Size:</label>  
        <input type="name" name="p_size" placeholder="Ex: S / Small..." value="<?php echo $res['p_size']?>"><br><br>
</div>
    <div class="form-group">
        <label for="name">Product Quantity</label>
        <input type="number" name="p_qty" placeholder="Enter product Quantity..." value="<?php echo $res['p_qty']?>"><br><br>
</div>
<div class="form-group">
        <center><button type="submit" class="btn" name="updateBtn">Update Stock Item</button></center><br>
</div>

        </div>
</body>

<?php
if(isset($_POST['updateBtn']))
{
    $p_name = $_POST['p_name'];
    $p_size = $_POST['p_size'];
    $p_qty = $_POST['p_qty'];

    $update_query = "UPDATE stock  set p_name = '$p_name', p_size = '$p_size', p_qty='$p_qty' where p_id='$p_id'";

    if(mysqli_query($connection, $update_query))
    {
        echo "<p style='color:green'>Updated Succesfully ✅</p>";
        header("location: test_prep.php");
        
    }

    else

    echo "<p style='color:red'>Not Updated Succesfully ❌</p>";

}
?>