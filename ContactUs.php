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

    <main>
        <div class="containe">
            <h1 style="text-align: center;">CONTACT US</h1>
            <form name="RegForm" onsubmit="return myfunction()" method="post" class="form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="EMail" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <center><button type="submit" class="btn">Send</button></center>
                </div>
        </div>

        </form>
    </main>

    <footer>
        <p>&copy; HOUSE OF WEARS. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>