<!doctype html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Vortexincome </title>
<!-- /Required meta tags -->

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
<!-- /Favicon -->

<!-- All CSS -->

<!-- Vendor Css -->
<link rel="stylesheet" href="css/vendors.css">
<!-- /Vendor Css -->

<!-- Plugin Css -->
<link rel="stylesheet" href="css/plugins.css">
<!-- Plugin Css -->

<!-- Icons Css -->
<link rel="stylesheet" href="css/icons.css">
<!-- /Icons Css -->

<!-- Style Css -->
<link rel="stylesheet" href="css/style.css">
<!-- /Style Css -->
<link rel="stylesheet" href="plugin/toastr.min.css" type="text/css" />

<link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.html">
<link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.html">

<style>
.carousel-item {
    height: 600px;
}

/* CSS Multiple Whatsapp Chat */
.whatsapp-name {
  font-size: 16px;
  font-weight: 600;
  padding-bottom: 0;
  margin-bottom: 0;
  line-height: 0.5;
}

#whatsapp-chat {
  box-sizing: border-box !important;

  outline: none !important;
  position: fixed;
  width: 350px;
  border-radius: 10px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
  bottom: 90px;
  right: 30px;
  overflow: hidden;
  z-index: 99;
  animation-name: showchat;
  animation-duration: 1s;
  transform: scale(1);
}
a.blantershow-chat {
  /*   background: #009688; */
  background: #fff;
  color: #404040;
  position: fixed;
  display: flex;
  font-weight: 400;
  justify-content: space-between;
  z-index: 98;
  bottom: 25px;
  right: 30px;
  font-size: 15px;
  padding: 10px 20px;
  border-radius: 30px;
  box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}
a.blantershow-chat svg {
  transform: scale(1.2);
  margin: 0 10px 0 0;
}
.header-chat {
  /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
  background: #009688;
  background: #095e54;
  color: #fff;
  padding: 20px;
}
.header-chat h3 {
  margin: 0 0 10px;
}
.header-chat p {
  font-size: 14px;
  line-height: 1.7;
  margin: 0;
}
.info-avatar {
  position: relative;
}
.info-avatar img {
  border-radius: 100%;
  width: 50px;
  float: left;
  margin: 0 10px 0 0;
}

a.informasi {
  padding: 20px;
  display: block;
  overflow: hidden;
  animation-name: showhide;
  animation-duration: 0.5s;
}
a.informasi:hover {
  background: #f1f1f1;
}
.info-chat span {
  display: block;
}
#get-label,
span.chat-label {
  font-size: 12px;
  color: #888;
}
#get-nama,
span.chat-nama {
  margin: 5px 0 0;
  font-size: 15px;
  font-weight: 700;
  color: #222;
}
#get-label,
#get-nama {
  color: #fff;
}
span.my-number {
  display: none;
}
/* .blanter-msg {
  color: #444;
  padding: 20px;
  font-size: 12.5px;
  text-align: center;
  border-top: 1px solid #ddd;
} */
textarea#chat-input {
    border: none;
    font-family: "Arial", sans-serif;
    width: 100%;
    height: 20px;
    outline: none;
    resize: none;
    padding: 10px;
    font-size: 14px;
}

a#send-it {
  width: 30px;
  font-weight: 700;
  padding: 10px 10px 0;
  background:#eee;
  border-radius: 10px;

  svg {
    fill:#a6a6a6;
    height: 24px;
    width: 24px;
  }
}

.first-msg {
  background: transparent;
  padding: 30px;
  text-align: center;
  & span {
    background: #e2e2e2;
    color: #333;
    font-size: 14.2px;
    line-height: 1.7;
    border-radius: 10px;
    padding: 15px 20px;
    display: inline-block;
  }
}

.start-chat .blanter-msg {
  display: flex;
}
#get-number {
  display: none;
}
a.close-chat {
  position: absolute;
  top: 5px;
  right: 15px;
  color: #fff;
  font-size: 30px;

}

@keyframes ZpjSY{
  0% {
    background-color: rgb(182, 181, 186);
  }
  15% {
    background-color: rgb(17, 17, 17);
  }
  25% {
    background-color: rgb(182, 181, 186);
  }
}

@keyframes hPhMsj {
  15% {
    background-color: rgb(182, 181, 186);
  }
  25% {
    background-color: rgb(17, 17, 17);
  }
  35% {
    background-color: rgb(182, 181, 186);
  }
}

@keyframes iUMejp {
  25% {
    background-color: rgb(182, 181, 186);
  }
  35% {
    background-color: rgb(17, 17, 17);
  }
  45% {
    background-color: rgb(182, 181, 186);
  }
}


@keyframes showhide {
  from {
    transform: scale(0.5);
    opacity: 0;
  }
}
@keyframes showchat {
  from {
    transform: scale(0);
    opacity: 0;
  }
}
@media screen and (max-width: 480px) {
  #whatsapp-chat {
    width: auto;
    left: 5%;
    right: 5%;
    font-size: 80%;
  }
}
.hide {
  display: none;
  animation-name: showhide;
  animation-duration: 0.5s;
  transform: scale(1);
  opacity: 1;
}
.show {
  display: block;
  animation-name: showhide;
  animation-duration: 0.5s;
  transform: scale(1);
  opacity: 1;
}

.whatsapp-message-container {
  display: flex;
  z-index: 1;
}

.whatsapp-message {
  padding: 7px 14px 6px;
  background-color: rgb(255, 255, 255);
  border-radius: 0px 8px 8px;
  position: relative;
  transition: all 0.3s ease 0s;
  opacity: 0;
  transform-origin: center top 0px;
  z-index: 2;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
  margin-top: 4px;
  margin-left: -54px;
  max-width: calc(100% - 66px);
}

.whatsapp-chat-body {
  padding: 20px 20px 20px 10px;
  background-color: rgb(230, 221, 212);
  position: relative;
  &::before {
    display: block;
    position: absolute;
    content: "";
    left: 0px;
    top: 0px;
    height: 100%;
    width: 100%;
    z-index: 0;
    opacity: 0.08;
    background-image: url("../elfsight.com/assets/chats/patterns/whatsapp.png");
    // background-image: url(https://res.cloudinary.com/eventbree/image/upload/v1575782560/Widgets/whatsappbg_opt.jpg);
  }
}

.dAbFpq {
  display: flex;
  z-index: 1;
}

.eJJEeC {
  background-color: rgb(255, 255, 255);
  width: 52.5px;
  height: 32px;
  border-radius: 16px;
  display: flex;
  -moz-box-pack: center;
  justify-content: center;
  -moz-box-align: center;
  align-items: center;
  margin-left: 10px;
  opacity: 0;
  transition: all 0.1s ease 0s;
  z-index: 1;
  box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
}

.hFENyl {
    position: relative;
    display: flex;
}

.ixsrax {
    height: 5px;
    width: 5px;
    margin: 0px 2px;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    animation-duration: 1.2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    top: 0px;
    background-color: rgb(158, 157, 162);
    animation-name: ZpjSY;
}

.dRvxoz {

    height: 5px;
    width: 5px;
    margin: 0px 2px;
    background-color: rgb(182, 181, 186);
    border-radius: 50%;
    display: inline-block;
    position: relative;
    animation-duration: 1.2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    top: 0px;
    animation-name: hPhMsj;
}

.kAZgZq {
    padding: 7px 14px 6px;
    background-color: rgb(255, 255, 255);
    border-radius: 0px 8px 8px;
    position: relative;
    transition: all 0.3s ease 0s;
    opacity: 0;
    transform-origin: center top 0px;
    z-index: 2;
    box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
    margin-top: 4px;
    margin-left: -54px;
    max-width: calc(100% - 66px);
    &::before {
    position: absolute;
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: contain;
    content: "";
    top: 0px;
    left: -12px;
    width: 12px;
    height: 19px;
}
}

.bMIBDo {
    font-size: 13px;
    font-weight: 700;
    line-height: 18px;
    color: rgba(0, 0, 0, 0.4);
}

.iSpIQi {
    font-size: 14px;
    line-height: 19px;
    margin-top: 4px;
    color: rgb(17, 17, 17);
}

.iSpIQi {
    font-size: 14px;
    line-height: 19px;
    margin-top: 4px;
    color: rgb(17, 17, 17);
}

.cqCDVm {
    text-align: right;
    margin-top: 4px;
    font-size: 12px;
    line-height: 16px;
    color:
    rgba(17, 17, 17, 0.5);
    margin-right: -8px;
    margin-bottom: -4px;
}


</style>

<!-- /All CSS -->

</head>

<body>

    <!-- PreLoader -->
  
    <!--Preloader-->

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two">
        <div class="acavo-responsive-nav">
            <div class="container">
                <div class="acavo-responsive-menu">
                    <div class="logo">
                        <a href="index.html">

                            <img src="logo.png" alt="logo">

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="acavo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="logo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu ">
                        <ul class="navbar-nav ms-auto me-auto">

                            <li class="nav-item">
                                <a href="index.html" class="nav-link active">Home </i></a>
                            </li>

                            <li class="nav-item">
                                <a href="about-us.html" class="nav-link">About Us </a>
                            </li>


                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">Contact Us </a>
                            </li>

                            <li class="nav-item">
                                <a href="#"  class="nav-link" target="_blank">Whatsapp</a>
                            </li>

                                                            <li class="nav-item">
                                    <a href="login.html" class="nav-link">Login </a>
                                </li>
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">Register </a>
                                </li>
                            


                        </ul>

                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <a href="login.html" class="btn theme-btn-1">Get
                                    Started <i class="las la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="option-item">
                            <a href="login.html" class="btn theme-btn-1">Get
                                Started <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    
    <!-- Hero -->
    <div class="hero-1 oh pos-rel" style="background: url('sliders/slide-2.jpg')">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-5">
                    <div class="hero-1-content wow fadeInLeft animated">
                        <h1 class="title  wow fadeInUp animated" data-wow-delay="0.4s"
                            style="color: #fff; text-shadow: 1px 1px 5px #00">Minimum / Statup 
                            Up to $150 Dollars</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.6s"
                            style="color: #fff; text-shadow: 1px 1px 5px #000">
                            Vortexincome is a financial institution that renders 3 unique services; INVESTMENT, SAVINGS AND
                            RETURNS.
                        </p>
                        <div class="hero-1-button-group">
                            <a href="login.html" class="btn theme-btn-1  wow fadeInUp animated"
                                data-wow-delay="0.8s"> Get
                                Started
                                <i class="uil uil-angle-right-b ml-2 mb-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-7 d-lg-block">
                    <div class="hero-1-thumb-15 wow fadeInUp animated" data-wow-delay="0.4s">
                        
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Hero -->

    <div class="featured-boxes-area">
        <!-- Container -->
        <div class="container">
            <div class="featured-boxes-inner">
                <!-- row -->
                <div class="row m-0">
                    <!-- col -->
                    <div class="col-lg-4 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-fb7756">
                                <i class="ri-thumb-up-line"></i>
                            </div>
                            <h3>PROFESSIONAL TEAM</h3>
                            <p>We have professional team and we have developed a automatic system that will allow you to
                                make profit handsomely. It includes defined risk prevention as well as stable income for any
                                investment plan.</p>

                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-facd60">
                                <i class="ri-wallet-line"></i>
                            </div>
                            <h3>[24/7] SUPPORT</h3>
                            <p>Our live support is a key ingredient in the success of our company services. Our experts are
                                well-qualified. We provide you with qualitative support consult 24/7 online live chat
                                support for our members..</p>

                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-1ac0c6">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h3>INSTANT WITHDRAW </h3>
                            <p>All payments are instant. If you meet pending please check e-currency website first! It can't
                                make instant payment if the e-currency website is down or not working !</p>

                        </div>
                    </div>
                    <!-- /col -->

                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </div>


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>


        <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                    }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <!-- Featured box -->
    
    <!-- /Featured box -->



    <div class="pricing-area ">
        <!-- Container -->
        <div class="container">

            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Our Plans</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>

                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row pricing-content-wrap mt-30">

                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">PLATINUM</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">15.30%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">25 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$30000</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$100000</span></li>
                                <li>Payout <span class="pricing-list__action " >$144,750 - $482,500+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="login.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">GOLD</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">12.23%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">30 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$5000</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$10000</span></li>
                                <li>Payout <span class="pricing-list__action " >$18,690 - $101,725+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="login.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">Silver Plan</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">10.70%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">21 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$1000</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$4000</span></li>
                                <li>Payout <span class="pricing-list__action " >$2,247 - $10,954+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="login.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                                    <!-- col -->
                    <div class="col-lg-3">
                        <div class="pricing-item pricing-item-2 shadow shadow-lg">
                            <div class="pricing-title text-center text-capitalize">
                                <h3 class="pricing-title">STARTER</h3>
                            </div>

                            <ul class="pricing-list">

                                <li>Daily Interest <span
                                        class="pricing-list__action">8.50%</span>
                                </li>
                                <li>Duration <span class="pricing-list__action">10 Days</span></li>
                                <li>Min Deposit <span class="pricing-list__action">$200</span></li>
                                <li>Max Deposit <span class="pricing-list__action">$2000</span></li>
                                <li>Payout <span class="pricing-list__action " >$170 - $15,325+</span></li>

                                <div class="pricing-price mt-20">
                                    <a href="login.html" class="btn theme-btn-1 width-100">Invest
                                        <span class="la la-caret-right"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                    <!-- /col -->
                            </div>






        </div>
        <!-- /row -->
    </div>
    <!-- /Container -->
    </div>








    <!-- Services -->
    <div class="services-area pt-120 pb-70">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Best Services</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Presenting financial Services that are Right For You</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">

                <script>
                    $(document).ready(function() {

                        $(".read-more-link").click(function() {

                            $(".readmoree").toggle();

                        });

                    });
                </script>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="login.html">
                                <img src="invest-now.jpg" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="login.html">Invest</a>
                        </h3>
                        <p>We collect investment & invest in successful business of buying and selling of own real estate
                            and get a good profit.

                            we buy residential real estate, Cryptocurrency, crude oil,
                            townhomes and give them a new and attractive look by customizing and sell them with a very good
                            profit. <a class="read-more-link"><strong>Read More</strong></a>

                            <span class="readmoree" style="display:none;">

                                We do business with your invested money on behalf of you and return your profit at the time
                                of your investment plan mature. It was created for the purpose of providing its members with
                                the safest and most secure investment, with the best possible and achievable returns without
                                risk. We made a long-term business plan with our honorable investors.

                            </span>


                        </p>
                        <div class="option-item align-self-start">
                            <a href="login.html" class="btn theme-btn-1">
                                Invest Now <i class="las la-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="login.html">
                                <img src="save.jpg" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="login.html">Savings</a>
                        </h3>
                        <p>What’s the point of your savings if you can’t make more money from it? Why be satisfied with 1-2%
                            interest on your savings, when you can get up to 10%? Yes, you read that right – up to 10% per
                            month is what you get when you save with Itbitgods!. Switch to Itbitgods Savings today
                            and get the best, high-yield interest on your savings. </p>

                        <div class="option-item align-self-start">
                            <a href="saving-details.html" class="btn theme-btn-1">
                                Start Saving <i class="las la-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <!-- /col -->

                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="image">
                            <a href="login.html">
                                <img src="business-loan.jpg" alt="image">
                            </a>
                        </div>
                        <h3>
                            <a href="login.html">Returns</a>
                        </h3>
                        <p>We prioritize delivering the best possible returns for our investors by strategically allocating
                             investments into profitable ventures. Our approach ensures substantial profit margins.

                        </p>
                        <p style="font-weight: bold; text-transform: capitalize"> Returns up to 30%. <br>
                            Zero charges<br>
                        </p>


                        <div class="option-item align-self-start">
                            <a href="login.html" class="btn theme-btn-1">
                                Get Started <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->


            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>

    <!-- /Services  -->
    
     


    <!-- About Us -->
    <div class="about-area pt-100 pb-100">
        <!-- Container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-image-warp">

                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-content warp">
                        <!-- row -->
                        <div class="row justify-content-center text-center">
                            <!-- col -->
                            <div class="col-lg-8 col-md-12 mb-50">
                                <div class="section-title">
                                    <h2 class="title">About Us</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                                    <p>We operate services in many country around the world.</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

                        <p>Investment decisions and decision-making is easier, more efficient, and better with
                            our investment consultants, who will always have your best interests in mind. Our
                            investment analysts and investment consultants take careful risk management
                            steps to provide lucrative short-term and long-term success for our clients.
                        <p>
                        <p>
                            With our scale and breadth of operations into global market insights, our
                            consulting services can help you to: </p>

                        Find the right investment opportunities.
                        Put together a rigid portfolio structure.
                        Implement an efficient investment strategy.
                        Research and find information on markets all over the world.
                        Determine strategic asset allocation.
                        Invest after-tax.
                        Stay ahead of any unnecessary risks.

                        And with highly attractive annual yields in a variety of tangible asset classes, we believe we're
                        suitably placed to add real significance to your investment</p>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Online Presence</h4>
                            <p>Register to receive further information regarding tangible, asset-backed and
                                secured investment opportunities, ROI, Fixed Deposit with attractive annual yields.</p>
                        </div>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Marketing Strategy</h4>
                            <p>We’ll match you with a portfolio that can help your money grow. Make a jump in success.
                                Want make money from home? Grab the offer now!.</p>
                        </div>
                        <div class="about-inner-content">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>Promote local Sale</h4>
                            <p>We've been blessed with luck, talent and opportunities, so now it is our duty
                                to add the hardworking element, as all the work we put in is for the greater benefit of our
                                customers and stakeholders alike.</p>
                        </div>
                        <div class="about-btn justify-content-center text-center">
                            <a href="about-us.html" class="btn theme-btn-1">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /About Us -->
<div class="row pricing-content-wrap mt-30">

    <div class="col-md-12">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"></a>
            </div>
            <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                    "width": "100%",
                    "height": "100%",
                    "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                    ],
                    "isTransparent": false,
                    "colorTheme": "light",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>

</div>

  
    <section class="pricing-are pt-100 pb-100">
        <!-- Container -->
        <div class="container">

            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-7">

                    <h2 class="mt-5">HOW IT WORKS (the mathematics explained)
                    </h2>

                    <p class="pb-3">Vortexincome is a financial institution that offer defined RETURNS, INVESTMENT AND SAVINGS while limiting
                        your losses. Gain peace of mind with products structured in a manner that limits your downside
                        risks.
                    </p>

                </div>
            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="shadow shadow-lg p-3">

                        <h3>INVESTMENT</h3>

                        <ul>
                            <li>Platinum offers 15.30% daily profit, with a 25 days trade duration.</li>
                            <li>Gold pack: 12.23% daily interest,  30 days trade duration</li>
                            <li>Premium:  This plan offer daily profit of 10.70%, with a duration of 21 days</li>
                            <li>Starter: 8.50% daily interest, 10 days trade duration.</li>
                        </ul>


                        <h3>LOAN SERVICES</h3>


                        <ul>
                            <li> Secured ROI up to $2 million. </li>
                            <li> Interest rate of up 15.30% </li>
                            <li> Minimum ROI of 10 Days  </li>
                        </ul>

                        <h3>SAVINGS</h3>
                        <p>Why be satisfied with 1-2% interest on your savings, when you can get up to 10%  interest?
                            Yes, you read that
                            right – up to 10% per month. </p>

                    </div>

                </div>
                <div class="col-md-6">

                    <div class="shadow shadow-lg p-3">

                        <h4>Investment Illustrations:</h4>

                        <p>Let's take for instance, Mr A made an investment of $30,000 (25 days trading duration pack of
                            15.3%
                            daily interest)
                        </p>

                        <h4>At Day 1,</h4>

                        <p>30,000 × 15.30 ÷ 100= $4,590. (DAY 1 profit is $4,590 + the initial capital of $30,000 = $34,590)
                        </p>

                        <h4>Day 2.</h4>

                        <p>Here the Total Investment has grown to $34,590 </p>
                        <p>Thus, $34,590 × 15.30 ÷100 = $5,292.27(34,590 + 5,292.27 = $39,882.27)</p>

                        <h4>At Day 15.</h4>

                        <p>Investment capital has grown to ($220,151.5). Thus, $220,151.5 × 15.3 ÷ 100 = 33,683(where
                            $33,683
                            is the daily profit
                            for day 15)
                        </p>

                        <p>it keeps that way till 25 days trading circle is completed. Same logic is applicable to other
                            plans,
                            where only interest
                            rate and trade duration is different
                        </p>

                        <p>For more clarification, reach us fast through the live chat button. we are live 24 hours 7 days a
                            week.
                        </p>



                    </div>


                </div>



            </div>



        </div>
    </div>



    <!-- Loan Calculation -->
    <div class="loan-section">
        <!-- Container -->
        <div class="container">
            <form action="#">
                <!-- row -->
                <div class="row calculator-loan">
                    <!-- col -->
                    <div class="col-lg-7 col-12 wow fadeInLeft">
                        <div class="loan-calculation-wrapper">
                            <div class="theme-title">

                                <h2>Investment Calculator</h2>
                                <p>This Investment Payment Calculator computes an estimate of the size of your
                                    Savings, investment and interest rate to see how it changes.
                                </p>
                                <p>Our payment estimates are broken down by principal interest.</p>
                                <div class="loan-filter-form">
                                    <div class="thirty form">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- Col -->
                    <div class="col-lg-5 col-12 wow fadeInRight">
                        <div class="loan-confirm-form">
                            <div class="thirty">
                                <div class="results clearfix"></div>
                            </div>
                            <button class="tran3s apply-button">Get Started</button>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </form>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Loan Calculation -->



    <!-- Team -->
    <div class="team-style">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Team</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Meet Our team member</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="image-1.jpg" alt=""></figure>
                            <ul class="social-list">

                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Miriam Cole</a></h3>
                            <span class="designation">Marketing</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="image-2.jpg" alt=""></figure>
                            <ul class="social-list">

                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Gilbert Young</a></h3>
                            <span class="designation">President & CEO</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-3">
                        <div class="image-holder">
                            <figure class="image-box"><img src="image-3.jpg" alt=""></figure>
                            <ul class="social-list">

                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Pat Dattalo</a></h3>
                            <span class="designation">Accountant</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->

            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Team -->

   



    <!-- Footer -->
    <footer class="footer-style bg-gray-100 pt-0">
        <!-- Container -->
        <div class="container">
            <!-- row -->

            <!-- /row -->
            <div class="footer-middle-area mt-30 pb-30 pt-60">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Us</h3>
                            <div class="footer-text">
                 
                                <p style="color: white !important"> Founded with the vision of transforming the way individuals approach financial growth, 
                                    VortexIncome leverages the power of blockchain technology to offer unparalleled investment opportunities 
                                    that promise swift returns.

                                    <a style="font-weight: bold; color: white;" class="read-more-div text-bold">                    </a>

                                <div class="hide-element" style="display: none; color: white !important;"> To solve
                                    this, we extended a helping hand by making our loan requirements to be based on
                                    based on reputation, not credit score or collateral.
                                    We understand business development as accurate and comprehensive use of experience.
                                    We have already developed by ourselves and tested in our business practice. Our
                                    knowledge, experience, and financial innovation serve as our guarantee.
                                    </p>

                                    <ul>
                                        <li>Professional Services</li>
                                        <li>Transparency</li>
                                        <li>Integrity</li>
                                        <li>Right and Assets Protection</li>
                                        <li>Confidentiality and Privacy</li>
                                    </ul>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- /col -->

                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="#">Confidentiality</a></li>
                                    <li><a href="#">About ROI</a></li>
                                    <li><a href="#">About Savings</a></li>
                                    <li><a href="#">About Investments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Subscribe</h3>
                            <div class="subscribes-form">
                                <form action="#">
                                    <input placeholder="Enter email " type="email">
                                    <button class="btn theme-btn-1 width-100 mt-10"><i
                                            class="lab la-telegram-plane me-2"></i>subscribe</button>
                                </form>
                            </div>
                            <div class="footer-info">
                                <p style="color: white;">Get the latest updates via email. Any time you may unsubscribe
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">Social Link</h3>
                            <div class="footer-icon" style="text-align: left; color: white !important;" >
                                <a style="color: white !important;" target="_blank_" href="https://facebook.com/">
                                    <img src="facebook.png" alt="facebook" >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- col -->
                    <div class="col-md-12">
                        <span style="color: white;">Risk Disclosure:</span>
                        <p style="font-size: 11px;
                        color: #ddd;
                        line-height: 14px !important;">Past performance is no guarantee of future results. Any
                            historical returns, expected returns, or probability projections may not reflect actual
                            future performance. All securities involve risk and may result in significant losses. <br>

                            Investments in the pools are speculative investments that involve high degrees of risk,
                            including a partial or total loss of invested funds. Vortexincome is not suitable for any
                            investor that cannot afford to loss some, or all, of the entire investment amount. Prices of
                            cryptocurrencies are extremely volatile and may be affected by external factors such as
                            financial, regulatory or political events. Trading on margin increases the financial
                            risks.<br>
                            The track record of each Pool is intended to reflect the ROI of the digital assets under
                            management under a stipulated period of time. This information should not be relied upon as
                            research, investment advice, or a recommendation regarding any products, strategies, or any
                            security in particular. Rather it's strictly for illustrative, educational, or informational
                            purposes and is subject to change.
                        </p>

                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="footer-bottom-area pt-25 pb-25">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>© Copyrights 2024 <a style="font-weight:bold; color: #fff;"
                                    href="index.html">Vortexincome.</a> All rights reserved.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <!-- /col -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link text-end">
                            <!-- <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#"> Terms</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Help </a></li>
                            </ul> 
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->
     <!--
    <div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      <div class='info-avatar'><img src='https://files.elfsight.com/storage/9274ed8b-a2e8-4cf8-a4cf-fad383377f2b/7b75090c-19a2-452b-9d6b-c2a51ad4916f.jpeg' /></div>
      <p><span class="whatsapp-name">Tedbree</span><br><small>Typically replies within an hour</small></p>

    </div>
    <div class='get-new hide'>
      <div id='get-label'></div>
      <div id='get-nama'></div>
    </div>
  </div>
  <div class='home-chat'>

  </div>
  <div class='start-chat'>
    <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
      <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
        <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
          <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
          </div>
        </div>
        <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
          <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Tedbree</div>
          <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br><br>How can I help you?</div>
          <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>
        </div>
      </div>
    </div>

    <div class='blanter-msg'>
      <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
      <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

    </div>
  </div>
  <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> Chat with Us</a>
 -->
    <!-- Go top -->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="las la-angle-double-up"></i>
                    <i class="las la-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /Go top -->

    <!-- JS -->

    <!-- Vendor Js -->
    <script src="js/vendors.js"></script>
    <!-- /Vendor js -->

    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- /Plugins Js -->

    <script src="plugin/toastr.min.js"></script>

    <script src="plugin/owlcarousel/owl.carousel.min.html"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- /Main JS -->

    <script>
        $(document).ready(function() {
            $(".read-more-div").click(function() {
                $(".hide-element").toggle();
            });

            $(document).ready(function(){
                $(".slideshow").owlCarousel({
                    items: 1,
                    autoplay: true,
                    loop: true,
                    center: true
                });
            });

            /* Whatsapp Chat Widget by www.bloggermix.com
$(document).on("click", "#send-it", function() {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+31 6 29320129" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function() {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new")
        .addClass("show")
        .removeClass("hide"),
      $(".home-chat,.head-home")
        .addClass("hide")
        .removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat")
      .addClass("hide")
      .removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
  });*/

        });
    </script>

    <script type="text/javascript">
        $(function() {
            function showNotification(msg = '') {
                Array.prototype.random = function(length) {
                    return this[Math.floor((Math.random() * length))];
                }
                const range = (start, end) => {
                    const length = end - start;
                    return Array.from({
                        length
                    }, (_, i) => start + i);
                }

                var range_amount = [...range(10000, 2000000)];

                

                var rn = names.random(names.length);

                var actions = [
                    'invested',
                    'made a withdrawal of',
                    'deposited',
                    'made a savings',
                    'Got a Loan approval of'
                ];

                var raction = actions.random(actions.length);

                var ramount = range_amount.random(range_amount.length);

                var a = (ramount).toLocaleString("en", {
                    style: "currency",
                    currency: "USD",
                    minimumFractionDigits: 2
                });

                msg = rn + ' ' + raction + ' ' + a;

                $.toast({
                    heading: 'Notification',
                    text: '<strong style="font-size: 14px">' + msg + '</strong>',
                    icon: 'info',
                    textColor: '#000',
                    bgColor: '#e9d16f',
                    loader: false,
                    position: 'left-center'
                });

            }

            var intervalId = setInterval(function() {
                showNotification();
            }, 5000);


        })
    </script>


<script src="../code.tidio.co_443/1mwp0csqhzyi6grb2o6o96crejgqqli6.js" async></script>

</body>

</html>
