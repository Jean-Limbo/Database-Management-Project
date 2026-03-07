
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
</head>
    <title>LB BOOKSTORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="hgbook.css">
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
                <li> <a href="bestsellers.php">BESTSELLERS</a></li>
                <li> <a href="preorders.php">PRE-ORDERS</a></li>
                
            </ul>
        </div>
    </nav>
</header>
<!--------------------------------- NAVIGATION BAR END -------------------------------------->
         

<!--------------------------------- PAGE CONTENT PROGRAM -------------------------------------->


<div class="cart-container">
    <div class="product-image">
        <img src="images/cm.jpg" height="500px" alt="Book Cover">
    </div>
   
    

   
    <div class="informationprod">
        <div class="product-title">Chase Me

        </div>
        <div class="author">Author: Laura Florand

        </div>
        <div class="price">₱600.00</div>

        <div class="quantity">
            <label for="quantity">Qty:</label>
            <input type="number" id="quantity" min="1" value="1">
        </div>
    
        <a href="index.php" class="add-to-cart">Add to Cart</a>
    
        <div class="checkout-info">
            <p>You can pay through:</p>
            <div class="sscheckout">
            
                    <div class="methodsicon"><i class="bi bi-wallet2" style="font-size: 30px;"></i></div>
                    <div class="text1">Bank Deposit<br>Over the Counter<br>
                        Cash on Delivery</div>
                        <br>
                    
                        <div class="methodsicon_1"><i class="bi bi-credit-card" style="font-size: 30px;"></i></div>
                        <div class="text2">Credit/Debit Cards<br>
                        Digital Wallets (GCash, Paymaya)<br>
                        Online Banking</div>
            </div>
        </div>

        <div class="undernote">
            <h3>Delivered In:</h3>
               <p>* Delivery to Metro Manila addresses may take up to 3-5 working days. Provincial deliveries may take 7 working days or longer.<br>
                * Not Applicable for Pre-Order or Special Order Item<br>
                * Deliveries during sale promotions and holiday seasons may take longer than usual.<br>
                * Inked Book Store may postpone processing and deliveries in case of flood and other natural disasters to ensure the safety of its personnel.</p> 
        </div>
    
    </div>
    
</div>

<div class="bookitemsdetails">
    <h1>Product Details</h1>
    
    <div class="book-card">
        <div class="detail">
            <span class="label">Title:</span>
            <span class="value">Chase Me</span>
        </div>
        <div class="detail">
            <span class="label">ISBN:</span>
            <span class="value">61452483</span>
        </div>
        <div class="detail">
            <span class="label">Genre:</span>
            <span class="value">Romance</span>
        </div>
        <div class="detail">
            <span class="label">Original Price:</span>
            <span class="value">₱550</span>
        </div>
        <div class="detail">
            <span class="label">Price:</span>
            <span class="value">₱500</span>
        </div>
        <div class="detail">
            <span class="label">Publication Date:</span>
            <span class="value">March 13, 2023</span>
        </div>
        <div class="detail">
            <span class="label">Publisher ID:</span>
            <span class="value">98123</span>
        </div>
        <div class="detail">
            <span class="label">Author ID:</span>
            <span class="value">878368</span>
        </div>
        <div class="detail">
            <span class="label">Quantity:</span>
            <span class="value">32</span>
        </div>
        <div class="detail">
            <span class="label">Pages:</span>
            <span class="value">251</span>
        </div>
        <div class="detail">
            <span class="label">Language:</span>
            <span class="value">English</span>
        </div>
        <div class="detail">
            <span class="label">Author:</span>
            <span class="value">Laura Florand</span>
        </div>
    </div>
</div>
<!--------------------------------- PAGE CONTENT PROGRAM END -------------------------------------->
<!-- BEFORE FOOTER SECTION -->

<div class="bfooter">
    <ul>
        <li> <i class="bi bi-truck" style="font-size: 100px;"></i></i>
            <div class="text">
                <h3>FREE SHIPPING</h3>
                <p>Shop Php 799 and above to get your order delivered for free!</p>
            </div></li>
        <li> <i class="bi bi-credit-card-2-front-fill" style="font-size: 100px;" ;
            ></i></i>
            <div class="text">
                <h3>MEMBERSHIP DISCOUNT</h3>
                <p>Cardholders enjoy additional 5% off on D-Coded items.</p>
            </div></li>
        <li> <i class="bi bi-cash" style="font-size: 100px;"></i></i>
             <div class="text">
                <h3>CASH ON DELIVERY</h3>
                <p>Cash on Delivery available for orders worth Php 799 and above.</p>
            </div></li>
    </ul>
</div>

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