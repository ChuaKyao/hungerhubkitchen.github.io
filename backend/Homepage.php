<?php

    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    unset($_SESSION['msg']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HungerHub Kitchen</title>
    <link rel="icon" type="image/x-icon" href="logo.png">

    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">

    <!--  Google Fonts link for icons   -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">

    <script src="js/script.js" defer></script>
</head>

<body class="body-fixed">
    <?php include 'components/user_header.php'?>

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="">
                        <img class="banner-img-top" src="images/mashroom.png">
                     </div>
                     <div class="">
                        <img class="banner-img-chilli" src="images/chilli.png">
                     </div>
                     <div class="">
                        <img class="banner-img-coriander" src="images/coriander.png">
                     </div>
                    <div class="banner-shape-1 w-100" data-depth="0.30">
<!--bg img-->           <img src="images/leaf.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
<!--bg img-->           <img class="banner-img-left" src="images/vege_2.png" alt="">
                    </div>
                    
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Welcome to 
                                        <span>HungerHub</span>
                                        Kitchen
                                    </h1>
                                    <p class="home-p">Whether you're a health-conscious diner, an adventurous foodie, or simply looking for a delightful meal, 
                                        HungerHub Kitchen welcomes you. Our warm and inviting ambiance, friendly staff, and a menu that caters to every palate make your dining experience a memorable one.</p>
                                        <br>
                                    <div class="banner-btn mt-4">
                                        <a href="Menu.html" class="sec-btn">Check our Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
<!--Img-->                          <div class="banner-img" style="background-image: url();">
                                          <img class="home-main-img" src="images/home-spaggheti.png">
                                    </div>
                                             <div class="">
                                                <img class="banner-img-right" src="images/vege.png">
                                             </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="home-header">Malaysia</h5>
                                    <p class="home-p">Join our community of food lovers and embark on a delicious journey with us!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="home-p">Trusted by 30+ companies</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
<!--logo-->                         <img src="images/brand/b1.png" alt="">
                                </div>
                                <div class="brands-box">
<!--logo-->                         <img src="images/brand/b2.png" alt="">
                                </div>
                                <div class="brands-box">
<!--logo-->                         <img src="images/brand/b3.png" alt="">
                                </div>
                                <div class="brands-box">
<!--logo-->                         <img src="images/brand/b4.png" alt="">
                                </div>
                                <div class="brands-box">
<!--logo-->                         <img src="images/brand/b5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gallery-home" style="background-image: url(images/booktable-img.png);">
                <div class="row" id="gallery">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Gallery</p>
                                        <h2 class="h2-title">Food Explorer</h2><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
<!--img-->                              <a href="images/gallery/gal-1.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-1.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-2.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-2.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-3.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-3.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-4.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-4.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-5.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-5.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-6.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-6.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-7.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-7.jpg)"></a>
<!--img-->                              <a href="images/gallery/gal-8.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(images/gallery/gal-8.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table-home section">
                <div class="book-table-shape">
<!--shape-->        <img class="table-leave" src="images/table-leaves.png">
                </div>

                <div class="book-table-shape book-table-shape2">
<!--shape-->        <img class="table-leave" src="images/table-leaves.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Book Table</p>
                                    <h2 class="h2-title">Opening Table</h2>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+6012-345-6789">+6012-345-6789</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Thrusday</h3>
                                        <p>9:00 am - 22:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Friday to Sunday</h3>
                                        <p>11:00 am - 22:00 pm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-btn mt-4">
                                <a href="Bookatable.html" class="sec-btn booktable-btn">Book Table Here</a>
                            </div>
                        </div>

                        


                    </div>
                </div>

            </section>

            <section class="faq-sec  bg-light section-repeat-img " style="background-image: url(images/faq-img.jpg);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Frequently <span>asked questions</span></h2>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">What are the login hours?</h4>
                                <p>At HungerHub Kitchen, we value our customers and aim to provide flexible access. 
                                   You can log in to our system at any time that suits you.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What do i receive for my refund?</h4>
                                <p>We provide two options for our valued customers - you can choose to have your money refunded, 
                                   or we can replace your meals with something even better.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">How long it will take food to arrive?</h4>
                                <p>Customer satisfaction is our top priority. We strive to serve your food as promptly as possible, 
                                    typically within around 20 minutes.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Does your restaurant has both veg and non veg?</h4>
                                <p>Absolutely! Our restaurant caters to a diverse range of preferences, offering a delicious variety 
                                    of both vegetarian and non-vegetarian dishes.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What is cost of food delivery?</h4>
                                <p>We're pleased to offer free food delivery service. Customers can enjoy their meals without any additional 
                                    service charges.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Who is eligible for pro membership?</h4>
                                <p>Pro membership is available to customers aged 19 and above.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <?php include 'components/footer.php'?>
        </div>
    </div>

    <div class="fixed-btn">
        <button class="chatbot-toggler">
            <span class="material-symbols-outlined">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
        </button>

        <div class="chatbot">
            <header>
                <h3>Chatbot</h3>
                <span class="close-btn material-symbols-outlined">close</span>
            </header>
            <ul class="chatbox">
                <li class="chat incoming">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Hi customer 👋🏼 <br>I am here to assist you with any queries related to the food and products available at our menu. How may I assist you today?</p>
                </li>
            </ul>

            <div class="chat-input">
            <input type="text" id="prompt" placeholder="Enter a message..." required>
            <span id="promptButton" class="material-symbols-outlined" onclick="promptAi()">send</span>
            </div>
        </div>
    </div>

    <div class="loader">
        <img src="images/reload.gif" alt="">
    </div>



    <!-- jquery  -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="js/rellax.min.js"></script> -->
    <!-- <script src="js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="js/main.js"></script>

    <script src="js/script.js"></script>

</body>

</html>