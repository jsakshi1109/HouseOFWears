<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>House of Wears</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    button {
      background-color: #280680;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 0.5em;
      margin-top: 1em;
      cursor: pointer;
    }

    button:hover {
      background-color: #65499c;
      color: #fff;
    }
  </style>
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
        <li><a href="Shop.php">Shop</a></li>
        <li><a href="ContactUs.php">Contact</a></li>
        <li><a href="Login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="sidebar">
      <h3>Categories</h3>
      <br />
      <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-header">Men</div>
          <div class="accordion-panel">
            <ul>
              <li><a href="#">Kurtas</a></li>
              <li><a href="#">Three piece suits</a></li>
              <li><a href="#">Two piece suits</a></li>
              <li><a href="#">Pants</a></li>
            </ul>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">Women</div>
          <div class="accordion-panel">
            <ul>
              <li><a href="#">Dresses</a></li>
              <li><a href="#">Lehanga</a></li>
              <li><a href="#">One Pieces</a></li>
              <li><a href="#">Skirt</a></li>
            </ul>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header">Kids</div>
          <div class="accordion-panel">
            <ul>
              <li><a href="#">Boys</a></li>
              <li><a href="#">Girls</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>

    <?php
    // Establish a connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "Sakshi@123";
    $dbname = "house_of_wears";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check for connection errors
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $q = "SELECT name , price , descr, image_url, size from clothing";
    $result = mysqli_query($conn, $q);
    $row = mysqli_num_rows($result);
    ?>
    <h2>Rental Clothes</h2>
    <div class="products-container">
      <?php
      for ($i = 0; $i < $row; $i++) {
        $op = mysqli_fetch_assoc($result);

        $name = $op["name"];
        $price = $op["price"];
        $descr = $op["descr"];
        $image = $op["image_url"];
        $size = $op["size"];
        ?>

        <div class="product">
          <img src="<?php echo $image ?>" alt="Product 1">
          <div class="product-details">
            <h3>
              <?php echo $name ?>
            </h3>
            <p class="description">
              <?php echo $descr ?>
            </p>
            <p class="size">Size:
              <?php echo $size ?>
            </p>
            <p class="price">
              <?php echo $price ?> Rs/day
            </p>
            <button id="add-to-cart" class="add-to-cart-button" onclick="addToCart()">Add to Cart</button>
            <!-- <form method="POST">
            <button class="add-to-cart-button" id="add_to_cart" type="submit" name="add_to_cart">Add to Cart</button>
          </form> -->
            <script>
              function addToCart() {
                window.location.assign("Cart.php");
              }
            </script>
            <!-- </div> -->
          </div>


        </div>

        <?php
      } ?>
    </div>

    <br />
    <br />
    <br />
    <br />
    </section>
  </main>

  <footer>
    <p>&copy; HOUSE OF WEARS. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>
<!-- fixed sidebar that displays the accordion items only when the category header is hovered for a clothing brand -->