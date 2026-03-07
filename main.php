<?php
session_start();
// Linking Database Connection
$servername = "localhost";
$username = "searreas"; // Replace with your database username
$password = "165897423"; // Replace with your database password
$dbname = "bookstore_php_db"; // Replace with your database name


$conn = new mysqli($servername, $username , $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

</head>
    <title>LB BOOKSTORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
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


<!-- BANNER PROGRAM - SLIDER -->
     <div class="imgsldr">
        <div class="slidercont">
            <div class="wrapper">
                <img src ="images/banner/1.png">
                <img src ="images/banner/3.png">
                <img src ="images/banner/3 (2).png">
                <img src ="images/banner/2.png">
                <img src ="images/banner/4.png">
                <img src ="images/banner/5.png">
                <img src ="images/banner/6.png">
                <img src ="images/banner/1.png">
            </div>
         </div>
     </div>

        

<!-- PRODUCT SLIDER SECTION -->
     <section class="product">
        <h2 class="product-category">RECOMMENDATIONS</h2>
        <button class="pre-btn"><img src="images/btn.png" style="height: 50px;"></button>
        <button class="nxt-btn"><img src="images/btn.png"style="height: 50px;"></button>
        <div class="product-container">

            <!-- 1ST PRODUCT  -->
            <a href="hgbook.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/hg1.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">The Hunger Games: The Ballad of Songbirds & Snakes</h2>
                    <p class="productauthor">Suzanne Collins</p>
                    <span class="price">₱600</span><span class="actualprice">₱660</span>
                </div>
            </div></a>

            <!-- 2ND PRODUCT  -->
            <a href="pjo.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/pj1.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">Percy Jackson & the Olympians
                    </h2>
                    <p class="productauthor">Rick Riordan</p>
                    <span class="price">₱750</span><span class="actualprice">₱825</span>
                </div>
            </div></a>
            
            <!-- 3RD PRODUCT  -->
            <a href="hpbook.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/hp1.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">Harry Potter and the Philosopher's Stone </h2>
                    <p class="productauthor">J.K. Rowling</p>
                    <span class="price">₱500</span><span class="actualprice">₱550</span>
                </div>
            </div></a>

             <!-- 4TH PRODUCT  -->
             <a href="ttvbook.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/ttv.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">Tipping the Velvet</h2>
                    <p class="productauthor">Sarah Waters</p>
                    <span class="price">₱350</span><span class="actualprice">₱385</span>
                </div>
            </div></a>

            <!-- 5TH PRODUCT  -->
            <a href="stardust.php"> <div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/stardust.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">Stardust</h2>
                    <p class="productauthor">Neil Gaiman</p>
                    <span class="price">₱600</span><span class="actualprice">₱660</span>
                </div>
            </div></a>

           <!-- 6TH PRODUCT  -->
        <a href="narniabook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tcn1.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Chronicles of Narnia</h2>
                <p class="productauthor">Suzanne Collins</p>
                <span class="price">₱650</span><span class="actualprice">₱550</span>
            </div>
        </div></a>

        <!-- 7TH PRODUCT  -->
        <a href="ticbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tinc.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Inheritance Cycle</h2>
                <p class="productauthor">Christopher Paolini</p>
                <span class="price">₱500</span><span class="actualprice">₱550</span>
            </div>
        </div>
    </a>

        <!-- 8TH PRODUCT  -->
        <a href="hisdarkmaterials.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/hdm.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">His Dark Materials</h2>
                <p class="productauthor">Philip Pullman</p>
                <span class="price">₱500</span><span class="actualprice">₱550</span>
            </div>
        </div>
    </a>

         <!-- 9TH PRODUCT  -->
         <a href="tdisrbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tdir.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Dark is Rising</h2>
                <p class="productauthor">Susan Cooper</p>
                <span class="price">₱400</span><span class="actualprice">₱440</span>
            </div>
        </div>
    </a>

         <!-- 10H PRODUCT  -->
         <a href="tmbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tm.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Magicians</h2>
                <p class="productauthor">Lev Grossman</p>
                <span class="price">₱350</span><span class="actualprice">₱385</span>
            </div>
        </div>
    </a>

         </div>
    </section>
     
<!-- END OF PRODUCT SLIDER SECTION -->


<!-- CATEGORIES SECTION-->
<div class="seccont">
    <h3>CATEGORIES AVAILABLE</h3>
    <div class="container">
        <a href="books.php"><div class="box">
            <img src="images/categories/fant.png" style="height: 350px;">
        </div></a>
        <a href="books.php"> <div class="box" >
            <img src="images/categories/fic.png" style="height: 350px;">
        </div></a>
        <a href="books.php"><div class="box">
            <img src="images/categories/romance.png" style="height: 350px;">
        </div></a>
        <a href="books.php"><div class="box">
            <img src="images/categories/myst.png" style="height: 350px;">
        </div></a>
        
    </div>
</div>
<a href="books.php"><div class="seccontseeall">
    <h2>SHOP NOW</h2>
</div></a>

<section class="product">
    <h2 class="product-category">NEW RELEASE ITEMS</h2>
    <button class="pre-btn"><img src="images/btn.png" style="height: 50px;"></button>
    <button class="nxt-btn"><img src="images/btn.png"style="height: 50px;"></button>
    <div class="product-container">

        <!-- 1ST PRODUCT  -->
        <a href="hgbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/hg1.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Hunger Games: The Ballad of Songbirds & Snakes</h2>
                <p class="productauthor">Suzanne Collins</p>
                <span class="price">₱600</span><span class="actualprice">₱660</span>
            </div>
        </div></a>

        <!-- 2ND PRODUCT  -->
        <a href="pjo.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/pj1.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">Percy Jackson & the Olympians
                </h2>
                <p class="productauthor">Rick Riordan</p>
                <span class="price">₱750</span><span class="actualprice">₱825</span>
            </div>
        </div></a>
        
        <!-- 3RD PRODUCT  -->
        <a href="hpbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/hp1.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">Harry Potter and the Philosopher's Stone </h2>
                <p class="productauthor">J.K. Rowling</p>
                <span class="price">₱500</span><span class="actualprice">₱550</span>
            </div>
        </div></a>

         <!-- 4TH PRODUCT  -->
         <a href="ttvbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/ttv.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">Tipping the Velvet</h2>
                <p class="productauthor">Sarah Waters</p>
                <span class="price">₱350</span><span class="actualprice">₱385</span>
            </div>
        </div></a>

        <!-- 5TH PRODUCT  -->
        <a href="stardust.php"> <div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/stardust.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">Stardust</h2>
                <p class="productauthor">Neil Gaiman</p>
                <span class="price">₱600</span><span class="actualprice">₱660</span>
            </div>
        </div></a>

        <!-- 6TH PRODUCT  -->
        <a href="narniabook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tcn1.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Chronicles of Narnia</h2>
                <p class="productauthor">Suzanne Collins</p>
                <span class="price">₱650</span><span class="actualprice">₱550</span>
            </div>
        </div></a>

        <!-- 7TH PRODUCT  -->
        <a href="ticbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tinc.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Inheritance Cycle</h2>
                <p class="productauthor">Christopher Paolini</p>
                <span class="price">₱500</span><span class="actualprice">₱550</span>
            </div>
        </div>
    </a>

        <!-- 8TH PRODUCT  -->
        <a href="hisdarkmaterials.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/hdm.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">His Dark Materials</h2>
                <p class="productauthor">Philip Pullman</p>
                <span class="price">₱500</span><span class="actualprice">₱550</span>
            </div>
        </div>
    </a>

         <!-- 9TH PRODUCT  -->
         <a href="tdisrbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tdir.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Dark is Rising</h2>
                <p class="productauthor">Susan Cooper</p>
                <span class="price">₱400</span><span class="actualprice">₱440</span>
            </div>
        </div>
    </a>

         <!-- 10H PRODUCT  -->
         <a href="tmbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/tm.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Magicians</h2>
                <p class="productauthor">Lev Grossman</p>
                <span class="price">₱350</span><span class="actualprice">₱385</span>
            </div>
        </div>
    </a>

     </div>
</section>

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
    
<script src="carousel.js"></script>
<script src="app.js"></script>
</body>
</html>