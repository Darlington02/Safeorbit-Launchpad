<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/style.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        
        <!--Favicons-->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title>Metapay</title>
        
        <style>
            html{
                background: #09050f;
            }
            body{
                background: url('https://images.idgesg.net/images/article/2018/01/augmented_reality_ar_virtual_reality_vr_mobile_apps_thinkstock_648467092_3x2-100746895-large.jpg?auto=webp&quality=85,70');
                background-repeat: no-repeat;
                
            }
            .astro {
                align-self: flex-end;
                animation-duration: 2s;
                animation-iteration-count: infinite;
                margin: 0 auto 0 auto;
                transform-origin: bottom;
            }
            .bounce-1 {
                animation-name: bounce-1;
                animation-timing-function: linear;
            }
        </style>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index" class="nav__logo"><img src="images/metapay.png" width="70"></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="launchpad" class="nav__link">Launchpad</a></li>
                        <li class="nav__item"><a href="index#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="index#roadmap" class="nav__link">Road map</a></li>
                        <li class="nav__item"><a href="index#faq" class="nav__link">FAQs</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home" style="color: white;">
                <div class="home__data">
                    <h1 class="home__title">Metapay,<br>Revolutionizing <span class="home__title-color">The Metaverse..</span></h1>

                    <a href="#contact" class="button">Pancakeswap</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-discord'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-telegram' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img astro bounce-1">    
                    <img src="assets/img/space2.png" alt="">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section " id="about" style="color: white;">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="images/crypto-transfer.png" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle" style="margin-top: 10px;">What Is MetaPay?</h2>
                        <p class="about__text">Metapay is a hyper deflationary Bep20 token built on the Binance smart chain. The main idea behind this token is to provide a decentralized transaction network, which runs on the Binance mainnet, and would be used primarily for virtual payments in the Metaverse.</p>  
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">What Is The Metaverse?</h2>
                        <p class="about__text">It's a combination of multiple elements of technology, including virtual reality, augmented reality and video where users "live" within a digital universe. Supporters of the metaverse envision its users working, playing and staying connected with friends through everything from concerts and conferences to virtual trips around the world.</p>  
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">Why Metapay?</h2>
                        <p class="about__text">With the metaverse being the future of the internet, we would need a virtual currency solely focused on solving the payment issues that will arise from existing in a virtual world. With Metapay, we are focused on taking advantage of existing web3.0 technologies to create a viable solution to these issues. We are the future of money</p>
                    </div>                                   
                </div>
            </section>
            
            <!--Meta Launchpad-->
            <section class="about section " id="about" style="color: white;">
                <h2 class="section-title">Meta Launchpad</h2>

                <div class="about__container bd-grid">
                    <div>
                        <h2 class="about__subtitle" style="margin-top: 10px;">What Is Meta Launchpad?</h2>
                        <p class="about__text">Meta Launchpad is a an IDO platform where crypto projects are listed and it works as an investor's pool. Investors can invest in the projects listed on our launchpad</p>  
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">Safe Investing for Everyone</h2>
                        <p class="about__text">Although honeypots and scam projects cannot be curbed completely, we do our best to ensure that every project listed on our launchpad are thoroughly vetted. You still need to engage in your own research before investing in any project!</p>  
                    </div> 
                    
                    <div class="about__img">
                    <img src="images/launchpad.png" alt="">
                </div>
                </div>
            </section>

            <!--TOKENOMICS-->
            <section class="about section " id="about" style="color: white;">
                <h2 class="section-title">Tokenomics</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="images/pie-chart.png" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle" style="margin-top: 10px;">Total Supply</h2>
                        <p class="about__text">Metapay has a fixed supply of 1,000,000,000 tokens</p>  
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">Liquidity - 40%</h2>
                        <p class="about__text">40% of the total supply will be dedicated towards providing liquidity</p>  
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">Marketing - 28%</h2>
                        <p class="about__text">28% of the total supply will be dedicated towards consistent and strategic marketing</p>
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">Dev - 10%</h2>
                        <p class="about__text">The dev and pioneering team will be rewarded 10% of the total supply</p>
                        
                        <h2 class="about__subtitle" style="margin-top: 15px;">Reflection - 2%</h2>
                        <p class="about__text">2% of the total supply goes towards reflections</p>
                    </div>                                   
                </div>
            </section>
            
            <!--ROAD MAP-->
            <h2 style="text-align: center; color:white; padding-top: 20px;" id="roadmap">Our Road Map</h2>
            <div class="map-container">
              <div class="timeline">
                <ul>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Nov, 2021</h3>
                      <h2>Token creation and deployment</h2>
                      <p>The first iteration of the Metapay token, will be created and deployed on the Binance mainnet.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Dec, 2021</h3>
                      <h2>Pancakeswap listing and presale</h2>
                      <p>Metapay will be listed on pancakeswap, and a presale will be held on dxsale, to raise funds for liquidity.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Dec, 2021</h3>
                      <h2>Marketing Campaign</h2>
                      <p>Serious marketing campaign also begins, to draw awareness to the Metapay token.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Jan, 2022</h3>
                      <h2>Further Ecosystem Development</h2>
                      <p>Further ecosystem development begins. Ethereum, Solana and Polygon version of the Metapay token will be created.</p>
                    </div>
                  </li>
                  <li>
                    <div class="timeline-content">
                      <h3 class="date">Mar, 2022</h3>
                      <h2>Release Of Meta Gateway</h2>
                      <p>First use case of metapay, the meta gateway will be released. Through this, users can easily connect their wallets and make purchases virtually.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            
        </main>
        
        <!--===== FOOTER =====-->
        <footer class="footer" style="background: black">
            <p class="footer__title">Metapay</p>
            <div class="footer__social">
                <a href="#" class="footer__icon">Telegram <i class='bx bxl-telegram' ></i></a>
                <a href="#" class="footer__icon">Bscscan <i class='bx bxl-github' ></i></a>
                <a href="#" class="footer__icon">Twitter <i class='bx bxl-twitter' ></i></a>
                <a href="#" class="footer__icon">PancakeSwap <i class='bx bxl-github' ></i></a>
            </div>
            <p>&#169; 2021 copyright all right reserved</p>
        </footer>
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="css/main.js"></script>
    </body>
</html>