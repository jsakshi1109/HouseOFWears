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
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="Rental.php">Rent</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="ContactUs.php">Contact</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- <section class="hero">
            <h1 style="font-size: 200%;">HOUSE OF WEARS</h1>
            <p>Get the latest fashion at affordable prices!</p>
        </section> -->
        <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="men.jpg">
            </div>
          
            <div class="mySlides fade">
              <img src="women.jpg">
            </div>
          
            <div class="mySlides fade">
              <img src="girl and boy.jpg">
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
            <div class="dots-container">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
          </div>
                    
          <br/>
          <br/>
          <br/>
          <br/>
          
    </main>

    
      
    <footer>
        <p>&copy; HOUSE OF WEARS. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
