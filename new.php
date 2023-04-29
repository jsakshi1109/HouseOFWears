<html>

<head>
    <style>
        form {
            margin: 0 auto;
            width: 600px;
        }

        body {
            color: black;
            font-family: sans-serif;
        }
    </style>
    <title>House of Wears</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body bgcolor="#eee">
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
                <form1>
                    <input type="text" placeholder="What are you looking for?">
                    <button type="submit">Search</button>
                </form1>
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
    <br />
    <div class="containe">
        <h1 style="text-align: center;">SIGN UP</h1>
        <form name="RegForm" onclick="myfunction()" method="POST" class="form">
            <div class="form-group">
                <label for="customer_id">Customer ID:</label>
                <input type="text" id="customer_id" name="customer_id" required autofocus>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="Name" required autofocus>
            </div>
            <div class="form-group">
                <label for="mail_id">Email:</label>
                <input type="email" id="mail_id" name="mail_id" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="pin_code">Pin Code:</label>
                <input type="tel" id="pin_code" name="pin_code" required>
            </div>
            <div class="form-group">
                <p>Password: <input type="password" value="" size="40" name="pw" id="myInput"><br><br>
            </div>
            <input type="checkbox" onclick="mypassword()">&nbsp; Show Password</p><br />
            <div class="form-group">
                <button type="submit" class="btn">Sign up</button>
            </div>
            </form>

            <?php
function myfunction()
{
$servername = "localhost";
$username = "root";
$password = "9090";

$c = new mysqli($servername, $username, $password);

if ($c->connect_error) {
    die("first error");
}
$c->close();
$dbname = "house_of_wears";

$c = new mysqli($servername, $username, $password, $dbname);
if ($c->connect_error) {
    die("second error");
}
$c->close();


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $servername = "localhost";
    $username = "root";
    $password = "9090";
    $dbname = "house_of_wears";
    
    $customer_id = $_POST["customer_id"];
    $name = $_POST["Name"];
    $mail_id = $_POST["mail_id"];
    $address = $_POST["address"];
    $pin_code = $_POST["pin_code"];
    $contact_number = $_POST["contact_number"];
    $pw = $_POST["pw"];

    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) {
        echo $customer_id . $name . $mail_id . $address . $pin_code . $contact_number;
        die("error connection");
    }
    $q = "insert into customer values($customer_id,'$name','$mail_id','$address',$pin_code,$contact_number,'$pw')";

    $con->query($q);
    if ($con->error) {
        die("third error");
    }
    $con->close();
}

}
?>

    </div>

   
    <footer>
        <p>&copy; HOUSE OF WEARS. All rights reserved.</p>
    </footer>

  
    <script src="script.js"></script>
</body>

</html>