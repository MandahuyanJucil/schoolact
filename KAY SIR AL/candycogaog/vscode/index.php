<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy.Co</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
</head>
<body>
   

    <style>
        /* Login form styles */
        
        #login-form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #333;
        }
        
        #login-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        
        #login-form input[type="text"],
        #login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        #login-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>



    
    <!-- header -->
    
    <header class="header">

        <a href="index.php" class="logo"><i class="fa-thin fa-candy"></i>Candy.Co </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="About.html">About</a>
            <a href="#TourtheStore">Tour the Store</a>
            <a href="Categories.html">Categories</a>
            <a href="#Contact">Contact</a>
        </nav>
     

        <div class="icons">
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
            <?php 
            session_start();
            if(isset( $_SESSION['id'])){
                echo'<a href="logout.php" class="btn" id="login-btn">Logout</a>';
            }
            else{
                echo'<a href="log.php" class="btn" id="login-btn">Login</a>';
            }
            
            ?>
            
            <!-- login button -->
        </div>

    </header>

    <!-- header end -->

    <!-- shopping cart -->

    <div class="cart-items-container">

        <div id="close-form" class="fas fa-times"></div>
        <h3 class="title">Checkout</h3>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-1.jpg" alt="">
            <div class="content">
                <h3>Item 1</h3>
                <div class="price">$45.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-2.jpg" alt="">
            <div class="content">
                <h3>Item 2</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-3.jpg" alt="">
            <div class="content">
                <h3>Item 3</h3>
                <div class="price">$29.99/-</div>
            </div>
        </div>

        <a href="#" class="btn">Checkout</a>

    </div>

    <!-- shopping cart end-->

    <!-- home -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/bg1.jpg) no-repeat;">
                    <div class="content">
                        <h3>Your Online Candy Store for Every Occasion</h3>
                        <a href="Categories.html" class="btn">Get Started</a>
                    </div>
                </div>

                
                <div class="swiper-slide slide" style="background: url(images/bg2.jpg) no-repeat;">
                    <div class="content">
                        <h3>Making the World a Little Sweeter, One Piece at a Time</h3>
                        <a href="Categories.html" class="btn">Get Started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/banner1.png) no-repeat;">
                    <div class="content">
                        <h3>BUY NOW</h3>
                        <a href="Categories.html" class="btn">Get Started</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- banner 

    <section class="banner">
        <img src="images/bg3.jpg" alt="">
    </section>


    banner end-->

    <!-- about us 

    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us</h1>
        <div class="row">
          <div class="image">
            <img src="images/about.jpg" alt="">
          </div>
          <div class="content">
            <h3>Every Piece Made With Love</h3>
            <p>We pride ourselves on 100+ handmade candies in white, milk and dark chocolate. We have 3 generations of experience manufacturing the finest candy the old-fashioned way, "one piece at a time."</p>
          </div>
        </div>
        <div class="row">
          <div class="image">
            <img src="images/bg4.avif" alt="">

          </div>
          <div class="content">
            <h3>Our History</h3>
            <p>The Candy Co. originated in 1961 when Vanguradia opened the store in Lardizabal, Manila as a small candy shop. Candy.Co embarked on a delightful journey of crafting homemade candies. What began as a humble kitchen experiment quickly blossomed into a beloved confectionery brand. Inspired by a passion for sweets and a desire to bring joy to people's lives, Candy.Co tirelessly honed its craft. Through years of dedication, innovation, and commitment to quality, the brand became synonymous with delectable treats. Each candy is lovingly handmade using traditional recipes and the finest ingredients. From classic favorites to unique flavor combinations, Candy.Co's confections continue to captivate taste buds, evoking nostalgic memories and creating new moments of sweetness. Today, Candy.Co stands as a cherished name, delighting candy enthusiasts with every delicious bite.</p>
          </div>
        </div>
        <div class="row">
          <div class="image">
            <img src="images/bg5.jpg" alt="">
          </div>
          <div class="content">
            <h3>Our Store</h3>
            <p>Step into our Candy.Co store, where a world of sweetness awaits you. From the moment you enter, you'll be greeted by the enchanting aroma of freshly made candies. Our shelves are filled with an irresistible assortment of homemade confections, meticulously crafted with love and care. Explore the vibrant colors and whimsical shapes that adorn our candies, each one a testament to our passion for creating delightful treats. Our friendly staff is always ready to guide you through our delectable offerings, ensuring you find the perfect candies to satisfy your cravings. Indulge in the magic of Candy.Co and let your taste buds embark on a journey of pure sweetness.</p>
          </div>
        </div>
        <div class="row">
          <div class="image">
            <img src="images/bg6.webp" alt="">
          </div>
          <div class="content">
            <h3>Giving Back</h3>
            <p>At Candy.Co, we prioritize supporting local charities that address critical needs within our community. From organizations providing food to the underprivileged to those championing educational opportunities for children, we strive to make a difference in the lives of our neighbors. A portion of the proceeds from every candy purchase goes directly to these deserving causes, ensuring that the community's most vulnerable members receive the support they need. Together, let us continue sweetening lives and making the world a better place, one candy at a time.</p>
          </div>
        </div>
      </section>

about us end-->

    <!-- Tour the Shop-->

    <section class="Tour the Store" id="TourtheStore">

        <h1 class="heading"> <span>Tour</span> the Store </h1>

        <div class="row">
            <div class="column">
              <img src="images/p2 (23).jpg" alt="Snow" style="width:100%">
            </div>
            <div class="column">
              <img src="images/p2 (24).jpg" alt="Forest" style="width:100%">
            </div>
            <div class="column">
              <img src="images/p2 (29).jpg" alt="Mountains" style="width:100%">
            </div>

            <div class="container">
                <h3></h3>
                <p></p>
            </div>

        
          </div> 
    <!--end of tour the shop-->

    <!-- product 

    <section class="product" id="product">

        <h1 class="heading">our <span> products</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/p2 (2).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cadbury Buttercream</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">&#8369;350</span>
                    <a href="product1.html" class="btn">Buy now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (4).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Balls Ganache</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">&#8369;299</span>
                    <a href="product1.html" class="btn">Buy now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (3).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chocolate truffle pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">&#8369;399</span>
                    <a href="product1.html" class="btn">Buy now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (9).jfif" alt="">
                </div>
                <div class="content">
                    <h3>Chocolate Macaron</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">&#8369;599</span>
                    <a href="product1.html" class="btn">Buy now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (5).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Choco Candy Cane</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">&#8369;650</span>
                    <a href="product1.html" class="btn">Buy now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (10).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hershey's Balls</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">&#8369;699</span>
                    <a href="product1.html" class="btn">Buy now</a>
                </div>
            </div>

        </div>

    </section>


     product end-->


    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span> gallery</span></h1>

        <div class="gallery-container">

            <a href="images/p2 (17).jpg" class="box">
                <img src="images/p2 (17).jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/p2 (18).jpg" class="box">
                <img src="images/p2 (18).jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/p2 (19).jpg" class="box">
                <img src="images/p2 (19).jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/p2 (22).jpg" class="box">
                <img src="images/p2 (22).jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery5.jpg" class="box">
                <img src="images/gallery5.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/p2 (21).jpg" class="box">
                <img src="images/p2 (21).jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>

    <!-- gallery end -->

    <!-- weekly promotions -->

    <section class="promotion">

        <h1 class="heading">weekly <span>promotions</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="content">
                    <h3>Chocolate cake</h3>
                    <p>"Calling all chocolate lovers! Our Chocolate Cake is a melt in your mouth sensation that will leave your craving more!"</p>
                </div>

                <img src="images/promotion1.png" alt="">
            </div>

            <div class="box">
                <img src="images/promotion2.png" alt="">
                <div class="content">
                    <h3>Hazel nut cake</h3>
                    <p>" Fall in love with the irrestible combination of chocolate and hazelnut in our Hazel nut Cake - pure bliss on a plate!"</p>
                </div>
                
            </div>

        </div>

    </section>

    <!-- weekly promotions ends -->

    <!-- team -->

    <section class="team" id="team">

        <h1 class="heading">our  <span>team</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/p2 (15).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ma. Jannah Urgelles</h3>
                    <p>CEO</p>
                    <div class="share">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (14).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Greene Van Vailoces</h3>
                    <p>manager</p>
                    <div class="share">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/p2 (13).jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jimmy Lyn Cabalteja</h3>
                    <p>manager</p>
                    <div class="share">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- team -->

    <!-- categories 
       

    <section class="parallax" id="parallax">

        <h1 class="heading">CATEGORIES</h1>

        <div class="box-container">

            <div class="box" id="assortment">
                <div class="image">
                    <img src="images/parallax-0.jpg"  alt="Assortments"> 
                </div>
                <div class="content">
                    <h3>Assortments</h3>
                    <p>Assorted Products</p>
                </div>
            </div>

            <div class="box" id="gift-baskets"> 
                <div class="image">
                    <img src="images/parallax-4.jpg" alt="Gift Baskets">
                </div>
                <div class="content">
                    <h3>Gift Baskets</h3>
                    <p>Baskets Bundle</p>
                </div>
            </div>

            <div class="box" id="specialty">
                <div class="image">
                    <img src="images/parallax-5.jpg" alt="Specialty">
                </div>
                <div class="content">
                    <h3>Specialty</h3>
                    <p>Our Specialty</p>
                </div>
            </div>

            <div class="box" id="sweet candies">
                <div class="image">
                    <img src="images/parallax-6.jpg" alt="Dark Sweet Candies">
                </div>
                <div class="content">
                    <h3>Dark Sweets Candies</h3>
                    <p>Our Darks Candies</p>
                  
                </div>
            </div>

            <div class="box" id="white sweets candies">
                <div class="image">
                    <img src="images/parallax-7.jpg" alt="White Sweets Candies">
                </div>
                <div class="content">
                    <h3>White Sweets Candies</h3>
                    <p>Our White Candies</p>
                </div>
            </div>

            <div class="box" id="nuts">
                <div class="image">
                    <img src="images/parallax-8.jpg" alt="Nuts">
                </div>
                <div class="content">
                    <h3>Nuts</h3>
                    <p>Our Nuts Product</p>
                </div>
            </div>

        </div>

    </section>

categories end -->

    <!-- review -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/p2 (15).jpg" class="user" alt="">
                <h3>Ma. Jannah Urgelles</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Delightdul sweets! Fresh, flavorful, and beautifully crafted. The perfect treat for any occasion.</p>
            </div>

            <div class="box">
                <img src="images/p2 (14).jpg" class="user" alt="">
                <h3>Greene Van Vailoces</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>I highly recommend this sweets business to anyone who appreciates high-quality treats and a delightful experience.</p>
            </div>

            <div class="box">
                <img src="images/p2 (13).jpg" class="user" alt="">
                <h3>Jimmy Lyn Cabalteja</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Absolutely delicious! I recently tried the sweets or candies from this store, and they were truly outstanding.</p>
            </div>
        </div>

    </section>

    <!-- review -->

    <!-- order -->

    <section class="order" id="order">

        <h1 class="heading"><span>order</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="images/order.gif" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <input type="text" placeholder="first name">
                    <input type="text" placeholder="last name">
                </div>

                <div class="inputBox">
                    <input type="email" placeholder="email address">
                    <input type="number" placeholder="phone number">
                </div>

                <div class="inputBox">
                    <input type="text" placeholder="food name">
                    <input type="number" placeholder="how much">
                </div>

                <textarea placeholder="your address" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="order now" class="btn">
            </form>

        </div>

    </section>

    <!-- order end -->

  <!-- login form -->

  
<script>
    // Login functionality
    let loginForm = document.getElementById('login-form');
    loginForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission and page refresh
  
      // Get the input values
      let username = document.getElementById('username').value;
      let password = document.getElementById('password').value;
  
      // Perform login action here
      // Replace the alert with your actual login code
      if (username === 'admin' && password === 'password') {
        alert('Login successful!');
      } else {
        alert('Login failed. Please check your credentials.');
      }
    });
</script>


    <!-- footer -->

    <section class="footer">

        <div class="box-container" id="Contact">

            <div class="box">
                <h3>Address</h3>
                <p>Lardizabal Street<br>Sampaloc, Manila
                </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="#" class="link">Candy.Co@gmail.com</a>
            </div>

            <div class="box">
                <h3>Call us</h3>
                <p>+61 (2) 1478 2369</p>
                <p>+61 (2) 1478 2369</p>
            </div>

            <div class="box">
                <h3> Opening hours</h3>
                <p>Monday - Friday: 8:00Am - 5:00Pm<br> Saturday: 10:00Am - 3:00Pm </p>
            </div>

        </div>

        <div class="credit">Created by <span>Group 13</span> All rights reserved! </div>

    </section>

    







    <!-- footer ends -->

















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>


</body>
</html>