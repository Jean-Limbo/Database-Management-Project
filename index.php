<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

</head>
    <title>LB BOOKSTORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
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
         

<body>
    
    <div class="container">
            <h1>Your Shopping Cart</h1>
            <div class="shopping">
                <div class="cartlogo"><i class="bi bi-cart" style="font-size: 35px;"></i><span class="quantity">0</span></div>
                
            </div>
        </header>

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

    <script src="apps.js"></script>
</body>
</html>