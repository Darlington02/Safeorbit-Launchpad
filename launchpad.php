<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== FAVICON ===============-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============--> 
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Launchpad</title>

    <style>
        body{
            background: url("assets/img/background.jpg");
            background-size: cover;
            color: white !important;
        }
    </style>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index" class="nav__logo">
                <img src="assets/img/logo.png" alt="" class="nav__logo-img"> 
                Safeorbit
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="index#celebrate" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="index#gift" class="nav__link">Features</a>
                    </li>
                    <li class="nav__item">
                        <a href="launchpad" class="nav__link">Launchpad</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>

                <img src="assets/img/nav-light.png" alt="" class="nav__img">
            </div>
            <div class="nav__btns">
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt' ></i>
                </div>
            </div>

        </nav>
    </header>

    <!-- LAUNCHPAD IDOS -->
    <h2 class="section__title" style="margin-top: 150px; color: white">
        Launchpad 
    </h2>
    <hr>
    <main class="container-fluid row">
        <div class="launchpad-card neumorphic-shadows">
            <img src="assets/img/logo.png" alt="" srcset="">
            <hr>
            <h2 style="padding: 10px; color: white">Safeorbit</h2><br>
            <p><b>Hard Cap:</b> 50BNB</p><br>
            <p><b>Soft Cap:</b> 80BNB</p><br>
            <p><b>Rate:</b> 1BNB = 8,000,000</p><br>
            <p><b>Status:</b> Pending</p><br>
            <p><b>Network:</b> Binance Smart Chain</p><br>
            <a href="presale"><button class="launchpad-btn">View</button></a>
        </div>
    </main>
    
    <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        <img src="assets/img/logo.png" alt="" class="footer__logo-img"> 
                    </a>

                    <p class="footer__description">
                        Community powered <br> BSC Launchpad
                    </p>
                </div>

                <div>
                    <h3 class="footer__title" style="color: white">Our Products</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="launchpad" class="footer__link" style="color: white">Launchpad</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link" style="color: white">IDO Pool</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link" style="color: white">Contract Tester</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title" style="color: white">Socials</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="t.me/safe_orbit" class="footer__link" style="color: white">Telegram</a>
                        </li>
                        <li>
                            <a href="twitter.com/safeorbit_" class="footer__link" style="color: white">Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link" style="color: white">Whitepaper</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title" style="color: white">Coming soon to</h3>

                    <div class="footer__aviables">
                        <img src="assets/img/polygon.png" alt="" class="footer__aviable-img">
                        <img src="assets/img/solana.png" alt="" class="footer__aviable-img">
                    </div>
                </div>
            </div>

            <span class="footer__copy" style="color: white">&#169; Safeorbit</span>
        </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    </body>
</html>