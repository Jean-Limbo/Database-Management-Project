<?php
// Start the session
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle the form submission
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Create an array for the product
    $product = [
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $quantity,
    ];

    // Add the product to the cart
    $_SESSION['cart'][] = $product;

    // Redirect back to the cart page
    header("Location: view_cart.php");
    exit();
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
                       <?php if (isset($_SESSION['user_email'])): ?>
                <li>
                    <a href="profile.php"><i class="bi bi-person-circle" style="font-size: 35px;"></i>
                    <div class="text"><?php echo htmlspecialchars($_SESSION['user_email']); ?></div></a>
                </li>
            <?php else: ?>
                <li>
                    <a href="signup.php"><i class="bi bi-person-circle" style="font-size: 35px;"></i>
                    <div class="text">Register</div></a>
                </li>
            <?php endif; ?>
                    <?php if (isset($_SESSION['user_email'])): ?>
                    <li>
                        <a href="logout.php"><i class="bi bi-box-arrow-right" style="font-size: 35px;"></i>
                        <div class="text">Logout</div></a>
                    </li>
                <?php endif; ?>
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
        

<!--------------------------------- PAGE CONTENT PROGRAM -------------------------------------->

<div class="container">
        <div class="cartcont"><h1>Your Shopping Cart</h1>
            <div class="shopping">
            <i class="bi bi-cart" style="font-size: 18px;">
                <span class="quantity">0</span>
            </div>
            
       

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
                    </div>
<!--------------------------------- PAGE CONTENT PROGRAM END -------------------------------------->


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
    

<script src="apps.js"></script>

</body>
</html>