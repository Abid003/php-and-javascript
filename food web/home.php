<?php

    session_start();
    if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
        echo $_SESSION['email'];
    }else{
        echo "hi";
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wow food</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div class="header-1">

            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>woowfood</a>

            <form action="" class="search-box-container">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form>

        </div>

        <div class="header-2">

            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#Offer food">Offer food</a>
                <a href="#common food">common food</a>
                <a href="#deal">deal</a>
                <a href="#contact">contact</a>
            </nav>

            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" onclick="location.href='cart.php'"></a><span id="cart_notif" style="color: red;font-size: 15px;"></span>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-user-circle"></a>
            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="images/1.jpg" alt="">
        </div>

        <div class="content">
            <span>fresh and organic</span>
            <h3>your daily need products</h3>
            <a href="#" class="btn">get started</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- banner section starts  -->

    <section class="banner-container">

        <div class="banner">
            <img src="images/banner-1.jpg" alt="">
            <div class="content">
                <h3>special offer</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner-2.jpg" alt="">
            <div class="content">
                <h3>limited offer</h3>
                <p>upto 50% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

    </section>

    <!-- banner section ends -->

    <!-- category section starts  -->

    <section class="category" id="category">

        <h1 class="heading">Order now <span>Food</span></h1>

        <div class="box-container">

            <div class="box">
                <h3>kacci birany</h3>
                <p>upto 10% off</p>
                <img src="images/category-1.png" alt="">
                <a href="#product" class="btn">order now</a>
            </div>
            <div class="box">
                <h3>chicken birany</h3>
                <p>upto 14% off</p>
                <img src="images/category-2.png" alt="">
                <a href="#product" class="btn">order now</a>
            </div>
            <div class="box">
                <h3>tehari</h3>
                <p>upto 15% off</p>
                <img src="images/category-3.png" alt="">
                <a href="#product" class="btn">order now</a>
            </div>
            <div class="box">
                <h3>mango juice</h3>
                <p>upto 12% off</p>
                <img src="images/category-4.png" alt="">
                <a href="#product" class="btn">order now</a>
            </div>

        </div>

    </section>

    <!-- category section ends -->

    <!-- product section starts  -->

    <section class="product" id="product">

        <h1 class="heading">new <span>food for enjoy memorable moment</span></h1>

        <div class="box-container">

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-1.png" alt="">
                <h3>khichori chincken meal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 150tk <span> 180tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart1.php" class="btn" onclick="addToCart()">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-2.png" alt="">
                <h3>khichori</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 25tk<span> 30tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart2.php"class="btn" onclick="addToCart()">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-3.png" alt="">
                <h3>chicken khichori</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 90tk<span> 95k </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart3.php" class="btn" onclick="addToCart()">add to cart</a>
            </div>

            <div class="box" id="box1">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-4.png" alt="">
                <h3>egg , rice , vagitable meal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 60tk <span> 65tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart4.php" class="btn" onclick="passvalue()">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-5.png" alt="">
                <h3>nachos</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 110tk <span> 120tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /palte </span>
                </div>
                <a href="cart5.php" class="btn">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-6.png" alt="">
                <h3>fish , rice, vagitable meal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 80tk<span> 100tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart6.php" class="btn">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-7.png" alt="">
                <h3>common meal </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 40tk <span> 45tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart7.php" class="btn">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-8.png" alt="">
                <h3>banggali thali</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 35tk<span> 40tk</span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                </div>
                <a href="cart8.php" class="btn">add to cart</a>
            </div>

            <div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-9.png" alt="">
                <h3>meat burger </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 250tk<span> 260tk </span> </div>
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /piece </span>
                </div>
                <a href="cart9.php" class="btn">add to cart</a>
            </div>
        </div>

    </section>

    <!-- product section ends -->

    <!-- deal section starts  -->

    <section class="deal" id="deal">

        <div class="content">

            <h3 class="title">deal of the day</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam possimus voluptates commodi laudantium! Doloribus sint voluptatibus quaerat sequi suscipit nulla?</p>

            <div class="count-down">
                <div class="box">
                    <h3 id="day">00</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">00</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">00</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">00</h3>
                    <span>second</span>
                </div>
            </div>

            <a href="#" class="btn">check the deal</a>

        </div>

    </section>

    <!-- deal section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>

            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="send message" class="btn">

        </form>

    </section>

    <!-- contact section ends -->

    <!-- newsletter section starts  -->

    <section class="newsletter">

        <h3>subscribe us for latest updates</h3>

        <form action="">
            <input class="box" type="email" placeholder="enter your email">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>woowfood</a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sit enim nesciunt rerum laborum illum quam error ut alias!</p>
                <div class="share">
                    <a href="#" class="btn fab fa-facebook-f"></a>
                    <a href="#" class="btn fab fa-twitter"></a>
                    <a href="#" class="btn fab fa-instagram"></a>
                    <a href="#" class="btn fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>our location</h3>
                <div class="links">
                    <a href="#">Chapai</a>
                    <a href="#">Bogura</a>
                    <a href="#">Nouga</a>
                    <a href="#">Rajshahi</a>
                    <a href="#">Nator</a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <div class="links">
                    <a href="#">home</a>
                    <a href="#">Offer Food</a>
                    <a href="#">Common food</a>
                    <a href="#">deal</a>
                    <a href="#">contact 017*********,018**********</a>
                </div>
            </div>

            <div class="box">
                <h3>download app</h3>
                <div class="links">
                    <a href="#">google play</a>
                    <a href="#">window xp</a>
                    <a href="#">app store</a>
                </div>
            </div>

        </div>

        <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>

    </section>

    <script src="home.js">
    </script>


</body>

</html>