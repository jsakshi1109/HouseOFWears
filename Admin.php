<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>
  <link rel="stylesheet" href="s.css">
  <script src="script.js"></script>
  <?php
  $servername = "localhost";
    $username = "root";
    $password = "9090";
    $dbname = "house_of_wears";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check for connection errors
    if (!$conn) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }
    ?>
  
</head>
<body>
    <nav>
      <img src="Logo1.png" alt="Logo" width="70px"  height="70px">
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>
    <main>
      <div class="data">
        <?php
        $sql = "SELECT sum(payment.total) as sum, count(orders.order_id) as count, round(count(orders.order_id),2) as avg from payment, orders where orders.order_id = payment.order_id";
        $result = mysqli_query($conn, $sql);
        $op = mysqli_fetch_assoc($result);

        $sum = $op["sum"];
        $count = $op["count"];
        $avg = $op["avg"];
        ?>
        <div class="box sales">
          <div class="box-content">
            <h3>Total Sales</h3>
            <div class="value"><?php echo 'Rs. <br>'.$sum ?></div>
          </div>
        </div>
        <div class="box revenue">
          <div class="box-content">
            <h3>Total Revenue</h3>
            <div class="value">Rs. 200,000</div>
          </div>
        </div>
        <div class="box orders">
          <div class="box-content">
            <h3>Total Orders</h3>
            <div class="value"><?php echo $count ?></div>
          </div>
        </div>
        <div class="box avg-orders">
          <div class="box-content">
            <h3>Average Yearly Orders</h3>
            <div class="value"><?php echo $avg ?></div>
          </div>
        </div>
        <div class="box cac">
          <div class="box-content">
            <h3>Customer Acquisition Cost</h3>
            <div class="value">Rs. 50/customer</div>
          </div>
        </div>
      </div>

      
      <table>
        <thead>
          <tr>
            <th>CUSTOMER ID</th>
            <th>ORDER ID</th>
            <th>CUSTOMER NAME</th>
            <th>ORDER DATE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <?php
    // Establish a connection to the database
    //$servername = "localhost";
    //$username = "root";
    //$password = "9090";
    //$dbname = "house_of_wears";
    //$conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check for connection errors
    //if (!$conn) 
    //{
      //die("Connection failed: " . mysqli_connect_error());
    //}

    $q = "SELECT customer.customer_id, orders.order_id, customer.name, orders.date, payment.total from orders, customer, payment where orders.customer_id = customer.customer_id and orders.order_id = payment.order_id order by orders.order_id";
    $result = mysqli_query($conn, $q);
    $row = mysqli_num_rows($result);
    for($i=0 ; $i<$row ; $i++)
    {
      $op = mysqli_fetch_assoc($result);

      $customer_id = $op["customer_id"];
      $order_id = $op["order_id"];
      $name = $op["name"];
      $date = $op["date"];
      $total = $op["total"];

    ?>
        <tbody>
          <tr>
            <td><?php echo $customer_id?></td>
            <td><?php echo $order_id?></td>
            <td><?php echo $name?></td>
            <td><?php echo $date?></td>
            <td><?php echo $total?></td>
          </tr>
          <!--<tr>
          <td><//?php echo $customer_id?></td>
            <td><//?php echo $order_id?></td>
            <td><//?php echo $name?></td>
            <td><//?php echo $date?></td>
            <td><//?php echo $total?></td>
          </tr>
          <tr>
          <td><//?php echo $customer_id?></td>
            <td><//?php echo $order_id?></td>
            <td><//?php echo $name?></td>
            <td><//?php echo $date?></td>
            <td><//?php echo $total?></td>
          </tr>
          <tr>
          <td><//?php echo $customer_id?></td>
            <td><//?php echo $order_id?></td>
            <td><//?php echo $name?></td>
            <td><//?php echo $date?></td>
            <td><//?php echo $total?></td>
          </tr>-->
        </tbody>
        <?php } ?>
      </table>
    </main>
  </body>
  



  <!--</*?php

require('connection.php');
session_start();
if(!empty($_SESSION["customer_id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $mail_id = $_POST["mail_id"];
  $pw = $_POST["pw"];
  $result = mysqli_query($con, "SELECT * FROM customer WHERE mail_id = '$mail_id'");
  $row = mysqli_fetch_assoc($result);
  $result2 = mysqli_query($con, "SELECT * FROM customer WHERE mail_id ='$mail_id'");
  $row2 = mysqli_fetch_assoc($result2);

  if(mysqli_num_rows($result) > 0){
    if($pw == $row['pw']){
      $_SESSION["Login"] = true;
      $_SESSION["customer_id"] = $row["customer_id"];
      if($row2["customer_id"] == 1)
      header("Location: admin.php");
      else
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

?>-->