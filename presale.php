
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Token sale page">
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

    <title>Token sale</title>
   
    <script>
        var test = false; // False if contracts are on Mainnet
        var contractAddressSale = '0xC4CFD1252d462495E52a8Fc7434C5C99dBf7DeB0';
        var contractAddressToken = '0x6371d6bcA836f4628cBA14317E603ea2ebA73277';
    </script>
    
    <style>
        
        body {font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; color: #FFFFFF; background-color: #09033b; background-size: cover; font-size: 16px; font-weight: 400;}

        h1 { font-size: 24px; font-weight: 700;}
        h2 { font-size: 22px; font-weight: 500;}

        .small {
            font-size: 12px;
        }

        .err {
             color: red;
        }
        
        .green {
             color: green;
        }
        
        .blue {
             color: blue;
        }

        * {
          box-sizing: border-box;
        }
        
        a {
          color: #FFFFFF;
          text-decoration: none;
        }
        
        a:hover {
          color: #C0C0C0;
        }
        
        .clickable {
            cursor: pointer;
        }
        
        .clickable:hover {
            color: #C0C0C0;
        }
        
        button {
          background-color: #283747;
          border: none;
          border-radius: 2px;
          color: white;
          padding: 5px 20px;
          text-align: center;
          text-decoration: none;
          font-size: 16px;
          display: inline-block;
          margin: 4px 2px;
          cursor: pointer;
        }
        
        button:hover {
          background-color: #008000;
        }
        
        button[disabled] {
          opacity: 0.6;
          cursor: not-allowed;
        }
        
        hr {
            margin: 20px;
            border: 0;
            border-top: 1px dashed;
        }
        
        input {
          text-align: center;
          font-size: 18px;
          background-color: #000000;
          color: #FFFFFF;
          border:1px solid;
          max-width: 100%;
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
                    <li class="nav__item">
                        <a href="#" class="button" id="connect">Connect wallet</a>
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
    
    <div style="text-align: center; margin-top: 130px;">
        <button id="connect" style="font-size: 12px" class="button">Connect</button> <button class="switch" id="addMainBSC" style="font-size: 12px;">To BSC Mainnet</button><br>
        <span id="nometamask" class="err" style="display: none">Please install Metamask first...</span>
        <div class="network small"><span id="curnet"><span class="err">Please use DApp browser/extension (e.g. <a target="_blank" href="https://metamask.io">Metamask</a>)</span></span> <span id="myAddr"></span></div>
    </div>
    
    <div style="text-align: center">
        <div class="launchpad-card neumorphic-shadows">
            <img src="assets/img/logo.png" alt="" srcset="">
            <hr>
            <h2 style="padding: 10px; color: white">Safeorbit</h2><br>
            <p><b>Token symbol:</b> SFB</p><br>
            <p><b>Hard Cap:</b> 50BNB</p><br>
            <p><b>Soft Cap:</b> 40BNB</p><br>
            <p><b>Rate:</b> 1BNB = 8,000,000</p><br>
            <p><b>Status:</b> Active</p><br>
            <p><b>Total Supply:</b> 1,000,000,000</p><br>
            <p><b>Presale Tokens:</b> 400,000,000</p><br>
            <p><b>Network:</b> Binance Smart Chain</p><br>
    <hr>
    
    <div style="text-align: center">
        <h1 style="color: white">Contribute</h1><br>
        
    <p>To contribute to the presale, send the amount of BNB you want to contribute to the address below, and your tokens will be automatically sent to your wallet.<br><br>
        PS: If you can't find your safeorbit tokens, add the token to your wallet using the token information given above.</p><br>
    <h5><b><a href="https://bscscan.com/address/0xC4CFD1252d462495E52a8Fc7434C5C99dBf7DeB0" target="_blank" id="saleAddress">0xC4CFD1252d462495E52a8Fc7434C5C99dBf7DeB0</a></b><br>  <button id="copySale" style="text-align: center" class="button">Copy address</button></p><h5><br>
        <div style="text-align: center" id="saleqr"></div>
    </div>
    <hr>
    </div>
    </div>
    

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
    
<script src='https://dappbuilder.org/js/jquery-3.6.0.min.js' type="text/javascript" charset="utf-8"></script>
<script src='https://dappbuilder.org/js/ethers-5.0.umd.min.js' type="text/javascript" charset="utf-8"></script>
<script src='https://dappbuilder.org/bsc/tokensale2/js/tokensale.ui.js' type="text/javascript" charset="utf-8"></script>
</body>
</html>
