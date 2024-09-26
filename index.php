
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cards.css">
    <title>swiftshop</title>
</head>
<body>
    
    <!-- header section starts -->
    <header>
        <a href="" class="logo"><i class="fas-fa-untensils">swiftshop</i></a>

        <nav class="navbar">
            <a class="active" href="index.html">Home</a>
            <a class="navbar-dropdown" href="">Products</a>
            <ul class="dropdown">
                <li><a href="smartphone.html">Smartphone</a></li>
                <li><a href="smartwatch.html">Smartwatch</a></li>
                <li><a href="redmipad.html">Redmipad</a></li>
                <li><a href="redmibook.html">Redmibook</a></li>
            </ul>
            <a href="service.html">Services</a>
            <a href="contact.html">Contacts</a>
            <a href="about.html">About</a>
        </nav>
        <div class="icons">
            <!-- <i class="fas fa-bars" id="menu-bars"></i> -->
            <!-- <a href="#" class="fas fa-heart"></a> -->
            <!-- <a href="checkout.html" class="fas fa-shopping-cart"></a> -->
        </div>
        <a href="login.php" id="btn-login">Login</a>
        <a href="register.php" id="btn-register">Register</a>
        
    </header>
    <!-- header section ends -->

    <!-- Section Home -->
    <section class="home" id="home">
        <div class="home-slider">
            <div class="wrapper">
                <div class="slide">
                    <div class="content">
                        <span>our special offers</span>
                        <h3>Smartphone</h3>
                        <p>Dapatkan Segera Koleksi Gadget Terbaru dan Favorit Anda dengan 
                            Harga Mulai Dari Rp 1 Jutaan, Promo Spesial Diskon Akhir Tahun Buruan Cek Jangan Sampai Ketinggalan.</p>
                        <a href="login.php" class="btn" id="btn-order">order now</a>
                    </div>
                    <div class="image">
                        <img src="./assets/promosi-gif.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->

    <!-- PROMOTION -->
    <section class="about" id="promotion">
        <h3 class="sub-heading">our gadget</h3>
        <h1 class="heading">popular gadget</h1>

            <div class="content">
                <h3>mega sale smartphone</h3>
                <p id="deskripsi">Teknologi terkini dan inovasi terbaik hanya ada di gadget kami! Temukan dunia yang tak terbatas dalam genggaman Anda dengan berbagai pilihan gadget terbaru, mulai dari smartphone canggih hingga perangkat pintar yang akan memudahkan hidup Anda. Jelajahi masa depan dengan gadget kami dan nikmati pengalaman teknologi yang luar biasa!</p>
               
                <a href="login.php" class="btn" id="btn-about">learn more</a>
            </div>

            <div class="row">
                <div class="image-promotion">
                    <img src="./assets/content-promosi.gif" alt="">
                </div>

        </div>
        </section>
    <!-- ENDS PROMOTION -->

    <!-- CONTENT PROMOTION -->
    <section class="about" id="about">
        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">
            <div class="image">
                <img src="./assets/smarphone.png" alt="">
            </div>

            <div class="content">
                <h3>best smartphone in the country</h3>
                <p>Xiaomi 12T 5G hadir dengan kinerja gahar serta kamera yang tak kalah tajam, Xiaomi 12T 5G dibekali dengan prosesor 5nm buatan MediaTek, Dimensity 8100-Ultra dan dilengkapi CPU 8-core 4 Cortex A78 (Gold Core) dan 4 Cortex A55 (Silver
                    Core).</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payment</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 services</span>
                    </div>
                </div>
                <a href="login.php" class="btn" id="btn-about">learn more</a>
            </div>
        </div>
        </section>
        <br>

    <!-- review section starts -->
    <section class="review" id="review">

        <h3 class="sub-heading"> customer's review</h3>
        <h1 class="heading"> what the say</h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <!-- Photo review -->
                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="./assets/photo1.jpg" alt="">
                        <div class="user-info">
                            <h3>Caroline</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Smartphone ini benar-benar mengesankan dengan desain yang elegan dan tampilan layar yang jernih. Performanya sangat cepat, dan kamera berkualitas tinggi membuat pengalaman fotografi menjadi luar biasa.</p>
                </div>

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="./assets/photo2.jpg" alt="">
                        <div class="user-info">
                            <h3>Brian</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Smartphone ini benar-benar mengesankan dengan desain yang elegan dan tampilan layar yang jernih. Performanya sangat cepat, dan kamera berkualitas tinggi membuat pengalaman fotografi menjadi luar biasa.</p>
                </div>

                <div class="swiper-slide slide">
                    <div class="fas fa-quote-right"></div>
                    <div class="user">
                        <img src="./assets/photo3.jpg" alt="">
                        <div class="user-info">
                            <h3>James</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Smartphone ini benar-benar mengesankan dengan desain yang elegan dan tampilan layar yang jernih. Performanya sangat cepat, dan kamera berkualitas tinggi membuat pengalaman fotografi menjadi luar biasa.</p>
                </div>
                <!-- ends Photo review -->

            </div>
        </div>

    </section>
    <!-- review section ends -->
    <br>
   
    <!-- section footer start -->
    <section class="footer">

        <div class="footer-container">

            <div class="box">
                <h3>get help</h3>
                <a href="">FAQ</a>
                <a href="">Shipping</a>
                <a href="">Returns</a>
                <a href="">Payment Status</a>
                <a href="">Privacy Policy</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="home.html">home</a>
                <a href="">products</a>
                <a href="">services</a>
                <a href="">review</a>
                <a href="about.html">about</a>
            </div>

            <div class="box" id="contact">
                <h3>contact info</h3>
                <a href="">+62-8973-3897-234</a>
                <a href="">+62-5932-4953-930</a>
                <a href="" class="lower">swiftshop@gmail.com</a>
                <a href="" class="lower">customercare@gmail.com</a>
                <a href="">Surabaya, Indonesia - 60230</a>
            </div>

            <div class="social-media" id="follow">
                <h3>follow us</h3>
                <a href="https://web.facebook.com/" target="_blank"><img src="./assets/facebook-logo.png" alt=""></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="./assets/instagram-alt-logo.png" alt=""></a>
                <a href="https://twitter.com/" target="_blank"><img src="./assets/twitter-logo.png" alt=""></a>
                <a href="https://www.youtube.com/" target="_blank"><img src="./assets/youtube-logo.png" alt=""></a>
                <a href="https://www.linkedin.com/" target="_blank"><img src="./assets/linkedin-logo.png" alt=""></a>
            </div>
        </div>
        <div class="copyright">All Right Reserved &copy; copyright 2023 by <span>swiftshop</span></div>
    </section>
    <!-- section footer end -->

    <script src="script.js"></script>
    </body>
</html>