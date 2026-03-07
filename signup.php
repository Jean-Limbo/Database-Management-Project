<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $firstName =($_POST['first_name']);
    $lastName = ($_POST['last_name']);
    $phone_number = ($_POST['phone_number']);
    $street_number = ($_POST['street_number']);
    $street_name = ($_POST['street_name']);
    $state = ($_POST['state']);
    $city= ($_POST['city']);
    $postal_code = ($_POST['postal_code']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $confirmPassword = ($_POST['confirm_password']);

    // Validate form data
    if ($password !== $confirmPassword) {
        die("Passwords do not match. <a href='signup.php'>Go back</a>");
    }

    // Linking Database Connection
    $servername = "localhost";
    $username = "searreas"; // Replace with your database username
    $password = "165897423"; // Replace with your database password
    $dbname = "bookstore_php_db"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
   // Insert into accounts
    $sql1 = "INSERT INTO accounts (email, password) VALUES (?, ?)";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("ss", $email, $hashedPassword);    
    $stmt1->execute();

    // Insert into address
    $sql2 = "INSERT INTO address (street_number, street_name, state, city_or_province, postal_code) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("sssss", $street_number, $street_name, $state, $city, $postal_code);
    $stmt2->execute();

    if ($stmt1->affected_rows > 0 && $stmt2->affected_rows > 0) {
        // Store the user's email in the session
        $_SESSION['user_email'] = $email;
    
        // Redirect to the main page
        header("Location: main.php");
        exit();
    }

    $stmt1->close();
    $stmt2->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

</head>
    <title>LB BOOKSTORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="signup.css">
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
            <li> <a href="index.php"><i class="bi bi-cart" style="font-size: 35px;"></i>
                       <div class="text">Cart</div></a></li>
                 <li> <a href="login.php"><i class="bi bi-person-circle" style="font-size: 35px;"></i>
                    <div class="text">Register</div></a></li>
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
        <form action="signup.php" method="POST">
            <h1>CREATE YOUR ACCOUNT</h1>

            <h3>Fill Personal Information</h3>

                <div class="formgroup">
                    <label for="">First Name</label>
                    <input type="text" class="formcontrol" name="first_name" placeholder="First Name" required>
                </div> 
                <div class="formgroup">
                    <label for="">Last Name</label>
                    <input type="text" class="formcontrol" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="formgroup">
                    <label for="">Phone Number</label>
                    <input type="text" class="formcontrol" name="phone_number"placeholder="Phone Number" required>
                </div> 

                <div class="formgroup">
                    <label for="">Street Number</label>
                    <input type="text" class="formcontrol" name="street_number" placeholder="Street Number" required>
                </div>

                <div class="formgroup">
                    <label for="">Street Name</label>
                    <input type="text" class="formcontrol" name="street_name" placeholder="Street Name" required>
                </div>

                <div class="formgroup">
                    <label for="">City or Province</label>
                    <input type="text" class="formcontrol" name="city" placeholder="city_or_province" required>
                </div>

                <div class="formgroup">
                    <label for="">State/Country</label>
                    <input type="text" class="formcontrol" name="state" placeholder="State or Country" required>
                </div>

                
                <div class="formgroup">
                    <label for="">Postal Code</label>
                    <input type="text" class="formcontrol" name="postal_code" placeholder="Postal Code" required>
                </div>

                <div class="formgroup">
                    <label for="">Email</label>
                    <input type="text" class="formcontrol" name="email" placeholder="Email" required>
                </div>
                <div class="formgroup">
                    <label for="">Password</label>
                    <input type="password" class="formcontrol" name="password" placeholder="Password" required>
                </div>
                <div class="formgroup">
                    <label for="">Confirm Password</label>
                    <input type="password" class="formcontrol" name="confirm_password" placeholder="Confirm Password" required>
                </div>
    

            <input type="submit" class="submitbtn" value="Register">
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