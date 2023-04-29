<!-- PHP CODE -->
<?php
      // Establish a connection to the database
      $servername = "localhost";
      $username = "root";
      $password = "9090";
      $dbname = "house_of_wears";
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check for connection errors
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Get the product ID and quantity from the form submission

      $cloth_id = $_POST['cloth_id'];
      $name = $_POST['name'];
      $quantity = $_POST['quantity'];
      $size = $_POST['size'];
      $price = $_POST['price'];

      // Check if the cloth already exists in the cart
      $sql = "SELECT * FROM cart WHERE cloth_id = '$cloth_id'";
      $result = mysqli_query($conn, $sql);

      // If the cloth already exists, update the quantity
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $new_quantity = $row['quantity'] + $quantity;
        $sql = "UPDATE cart SET quantity = '$new_quantity' WHERE cloth_id = '$cloth_id'";
        mysqli_query($conn, $sql);
      }
      // If the cloth doesn't exist, insert a new row
      else {
        $sql = "insert into cart (cloth_id, name, quantity, size, price) values ('$cloth_id', '$name' , $quantity, '$size', '$price')";
        mysqli_query($conn, $sql);
      }

      // Close the database connection
      mysqli_close($conn);
      ?>