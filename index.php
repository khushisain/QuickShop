<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="gellary/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="gellary/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="gellary/favicon-16x16.png">
    <link rel="manifest" href="gellary/site.webmanifest">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="index-style.css">

    <title>QuickShop - buy what you want </title>
</head>

<body>
    <!-- Pre Loader Start -->
    <div class="container-preloader" id="container">
        <div class="wrapper5 wrapper">
            <div class="dot dot5 dot50"></div>
            <div class="dot dot5 dot51"></div>
            <div class="dot dot5 dot52"></div>
            <div class="dot dot5 dot53"></div>
        </div>
    </div>
    <!-- Pre Loader End -->
    <!-- Head section Start -->

    <header>
        <div class="logo">
            QuickShop
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#products">products</a></li>
                <li><a href="#contect">Contect Us</a></li>
            </ul>
        </div>

    </header>
    <!-- Head section End -->
    <!-- Hero Section Start -->
    <div class="hero-container">
        <img src="gellary/hero_illustration.svg" alt="">
        <div class="hero-text">
            <h1>QuickShop <span></span></h1>
            <h3>Buy What You Want</h3>
            <a href="product.php">Explore</a>
        </div>

    </div>


    <!-- Hero Section End -->


    <!-- Start about section -->
    <div id="about" class="about">
        <h2>About Us</h2>
        <div class="about-contect">

            <div class="about-text">

                <p>Welcome to QuickShop, where you may find anything you need to buy! We are an online store with a huge selection of goods, including anything from electronics to fashion, furniture, and home goods to health and beauty products.</p>

                <p> As time is of the essence, QuickShop makes every effort to make your buying experience as quick and simple as possible. With our simple checkout process and user-friendly website, you can quickly select what you need and have it delivered to your home.</p>


                <p>Our goal is to offer a huge assortment of high-quality goods at affordable rates while giving our consumers a hassle-free purchasing experience. We also aim to ensure that every customer receives great customer service.</p>
            </div>
            <div class="about_illustration">
                <img src="gellary/about_illustration .svg" alt="">

            </div>

        </div>

    </div>
    <!-- End about section -->
    <!-- Start Product section -->

    <div id="products" class="products">
        <h2>Products</h2>

    </div>


    <!-- End Product section -->
    <!-- Start Contect section -->
    <div class="contects-container">
    <h2>Contect Us</h2>
    <div id="contect" class="contect">
        <div class="contect-illustration">
            <img src="gellary/contect_illustration.svg" alt="">
        </div>
        <div class="contect-box">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="personal">
                    <input type="text" placeholder="Full Name" name="name" id="name">
                    <input type="text" name="email" id="email" placeholder="Email Address">
                </div>
                <input type="text" name="subject" id="subject" placeholder="Subject">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                <div class="btn">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <div class="contect-details">
                <h3>Let's get in touch</h3>
                <p>We're open for any suggestion or just to have a chat</p>
                <div class="social-links">

                    <div><i class="fa-solid fa-location-pin"></i><a href="https://goo.gl/maps/W8Et1b5P4Z1dpCnz8"> KKC PG college sardarshahar churu (Raj.)</a></div>
                    <div><i class="fa-solid fa-phone"></i><a href="tel: +919413124345"> +919413124345 </a></div>
                    <div><i class="fa-solid fa-paper-plane"></i><a href="mailto:kkccollege@gmail.com"> kkccollege@gmail.com</a></div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- End Contect section -->
    <!-- Start footer section  -->
    <footer>
        <div class="logo">
            QuickShop
        </div>
        <p>&copy; All Rights Reserved &nbsp;<a href="index.php"> QuickShop.com</a></p>

    </footer>

    <!-- End footer section  -->

    <script src="script.js"></script>
</body>

</html>