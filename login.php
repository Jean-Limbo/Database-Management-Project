<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    // Database connection details
    $servername = "localhost";
    $username = "searreas"; 
    $password = "root"; 
    $dbname = "bookstore_php_db";

    // Check if POST values are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        // Establish a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT email, password FROM accounts WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password']; // Retrieve hashed password from DB

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['email'] = $row['email']; // Store session email
                header("Location: main.php"); // Redirect to the main page
                exit();
            } else {
                echo "<p style='color:red;'>Invalid email or password.</p>";
            }
        } else {
            echo "<p style='color:red;'>Invalid email or password.</p>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

</head>
    <title>LB BOOKSTORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<!------------------------------------ START OF PROGRAM -------------------------------------->
<body>
    <div class="main">
<!--------------------------------- NAVIGATION BAR -------------------------------------->
<header> 
    <nav class ="navbar">
        <a href="main.php" class="logo">INKED</a>
        <!-- SHOPPING CART AND ACCOUNT-->
        <div class="rightnav">
            <ul>
                <li> <a href="#"><i class="bi bi-cart" style="font-size: 35px;"></i>
                       <div class="text">Cart</div></a></li>
                 <li> <a href="login.php"><i class="bi bi-person-circle" style="font-size: 35px;"></i>
                    <div class="text">Login/Register</div></a></li>
             </ul>
        </div>
        </nav>
      <!-- MENU OPTIONS-->
        <div class="menu">
            <ul>
                <li> <a href="main.php">HOME</a></li>
                <li> <a href="books.php">BOOKS</a></li>  
            </ul>
        </div>
    </nav>
</header>
<!--------------------------------- NAVIGATION BAR END -------------------------------------->
  
<!--------------------------------- LOGIN INPUT START -------------------------------------->

<div class="login">
    <div class="cont">
            <form action="login.php" method="POST">
            <h1>LOG IN TO YOUR ACCOUNT</h1>
            <div class="formgroup">
                <label for="email">Email</label>
                <input type="text" name="email" class="formcontrol" placeholder="Email" required>
            </div>
            <div class="formgroup">
                <label for="password">Password</label>
                <input type="password" name="password" class="formcontrol" placeholder="Password" required>
            </div>
            <button type="submit" class="submitbtn">Login</button>
            <a href="signup.php">
                <div class="signupnow">No account? Sign up now!</div>
            </a>
        </form>
    </div>
</div>



<!--------------------------------- LOGIN INPUT END -------------------------------------->

<!--------------------------------- FOOTER CONTENT PROGRAM START -------------------------------------->
<div class="footer">
    <ul>
        <li>
            <h1>INKED</h1>
            <div class="texthead">For inquiries/concerns<br> get in touch with us at</div>
            <i class="bi bi-envelope" style="font-size: 30px;"></i><div class="text">lb.inc@gmail.com</div><br>
            <i class="bi bi-telephone" style="font-size: 30px;"></i><div class="text">(+63) 912 345 6789</div>
        </li>
        <li>
            <h3>COMPANY</h3>
            <a href=""><p>About us</p></a>
            <h3><br>SERVICE</h3>
            <a href=""><p>FAQs</p></a>
            <a href=""><p>Privacy and Cookie Policy</p></a>
        </li>
        <li>
            <h3>PAYMENT METHODS</h3>
            <div class="methodsicon"><i class="bi bi-wallet2" style="font-size: 40px;"></i></div><div class="text1">Bank Deposit/Over the Counter<br>
                Cash on Delivery</div>
                <br>
            
                <div class="methodsicon"><i class="bi bi-credit-card" style="font-size: 40px;"></i></div><div class="text1">Credit/Debit Cards<br>
                Digital Wallets (GCash, Paymaya)<br>
                Online Banking
                </div>
        </li>
    </ul>
    <div class="allrights">
        <p>INKED © 2024. ALL RIGHTS RESERVED.</p>
    </div>
</div>
<!--------------------------------- FOOTER CONTENT PROGRAM END -------------------------------------->


<!-- MAIN DIV END  -->
</div>

<script src="carousel.js"></script>
<script src="app.js"></script>
</body>
</html>