
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
        var test = true; // False if contracts are on Mainnet
        var contractAddressSale = '0x80B0Ce4a08501CAA302a42316e533Fe493b7D831';
        var contractAddressToken = '0x6C4aAd19606DcF07eAef07105Ac7C7cd33448679';
    </script>
    
    <style>
        
        body {font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; color: #FFFFFF; background: url("assets/img/backgrounds.jpg"); background-size: cover; font-size: 16px; font-weight: 400;}

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
    
    <h2 class="section__title" style="margin-top: 200px; color: white">
        Launchpad 
    </h2>
    <hr>
    
    <div style="text-align: center">
        <button id="connect" class="button">Connect</button> <button id="addTestBSC" class="button">To BSC Testnet</button>
        <span id="nometamask" class="err" style="display: none">Please install Metamask first...</span>
        <div class="network small"><span id="curnet"><span class="err">Please use DApp browser/extension (e.g. <a target="_blank" href="https://metamask.io">Metamask</a>)</span></span> <span id="myAddr"></span></div><br>
    </div>
    
    <div style="text-align: center">
        <h1 style="color: white">Token information</h1><br>
        <p>Name: <span id="tokenName">SAFEORBIT</span> (<span class="tokenSymbol">SFB</span>)</p><br>
        <p>Address: <a target="_blank" href="https://testnet.bscscan.com/token/0x6C4aAd19606DcF07eAef07105Ac7C7cd33448679" id="tokenAddress">0x6C4aAd19606DcF07eAef07105Ac7C7cd33448679</a></p><br>
         <p>Decimals: <span id="tokenName">9</span></p><br>
        <p>Do not send BNB to the token contract!</p>
        <p><button id="addToken" style="text-align: center" class="button">Add to Metamask</button> <button id="copyToken" style="text-align: center" class="button">Copy address</button></p>
    </div>
    
    <hr>
    
    <div style="text-align: center">
        <h1 style="color: white">Token sale status</h1>
        <h1>
            <span id="finished" style="display:none" class="status green">Finished</span>
            <span id="addtokens" style="display:none" class="status err"><br>Ask token sale admin to approve token sale contract or check tokens balance on the wallet!</span>
            <span id="active" style="display:none" class="status green">Active</span>
        </h1>
        <p><progress id="progress" value="0" max="100" style="width: 70%"></progress></p>
        <p>Raised: <span id="raised"></span> of <span class="hardcap">80.0</span> BNB</p><br>
        <p>Tokens sold: <span id="sold"></span> of <span class="saleqty">400000000.0</span> <span class="tokenSymbol">SFB</span></p><br>
        <p>Remaining: <span id="toraise"></span> BNB (~ <span id="unsold"></span> <span class="tokenSymbol">SFB</span>)</p>
    </div>
    <hr>
    
    <div style="text-align: center">
        <h1 style="color: white">Buy tokens</h1><br> 
        <p>1 BNB = <span class="rate">5000000.0</span> <span class="tokenSymbol">SFB</span></p>
        <p><input type="number" id="buyAmount" value="0" min="0"> BNB</p>
        <p>You get: <span id="get">0</span> <span class="tokenSymbol">SFB</span></p><br>
        <p><button id="buyBtn" style="text-align: center" class="button">Buy</button></p>
        <p>In my wallet: <span id="myTokens"></span> <span class="tokenSymbol">SFB</span></p>
    </div>
    <hr>
    
    <div style="text-align: center">
        <h1 style="color: white">Token sale information</h1><br>
        <p>Hardcap: <span class="hardcap">80.0</span> BNB (~ <span class="saleqty">400000000.0</span> <span class="tokenSymbol">SFB</span>)</p><br>
        <p>Rate: 1 BNB = <span class="rate">5000000.0</span> <span class="tokenSymbol">SFB</span> (~ <span class="price">2e-7</span> BNB/<span class="tokenSymbol">SFB</span>)</p>

    </div>
    <hr>
    
    <div style="text-align: center">
        <h1 style="color: white">Sale contract</h1><br>
        <p>You can also buy tokens by sending BNB directly from your wallet to this contract<br><br>
        (please increase gas limit to 200,000 or even more for tokens with special functions like autoLP, swaps, etc.)</p><br>
        <p><a href="https://testnet.bscscan.com/address/0x80B0Ce4a08501CAA302a42316e533Fe493b7D831" target="_blank" id="saleAddress">0x80B0Ce4a08501CAA302a42316e533Fe493b7D831</a><br>  <button id="copySale" style="text-align: center">Copy address</button></p>
            <div style="text-align: center" id="saleqr"></div>
    </div>
    <hr>
    
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
