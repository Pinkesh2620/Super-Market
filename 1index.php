<?php
$conn = mysqli_connect("localhost", "root", "Pinkesh@2702", "pinkesh");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="cart.js">// When the page loads, update the client-side cart display

</script>

<!-- <script>
function addToCart(productName, quantity, price) {
    // Create a new cart item
    var cartItem = document.createElement('div');
    cartItem.className = 'box';

    var content = `
        <i class="fa fa-trash"></i>
        <img src="image/cart-img-1.png">
        <div class="content">
            <h3>${productName}</h3>
            <span class="price">$${price}/-</span>
            <span class="quantity">Qty : ${quantity}</span>
        </div>
    `;

    cartItem.innerHTML = content;

    // Add the item to the shopping cart
    var shoppingCart = document.querySelector('.shopping-cart');
    shoppingCart.appendChild(cartItem);

    // Update the total price
    updateTotalPrice(price);
}

function updateTotalPrice(price) {
    var totalElement = document.querySelector('.total');
    var currentTotal = parseFloat(totalElement.textContent.replace('Total : $', ''));
    currentTotal += price;
    totalElement.textContent = `Total : $${currentTotal.toFixed(2)}`;
}
</script> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dwarkesh Super Market</title>

<link rel="icons" type="image/PNG" href="image/favicon.PNG">


    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

<!-- Swiper -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    


<!-- meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- header start     -->
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-shopping-basket">Dwarkesh Super Market</i></a>

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
        <!-- <div class="fa fa-user" id="login-btn"></div> -->
        
    </div>

    <form action="" class="search-form">
        <input type="search"  placeholder="Search Here" id="search-box">
        <label for="search-box" class="fa fa-search"></label>
    </form>

    <div class="shopping-cart" onclick= "loadPageIntoSection();">
    <div id="content-section"></div>

        <!-- <div class="box">
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
        <a href="checkout.php" class="btn">Checkout</a> -->
    </div>


    <!-- login -->
    <?php

// if (!isset($_SESSION['login'])) {
//     echo'   <form action="index.php" class="login-form" id="loginpage" method="POST">
//     <h3>Login Now</h3>
//     <input type="email" name="Email" placeholder="Your Email" class="box">
//     <input type="password" name="Password" placeholder="Your password" class="box">
//     <p>Forgot Your password <a href="#">Click Here</a></p>
//     <p>Dont Have An Account <a href="registration.html">Create Now</a> </p>
//     <input type="submit" name="Submit" value="Login Now" class="btn">
// </form>';


// }
// else{
//     echo'Welcome $_POST[email]';
// }

                        if (!isset($_SESSION['login'])) {
                            echo '<div class="icons"><a href="registration.html"><div class="fa fa-user-plus"   id="logout-btn"></div></a></div>';
                            echo '<div class="icons"><a href="login.html"><div class="fa fa-sign-in"   id="logout-btn"></div></a></div>';
                            // echo '  <a class=button style=\'background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \' href=login.html>Login</a>';
                            // echo ' <a class=button style=\'background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \'href=registration.html>Sign Up</a>';


    } else {
        // echo " <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=myAccountInfos.php>My account</a>";
        echo '<div class="icons"><a href="accountinfo.php"><div class="fa fa-user"  id="login-btn"></div></a></div>';
            // echo" <a class=button style=\"background-color: red; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=logout.php>Log out from  ".$_SESSION['login']."</a>";
       echo '<div class="icons"><a href="logout.php"><div class="fa-solid fa-right-from-bracket"   id="logout-btn"></div></a></div>';
        
    }
                        




 
?>


</header>
<!-- header end -->

<!-- banner section start -->
<section class="home" id="home">
    <div class="content">
        <h3>Fresh and <span>Organic</span> Product for You</h3>
        <p>Best place to buy fresh & real organic fruits & vegetables. That keeps you and yours family health good.
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

        <p>We ensure that the quality of vegetables and fruits should be superlative</p>

        <a href="#" class="btn">Read More</a>
    </div>
    <div class="box">
        <img src="image/feature-img-2.png" alt="">
        <h3>Instant Delivery 24/7</h3>

        <p>Send your location anywhere in Gandhinagar. Real-Time tracking, Faster, Safer Delivery.</p>

        <a href="#" class="btn">Read More</a>
    </div>
    <div class="box">
        <img src="image/feature-img-3.png" alt="">
        <h3>Payment Methods </h3>

        <p>We accept payment through net banking, Credit/Debit Card, UPI payment & Cash on Delivery</p>

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
                <img src="vegetable/1.jpeg">
                <h1>Onion</h1>
                <div class="price">Rs.100</div>
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
                <img src="vegetable/2.jpeg">
                <h1>Potato</h1>
                <div class="price">Rs.80</div>
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
                <img src="vegetable/3.jpeg">
                <h1>Lady Finger</h1>
                <div class="price">Rs.50</div>
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
                <img src="vegetable/4.jpeg">
                <h1>Tamato</h1>
                <div class="price">Rs.60</div>
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
                <img src="vegetable/5.jpeg">
                <h1>Karela</h1>
                <div class="price">Rs.80</div>
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
                <img src="vegetable/6.jpeg">
                <h1>Brinjal</h1>
                <div class="price">Rs.80</div>
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
                <img src="fruits/1.jpeg">
                <h1>Apple</h1>
                <div class="price">Rs.100</div>
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
                <img src="fruits/2.jpeg">
                <h1>Banana</h1>
                <div class="price">Rs.80</div>
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
                <img src="fruits/3.jpeg">
                <h1>Mosambi</h1>
                <div class="price">Rs.50</div>
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
                <img src="fruits/4.jpeg">
                <h1>Santra</h1>
                <div class="price">Rs.60</div>
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
                <img src="fruits/5.jpeg">
                <h1>Dragon Fruit</h1>
                <div class="price">Rs.80</div>
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
                <img src="fruits/6.jpeg">
                <h1>Peach</h1>
                <div class="price">Rs.80</div>
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
                <img src="dairy/1.jpeg">
                <h1>Butter</h1>
                <div class="price">Rs.100</div>
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
                <img src="dairy/2.jpeg">
                <h1>Cheese</h1>
                <div class="price">Rs.80</div>
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
                <img src="dairy/3.jpeg">
                <h1>Milk</h1>
                <div class="price">Rs.112/-</div>
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
                <img src="dairy/4.jpeg">
                <h1>Yogurt</h1>
                <div class="price">Rs.60</div>
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
                <img src="dairy/5.jpeg">
                <h1>Panner</h1>
                <div class="price">Rs.80</div>
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
                <img src="dairy/6.jpeg">
                <h1>Ghee</h1>
                <div class="price">Rs-80</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
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
            <img src="review/yash.jpg">
            <p>I've been a loyal customer of this supermarket for years, and I can't say enough good things about it. The store is always well-organized, and the staff is incredibly friendly and helpful. Whether I'm picking up my weekly groceries or looking for special ingredients, I can always count on this supermarket to have what I need.</p>
            <h3>Yash</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
        </div>


        <div class="swiper-slide box">
            <img src="review/meet.jpg">
            <p>The produce section is fantastic, with a wide variety of fresh fruits and vegetables. The quality is consistently excellent, and the prices are reasonable. I love that they source many of their products locally, supporting local farmers and businesses.</p>
            <h3>Meet Patel</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
        </div>


        <div class="swiper-slide box">
            <img src="review/rohit.jpg">
            <p>The store layout is easy to navigate, and I appreciate that they often have special promotions and discounts, making it even more budget-friendly. The cleanliness and hygiene standards are top-notch, especially important these days.</p>
            <h3>Rohit Mahadik</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
        </div>


        <div class="swiper-slide box">
            <img src="review/harsh.jpg">
            <p>One thing that sets this supermarket apart is its dedication to customer service. The staff is knowledgeable and always willing to assist. Whether it's helping me find a product, answering questions about ingredients, or providing recommendations, they go above and beyond.</p>
            <h3>Harsh Panchal</h3>
            <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
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
                <a href="#"><i class="fa fa-user"></i> Meet B Patel</a>
                <a href="#"><i class="fa fa-calendar"></i> 1st May 2023</a>
            </div>
            <h3>Fresh and Organice Fruits</h3>
            <p>When it comes to fresh fruits, this supermarket has truly set the gold standard. From the moment you step into the store, the vibrant colors and tantalizing aroma of the fruit section beckon you like a sweet, wholesome siren's call. As someone who values health and nutrition, I can't help but be impressed by the selection and quality this supermarket consistently offers.

The variety is simply astounding. Whether you're searching for common fruits like apples, bananas, or oranges, or you're in the mood for exotic treats like dragon fruit or passion fruit, they have it all. The assortment spans across all seasons, ensuring you get your hands on your favorite fruits year-round.

What truly sets this supermarket apart is the freshness of their fruits. Each piece looks as if it was just plucked from the orchard or garden. The crispness of the apples, the juiciness of the watermelons, and the perfect ripeness of the avocados - it's as if they have a secret formula for harvesting fruits at their peak.

Not only is the quality impeccable, but the prices are also competitive. I appreciate that they often offer promotions and bundle deals on fruits, making it even more affordable to incorporate healthy choices into our diets. The nutritional benefits are worth every penny spent.

The fruit section is immaculately clean and well-organized, making it easy to find what you need. The staff is always ready to help, offering advice on selecting the ripest fruits or providing information about the origins of specific products.

In a world where convenience often trumps health, this supermarket is a breath of fresh air. It encourages us to embrace a healthier lifestyle by providing access to an impressive array of fresh fruits. For someone like me who values nutrition and taste, this supermarket has truly become a paradise for fruit enthusiasts.

If you haven't explored their fruit section yet, I strongly recommend it. Your taste buds and your body will thank you for it.</p>
            <a href="#" class="btn"> Read More </a>
        </div>
    </div>


    <div class="box">
        <img src="image/blog-2.jpg">
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fa fa-user"></i> Vishal Nair </a>
                <a href="#"><i class="fa fa-calendar"></i> 21st May 2023 </a>
            </div>
            <h3>Fresh and Organice Vegetables</h3>
            <p>When it comes to fresh and organic vegetables, this supermarket is nothing short of a treasure trove. As someone who values a healthy lifestyle and the goodness of nature's bounty, I am thrilled by the quality and variety of vegetables this store consistently offers.

The first thing that strikes you is the vibrant display of vegetables. The kaleidoscope of colors from lush greens to deep purples and fiery reds is a sight for sore eyes. It's a place where you can tell that the produce is not just food; it's a testament to the beauty of nature itself.

The supermarket's commitment to providing organic vegetables is commendable. I can shop here with the confidence that I'm choosing produce that is free from harmful pesticides and chemicals. It's a relief to know that every bite is a step towards a healthier, chemical-free lifestyle.

The variety is truly impressive. From the common vegetables like tomatoes, carrots, and spinach to more exotic choices like kale, Swiss chard, and heirloom tomatoes, this place caters to every culinary need. It's like stepping into an oasis of greens and colors, offering endless possibilities for cooking and experimenting with healthy recipes.

What's most striking is the freshness of the vegetables. Each piece looks like it was just plucked from a garden. The crispness of the lettuce, the earthy aroma of the mushrooms, and the vibrant hues of the bell peppers are a testament to their commitment to quality.

Not only do they focus on quality, but the prices are also competitive. They often run promotions and discounts on organic produce, making it more accessible for those who aspire to lead a healthier life.

The vegetable section is impeccably organized, making it a breeze to find what you need. The staff is always on hand to help, offering advice on selecting the best vegetables and sharing tips on how to store them for maximum freshness.

In a world where fast food and convenience often take precedence, this supermarket stands as a beacon of hope for those who prioritize health and nutrition. It encourages us to embrace a lifestyle that revolves around fresh and organic vegetables, providing a haven for health enthusiasts.</p>
            <a href="#" class="btn"> Read More </a>
        </div>
    </div>


    <div class="box">
        <img src="image/blog-3.jpg">
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fa fa-user"></i> Vaidanti </a>
                <a href="#"><i class="fa fa-calendar"></i> 31st May 2023 </a>
            </div>
            <h3>Fresh and Organice Vegetables and Fruits</h3>
            <p>For any dairy enthusiast like me, finding a supermarket that offers a wide range of fresh and organic dairy products is nothing short of a dream come true. This supermarket, with its commitment to quality, has become my go-to place for dairy delights.

One of the standout features of this supermarket is its dairy section. The moment you step into this section, you're greeted by a delightful assortment of dairy products that are not only delicious but also healthier choices for you and your family.

When it comes to milk, they have a range that suits every preference. From organic cow's milk to almond, soy, and oat milk, this place caters to diverse dietary needs. I particularly appreciate the availability of organic options, ensuring that I'm consuming milk that's free from artificial hormones and pesticides.

Their cheese selection is a cheese lover's paradise. Whether you're in the mood for creamy brie, tangy cheddar, or exotic varieties, they have it all. The cheeses are sourced from reputable dairies, and the difference in taste is evident. The organic cheese options are a personal favorite, as they offer a guilt-free indulgence.

The yogurt and butter offerings are equally impressive. You'll find Greek yogurt, plant-based yogurts, and traditional options. The butter, especially the organic, grass-fed varieties, have a richness that elevates any dish they're used in.

One of the highlights of this supermarket is its commitment to supporting local dairy farmers. You'll often find locally-sourced dairy products, which not only supports the community but also ensures that the products are fresher and have a lower carbon footprint.

The dairy section is well-maintained, with a clear focus on freshness and cleanliness. The friendly staff is knowledgeable and always ready to assist, whether you're looking for a specific product or need recommendations for your next culinary adventure.

Lastly, the prices are competitive, and the supermarket frequently offers promotions and discounts on dairy products, making it an even more attractive destination for dairy enthusiasts.

In a world filled with processed and mass-produced dairy items, this supermarket provides a haven for those of us who appreciate the goodness of fresh and organic dairy. It's a place where quality meets variety, and I wouldn't trade it for anything else.</p>
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
<!-- <script>
function addToCart(productName, quantity, price) {
    // Create a new cart item
    var cartItem = document.createElement('div');
    cartItem.className = 'box';

    var content = `
        <i class="fa fa-trash"></i>
        <img src="image/cart-img-1.png">
        <div class="content">
            <h3>${productName}</h3>
            <span class="price">$${price}/-</span>
            <span class="quantity">Qty : ${quantity}</span>
        </div>
    `;

    cartItem.innerHTML = content;

    // Add the item to the shopping cart
    var shoppingCart = document.querySelector('.shopping-cart');
    shoppingCart.appendChild(cartItem);

    // Update the total price
    updateTotalPrice(price);
}

function updateTotalPrice(price) {
    var totalElement = document.querySelector('.total');
    var currentTotal = parseFloat(totalElement.textContent.replace('Total : $', ''));
    currentTotal += price;
    totalElement.textContent = `Total : $${currentTotal.toFixed(2)}`;
}
</script> -->
 <!-- js file -->
<script src = "cart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <script src="script.js"></script>


</body>
</html>