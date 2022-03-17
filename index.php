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

        <title>Home - Safeorbit</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img"> 
                    Safeorbit
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#celebrate" class="nav__link">About Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="#gift" class="nav__link">Features</a>
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

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/rocket-gif.gif" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">First Community Powered <br> BSC Launchpad</h1>
                        <p class="home__description">
                            With Safeorbit, gain access to the top IDO's vetted by the community without prejudice. 
                        </p>
                        <a href="#" class="button">Buy Safeorbit</a>
                    </div>
                </div>
            </section>

            <!--==================== Features ====================-->
            <section class="giving section container">
                <h2 class="section__title">
                    Features
                </h2>

                <div class="giving__container grid">
                    <div class="giving__content">
                        <img src="assets/img/logo.png" alt="" class="giving__img">
                        <h3 class="giving__title">Safest BSC Launchpad</h3>
                        <p class="giving__description">Safeorbit was built for investors. Having the community vet projects constructively, is the best way to truly spot good projects.</p>
                    </div>

                    <div class="giving__content">
                        <img src="assets/img/coin.webp" alt="" class="giving__img">
                        <h3 class="giving__title">Decentralize the way your idea raises capital</h3>
                        <p class="giving__description">For just 1BNB, organize IDOs and presales to raise funds for your idea.</p>
                    </div>

                    <div class="giving__content">
                        <img src="assets/img/secure-trade.png" alt="" class="giving__img">
                        <h3 class="giving__title">Contract Testing</h3>
                        <p class="giving__description">Assist your research, with our smart contract tester, to test for honeypots, scam projects etc.</p>
                    </div>
                </div>
            </section>

            <!--==================== About Us ====================-->
            <section class="celebrate section container" id="celebrate">
                <div class="celebrate__container grid">
                    <div class="celebrate__data">
                        <h2 class="section__title celebrate__title">
                            About Us
                        </h2>
                        <p class="celebrate__description">
                            Safeorbit Launchpad is the first community powered BSC Launchpad, set to make investing as safe as possible for investors by having the community upvote and constructively criticize upcoming IDOs. <br><br>
                            Although honeypots and scam projects cannot be curbed completely, we ensure that every project listed on our launchpad are thoroughly vetted. <br>
                            Every holder of SafeOrbit token, can upvote and comment on upcoming IDOs.
                        </p>
                        <a href="#" class="button">Get Started</a>
                    </div>

                    
                </div>
            </section>

            <!--==================== Products ====================-->
            <section class="gift section container" id="gift">
                <h2 class="section__title">Products</h2>

                <div class="gift__container grid">
                    <article class="gift__card">
                        <img src="assets/img/rocket-launch.png" alt="" class="gift__img">
                        <h3 class="gift__price">Launchpad</h3>
                    </article>

                    <article class="gift__card">
                        <img src="assets/img/peer-exchange.png" alt="" class="gift__img">
                        <h3 class="gift__price">IDO pool</h3>
                    </article>

                    <article class="gift__card">
                        <img src="assets/img/secure-trade.png" alt="" class="gift__img">
                        <h3 class="gift__price">Contract Tester</h3>
                    </article>
                </div>
            </section>
            
            <!--==================== ROAD MAP ====================-->
            <h2 style="text-align: center; color:black; padding-top: 20px;" id="roadmap">Road Map</h2>
            <div class="map-container">
              <div class="timeline">
                <ul>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Dec, 2021</h3>
                      <h2>Token creation and deployment</h2>
                      <p>The first iteration of Safeorbit token, will be created and deployed on the Binance mainnet.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Dec, 2021</h3>
                      <h2>Airdrop</h2>
                      <p>10% of total supply will be airdropped to the community to gather followers and create attention.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Jan, 2022</h3>
                      <h2>Marketing Campaign</h2>
                      <p>Serious marketing campaign begins, to create awareness for safeorbit launchpad.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Jan, 2022</h3>
                      <h2>Presale round</h2>
                      <p>A presale round will be held to raise funds for project development</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Feb, 2022</h3>
                      <h2>Pancakeswap Launch</h2>
                      <p>Safeorbit native token will be launched on pancakeswap to enable users buy and sell.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Feb, 2022</h3>
                      <h2>Release of BSC launchpad</h2>
                      <p>The first version of Safeorbit Launchpad will be released to the public.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            

            <!--==================== IDOS ====================-->
            <section class="new section container" id="new">
                <h2 class="section__title">Previously completed IDOs</h2>

                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">
                                <div class="new__overlay"></div>

                                <img src="assets/img/logo.png" alt="" class="new__img">
                                <h3 class="new__price">Safeorbit</h3>
                                <span class="new__title">First Community IDO Launchpad</span>
                                
                                <button class="button new__button">
                                    <i class='bx bx-rocket new__icon'></i>
                                </button>
                            </article>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

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
                    <h3 class="footer__title">Our Products</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="launchpad" class="footer__link">Launchpad</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">IDO Pool</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Contract Tester</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Socials</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="t.me/safe_orbit" class="footer__link">Telegram</a>
                        </li>
                        <li>
                            <a href="twitter.com/safeorbit_" class="footer__link">Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Whitepaper</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Coming soon to</h3>

                    <div class="footer__aviables">
                        <img src="assets/img/polygon.png" alt="" class="footer__aviable-img">
                        <img src="assets/img/solana.png" alt="" class="footer__aviable-img">
                    </div>
                </div>
            </div>

            <span class="footer__copy">&#169; Safeorbit</span>
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