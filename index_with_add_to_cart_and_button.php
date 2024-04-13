<?php
$servername = "localhost";
$username = "root";
$password = "Pinkesh@2702";
$dbname = "supermarket";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for a successful connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST variables are set
if (isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Repassword']) && isset($_POST['Firstname']) && isset($_POST['Lastname'])) {

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Repassword = $_POST['Repassword'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];

    $sql = "INSERT INTO registration (Email, Password, Repassword, Firstname, Lastname) VALUES ('$Email','$Password','$Repassword','$Firstname','$Lastname')";

}


// Your login code can go here

session_start();

if (isset($_POST["login"])) {
    $servername = "localhost";
    $username = "root";
    $password = "Pinkesh@2702";
    $dbname = "supermarket";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for a successful connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST['Password']; // Assuming you store passwords securely

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM registration WHERE Email=? AND Password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count === 1) {
        $row = $result->fetch_assoc();

        $_SESSION["SESSION_EMAIL"] = $email;
        $_SESSION['Firstname'] = $row['Firstname'];

        header("Location:index.php");
    } else {
        header("Location:login.php?error=1");
    }

    $stmt->close();
    $conn->close();
}



?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dwarkesh Super Market</title>

<link rel="icons" type="image/PNG" href="image/favicon.PNG">


    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">


<!-- Swiper -->
    <!-- <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> -->
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

<!-- meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- header start     -->
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-shopping-basket">groco</i></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        </nav>

    <div class="icons">
        <div class="fa fa-bars" id="menu-btn"></div>
        <div class="fa fa-search" id="search-btn"></div>
        <div class="fa fa-shopping-cart" id="cart-btn"></div>
        <div class="fa fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search"  placeholder="Search Here" id="search-box">
        <label for="search-box" class="fa fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="image/cart-img-1.png">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$5.99/-</span>
                <span class="quantity">Oty : 1</span>
            </div>
        </div>

        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="image/cart-img-2.png">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">Oty : 2</span>
            </div>
        </div>

        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="image/cart-img-3.png">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">Oty : 1</span>
            </div>
        </div>
        <div class="total">Total : $18.97 </div>
        <a href="checkout.php" class="btn">Checkout</a>
    </div>


<form action="index.php" class="login-form">
    <h3>Login Now</h3>
    <input type="email" placeholder="Your Email" class="box">
    <input type="password" placeholder="Your password" class="box">
    
    
<p>Forgot Your password <a href="#">Click Here</a></p>
<p>Don't Have An Account <a href="registration.php">Create Now</a></p>
    <input type="submit" value="Login Now" class="btn">

</form>


</header>
<!-- header end -->

<!-- banner section start -->
<section class="home" id="home">
    <div class="content">
        <h3>Fresh and <span>Organic</span> Product for You</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur doloribus fuga aut ad explicabo necessitatibus accusamus aliquid omnis. Esse suscipit at ipsa voluptates reprehenderit iure saepe, optio sint voluptate nihil.
        </p>

        <a href="#" class="btn">Shop Now</a>
    </div>
</section>
<!-- banner section end -->

<section class="features" id="features">
    <h1 class="heading">Our <span>features</span></h1>

<div class="box-container">
    <div class="box">
        <img src="image/feature-img-1.png" alt="">
        <h3>Fresh and Organic</h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nesciunt reiciendis sapiente sed</p>

        <a href="#" class="btn">Read More</a>
    </div>
    <div class="box">
        <img src="image/feature-img-2.png" alt="">
        <h3>Fresh and Organic</h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nesciunt reiciendis sapiente sed</p>

        <a href="#" class="btn">Read More</a>
    </div>
    <div class="box">
        <img src="image/feature-img-3.png" alt="">
        <h3>Fresh and Organic</h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nesciunt reiciendis sapiente sed</p>

        <a href="#" class="btn">Read More</a>
    </div>
</div>
</section>

<!-- our features section -->


<!-- our product section -->

<section class="products" id="products">
    <h1 class="heading">our <span>product</span></h1>

    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="image/product-1.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>
            


            <div class="swiper-slide box">
                <img src="image/product-2.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="image/product-3.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="image/product-4.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>


            
        
        </div>
    </div>







    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="image/product-4.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>
            


            <div class="swiper-slide box">
                <img src="image/product-5.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="image/product-6.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="image/product-4.png">
                <h1>Fresh Orange</h1>
                <div class="price">$12.99/- -15.99/-</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <a href="" class="btn">add to cart</a>
            </div>


             
        
        </div>
    </div>
</section>

<!-- our product section -->


<!-- our categories section -->
<section class="categories" id="categories">
    <h1 class="heading"> Product <span>Categories</span></h1>



    <div class="box-container">
        <div class="box">
            <img src="image/cat-1.png">
            <h3>Vegetables</h3>
            <p>Upto 45%</p>
            <a href="vegetables.php" class="btn">Shop Now</a>
        </div>

        <div class="box">
            <img src="image/cat-2.png">
            <h3>Fresh Foods</h3>
            <p>Upto 45%</p>
            <a href="fruits.php" class="btn">Shop Now</a>
        </div>

        <div class="box">
            <img src="image/cat-3.png">
            <h3>Dairy Product</h3>
            <p>Upto 45%</p>
            <a href="dairy.php" class="btn">Shop Now</a>
        </div>

        <!-- <div class="box">
            <img src="image/cat-4.png">
            <h3>Fresh Meat</h3>
            <p>Upto 45%</p>
            <a href="#" class="btn">Shop Now</a>
        </div> -->
    </div>
</section>
<!-- our categories section -->


<!-- our review section -->

<section class="review" id="review">
<h1 class="heading"> Customers <span>Review</span></h1>

<div class="swiper review-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide box">
            <img src="image/pic-1.png">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo id neque atque tempore distinctio aut illum hic mollitia praesentium omnis nobis deserunt iusto, ipsam voluptates unde magnam facilis eaque consectetur.</p>
            <h3>ohn Deo</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
        </div>


        <div class="swiper-slide box">
            <img src="image/pic-2.png">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo id neque atque tempore distinctio aut illum hic mollitia praesentium omnis nobis deserunt iusto, ipsam voluptates unde magnam facilis eaque consectetur.</p>
            <h3>ohn Deo</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
        </div>


        <div class="swiper-slide box">
            <img src="image/pic-3.png">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo id neque atque tempore distinctio aut illum hic mollitia praesentium omnis nobis deserunt iusto, ipsam voluptates unde magnam facilis eaque consectetur.</p>
            <h3>ohn Deo</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
        </div>


        <div class="swiper-slide box">
            <img src="image/pic-4.png">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo id neque atque tempore distinctio aut illum hic mollitia praesentium omnis nobis deserunt iusto, ipsam voluptates unde magnam facilis eaque consectetur.</p>
            <h3>ohn Deo</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
        </div>
    </div>
</div>
    
</section>

<!-- our review section -->

<!-- our Blog section -->

<section class="blogs" id="blogs">
<h1 class="heading"> Our <span>Blogs</span></h1>
<div class="box-container">
    <div class="box">
        <img src="image/blog-1.jpg">
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fa fa-user"></i> By User</a>
                <a href="#"><i class="fa fa-calendar"></i> 1st May 2023</a>
            </div>
            <h3>Fresh and Organice Vegetables and Fruits</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolorem voluptate id, incidunt pariatur eveniet officia sequi autem, impedit culpa repellendus voluptatem est doloremque deserunt quisquam magni repellat! Illo, ratione!</p>
            <a href="#" class="btn"> Read More </a>
        </div>
    </div>


    <div class="box">
        <img src="image/blog-2.jpg">
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fa fa-user"></i> By User </a>
                <a href="#"><i class="fa fa-calendar"></i> 1st May 2023 </a>
            </div>
            <h3>Fresh and Organice Vegetables and Fruits</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolorem voluptate id, incidunt pariatur eveniet officia sequi autem, impedit culpa repellendus voluptatem est doloremque deserunt quisquam magni repellat! Illo, ratione!</p>
            <a href="#" class="btn"> Read More </a>
        </div>
    </div>


    <div class="box">
        <img src="image/blog-3.jpg">
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fa fa-user"></i> By User </a>
                <a href="#"><i class="fa fa-calendar"></i> 1st May 2023 </a>
            </div>
            <h3>Fresh and Organice Vegetables and Fruits</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolorem voluptate id, incidunt pariatur eveniet officia sequi autem, impedit culpa repellendus voluptatem est doloremque deserunt quisquam magni repellat! Illo, ratione!</p>
            <a href="#" class="btn"> Read More </a>
        </div>
    </div>
</div>

</section>

<!-- our Blog section -->


<!-- our FOOTER section -->


<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> Groco <i class="fa fa-shopping-basket"></i></h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, alias ullam beatae sit voluptatibus nemo. Illum
            </p>

            <div class="share">
                <a href="#" class="fa fa-facebook-official"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>


        <div class="box">
            <h3> Contact Info</h3>
            <a href="#" class="links"><i class="fa fa-phone"></i>9702516763</a>
            <a href="#" class="links"><i class="fa fa-phone"></i>9702156763</a>
            <a href="#" class="links"><i class="fa fa-envelope"></i>22amtics184@gmail.com</a>
            <a href="#" class="links"><i class="fa fa-map-marker"></i>Gujarat Surat</a>

            
        </div>



        <div class="box">
            <h3> Quick Links</h3>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>home</a>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>features</a>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>product</a>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>categories</a>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>Review</a>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>Blogs</a>

            
        </div>


        <div class="box">
            <h3>News Letter</h3>
            <p>Subscribe for latest Update</p>
            <input type="email" placeholder="Your email" class="email">
            <input type="submit" value="Subscribe" class="btn">
            <img src="image/payment.png" class="payment-img">
        </div>
    </div>
</section>
<!-- our FOOTER section -->


 <!-- js file -->

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <script src="script.js"></script>

 



</body>
</html>