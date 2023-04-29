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
                <li><a href="ContactUs.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <br />
    <div class="containe">
        <h3 class="atcss" style="text-align: center;">Registration successful</h3>
        <br />
        <br />
        <h1 style="text-align: center;">Login</h1>
        <br />
        <br />
        <form name="RegForm" onsubmit="return myfunction()" method="post" class="form">
            <div class="form-group">
                <label for="name">Mail Id</label>
                <input type="text" id="mail_id" name="mail_id" required>
            </div>
            <div class="form-group">
                <p>Password <input type="password" value="" size="40" name="pw" id="myInput"><br><br>
            </div>
            </p>
            
            
        <?php
            session_start();

            if (isset($_POST['Login'])) {
                $mail_id = $_POST['mail_id'];
                $pw = $_POST['pw'];
                if($mail_id=="admin@gmail.com" && $pw=="admin@123" ){
                    ?>
                        <script>
                            window.location.assign("Admin.php");
                        </script>
                    <?php
                }

                $conn = new mysqli('localhost', 'root', '9090', 'house_of_wears');


                $mail_id = mysqli_real_escape_string($conn, $mail_id);
                $pw = mysqli_real_escape_string($conn, $pw);


                $stmt = $conn->prepare("SELECT * FROM customer WHERE mail_id=? and pw=?");
                $stmt->bind_param("ss", $mail_id, $pw);
                $stmt->execute();
                $result = $stmt->get_result();

                if (mysqli_num_rows($result) > 0) 
                {
                    $row = mysqli_fetch_assoc($result);
                    //echo "<script>document.getElementById('username-error').innerHTML = 'Username/Password is correct';</script>";
                    //header("Location:betterlogin.php");
                    //$_SESSION['user_id'] = $row['id'];
                    //echo "<script>window.open('Games1.php')</script>";
                    header("Location:index.php");
                } 
                
                else 
                {
                    echo "Mail Id does not exist, Sign up to continue"."<br>";
                    //header("Location:Register.php");
                    //echo "<script>document.getElementById('mail_id-error').innerHTML = 'Username/Password is Incorrect';</script>";
                }
            }
            ?>
            <input type="checkbox" onclick="mypassword()">&nbsp; Show Password</p><br />
            <div class="form-group">
                <button type="submit" name="Login" class="btn">Login</button>
            </div>
            <p class="reg">
                Don't have an account? <a href="Register.php" id="signup-link">Sign Up</a>
        </form>

    </div>
    <footer>
        <p>&copy; HOUSE OF WEARS. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>

</body>

</html>