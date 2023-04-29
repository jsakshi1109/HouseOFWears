

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
<h1 style="text-align: center;">Admin Page</h1><br>
    <form method="POST" action="">
    <div class="form-group">
        <label for="name">Product Name:</label> 
        <input type="name" name="p_name" placeholder="Enter Product Name..."> <br><br>
</div>
    <div class="form-group">
        <label for="name">Product Size:</label>  
        <input type="name" name="p_size" placeholder="Ex: S / Small..."><br><br>
</div>
    <div class="form-group">
        <label for="name">Product Quantity</label>
        <input type="number" name="p_qty" placeholder="Enter product Quantity..." ><br><br>
</div>
<div class="form-group">
        <center><button type="submit" class="btn" name="submitBtn">Add To Stock</button></center><br>
</div>

        </div>
</body>

<?php
    $server = "localhost";
    $username = "root";
    $password = "9090";
    $db = "house_of_wears";

    $connection = mysqli_connect($server, $username, $password,$db);
    
    //$createdb = "CREATE database test_prep";
     //$createTable = "CREATE TABLE test_prep.students (`user_id` INT NOT NULL AUTO_INCREMENT, `name` varchar(100) NOT NULL, `age` INT NOT NULL, `email` varchar(100) NOT NULL, PRIMARY KEY(`user_id`));";

     //if(mysqli_query($connection, $createdb))
     //{
       //  echo "DB CREATED";
     //}

     //if(mysqli_query($connection, $createTable))
     //{
      //   echo "table CREATED";
     //}


    if(!$connection)
    {
        die("Connection Failed! 😢" .mysqli_connect_error());
    }

    else
    {
        if(isset($_POST['submitBtn']))
        {
            $p_name = $_POST['p_name'];
            $p_size = $_POST['p_size'];
            $p_qty = $_POST['p_qty'];
        
        $insert_query = "INSERT INTO house_of_wears.stock(`p_name`, `p_size`, `p_qty`) VALUES ('$p_name', '$p_size', '$p_qty');";
        

        if(mysqli_query($connection, $insert_query))
        {
            echo "<p style='color:green'>Insertion Sucsessful</p>";
            //  header("location: test_prep.php");
        }
        else
        {
            echo "<p style='color:red'>Insertion did not happen!</p>";
        }

        
        }
    }
            
    $select_query = mysqli_query($connection,"SELECT * FROM house_of_wears.stock;");
    $num_rows = mysqli_num_rows($select_query);

    if($num_rows == 0)
    {
        echo "<center><p style='color:red'>No records in the database!</p></center>";
    }
    ?>
            <br><br><br><center><b>STOCK PREVIEW</b><br><br>
                <table border = 1>
                <tr>
                    <th>Product ID</th>    
                    <th>Product Name</th>    
                    <th>Product Size</th>    
                    <th>Product Quantity</th>    
                    
                    <th>Operations</th>    
                </tr>
            
    
    
    <?php

    while($row = mysqli_fetch_assoc($select_query))
    {
            echo "
                <tr>
                <td>".$row['p_id']."</td>
                <td>".$row['p_name']."</td>
                <td>".$row['p_size']."</td>
                <td>".$row['p_qty']."</td>
                <td><a href='update_rec.php?p_id=$row[p_id]'>Update</a></td>           
                
                </tr>
            ";

    }


?>
</table></center>
</html>