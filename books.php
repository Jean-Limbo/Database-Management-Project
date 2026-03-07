<?php


session_start();

$host = "localhost";
$username = "root"; // Change this based on your database user
$password = ""; // Change this based on your database password
$db_name = "bookstore_php_db"; // Change this to your database name

$conn = new mysqli($host, $username, $password, $db_name);


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
    <link rel="stylesheet" type="text/css" href="books.css">
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
     <!-- BANNER PROGRAM - SLIDER -->
     <div class="imgsldr">
        <div class="slidercont">
            <div class="wrapper">
                <img src ="images/banner/2.png">
                <img src ="images/banner/9.png">
                <img src ="images/banner/11.png">
                <img src ="images/banner/6 (2).png">
                <img src ="images/banner/14.png">
                <img src ="images/banner/7 (2).png">
                <img src ="images/banner/6.png">
                <img src ="images/banner/2.png">
            </div>
         </div>
     </div>

<!-- PRODUCT SECTION -->
     <section class="product">
        <h2 class="product-category">DISCOVER YOUR NEXT READS!</h2>
 
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
         </div>
    </section>
     
    <section class="product">
        <div class="product-container">
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

    
         <!-- 11TH PRODUCT  -->
         <a href="thobt.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/thobt.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">The Hobbit</h2>
                <p class="productauthor">J.R.R. Tolkien</p>
                <span class="price">₱600</span><span class="actualprice">₱660</span>
            </div>
        </div>
    </a>

         <!-- 12th PRODUCT  -->
         <a href="inkheart.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/inkheart.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">Inkheart</h2>
                <p class="productauthor">Cornelia Funke</p>
                <span class="price">₱300</span><span class="actualprice">₱330</span>
            </div>
        </div>
    </a>

         </div>
    </section>
    
    <section class="product">
        <div class="product-container">
            <!-- 13TH PRODUCT  -->
            <a href="thiscouldbeus.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/thcbu.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">This Could Be Us</h2>
                    <p class="productauthor">Suzanne Collins</p>
                    <span class="price">₱750</span><span class="actualprice">₱825</span>
                </div>
            </div></a>

            <!-- 14TH PRODUCT  -->
            <a href="chaseme.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/cm.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">Chase Me
                    </h2>
                    <p class="productauthor">Rick Riordan</p>
                    <span class="price">₱500</span><span class="actualprice">₱550</span>
                </div>
            </div></a>
            
            <!-- 15TH PRODUCT  -->
            <a href="spsonnet.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/spsonnet.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">Shakespeare's Sonnets</h2>
                    <p class="productauthor">William Shakespeare
                    </p>
                    <span class="price">₱616</span><span class="actualprice">₱560</span>
                </div>
            </div></a>

             <!-- 16TH PRODUCT  -->
             <a href="tdlsbook.php"><div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/tdlsogudj.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">The Dirty Little Secrets of Getting Your Dream Job
                    </h2>
                    <p class="productauthor">Don Raskin</p>
                    <span class="price">₱600</span><span class="actualprice">₱660</span>
                </div>
            </div></a>

            <!-- 17TH PRODUCT  -->
            <a href="oldman.php"> <div class="productcard">
                <div class="productimage">
                    <span class="discounttag">10% off</span>
                    <img src="images/oldman.jpg" class="productthumb" alt="" >
                </div>
                <div class="productinfo">
                    <h2 class="productbrand">The Old Man and The Sea
                    </h2>
                    <p class="productauthor">Ernest Hemingway
                    </p>
                    <span class="price">7600</span><span class="actualprice">₱770</span>
                </div>
            </div></a>

           <!-- 18TH PRODUCT  -->
        <a href="behindcloseddoorsbook.php"><div class="productcard">
            <div class="productimage">
                <span class="discounttag">10% off</span>
                <img src="images/bcd.jpg" class="productthumb" alt="" >
            </div>
            <div class="productinfo">
                <h2 class="productbrand">Behind Closed Doors</h2>
                <p class="productauthor">B. A. Paris</p>
                <span class="price">₱650</span><span class="actualprice">₱550</span>
            </div>
        </div></a>


         </div>
    </section>
<!-- END OF PRODUCT SLIDER SECTION -->




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

</body>
</html>