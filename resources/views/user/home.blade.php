 <!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/normalize.css">
  
  <!-- <link rel="stylesheet" href="css/main.css"> -->

  <!--home css file-->
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <!--Header section start-->
  <header class="mb-5">
    <nav id="mainNav" class="navbar py-3 fixed-top navbar-expand-lg bg-white">
      <div class="container">
        <a class="navbar-brand logo" href="{{'/'}}">
          <img src="img/headLogo.png" class="img-fluid">
        </a>

        <div class="me-auto dropdown">
          <button class="btn btn-secondary dropdown-toggle rounded-pill border-0 shadow-none langBtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            En
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Bn</a></li>
            <li><a class="dropdown-item" href="#">En</a></li>
            <li><a class="dropdown-item" href="#">En</a></li>
          </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <img src="img/hamburger.png" class="img-fluid">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Advanced Chat</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <!-- <li class="nav-item my-1 my-lg-0 px-lg-1">
              <a class="d-inline-block px-3 py-2 text-decoration-none text-dark rounded-pill login outsideNavBtn" href="signin.html">
                <img src="img/home/loginIcon.png">
                Login
              </a>
            </li>

            <li class="nav-item my-1 my-lg-0 px-lg-1">
              <a class="d-inline-block px-3 py-2 text-decoration-none text-white rounded-pill register outsideNavBtn" href="signup.html">
                <img src="img/home/regIcon.png">
                Register
              </a>
            </li> -->






            





            <li class="nav-item my-1 my-lg-0 px-lg-1"> 
            @if (Route::has('login'))
                 
                    @auth

                    <li> <a class="nav-item">

                    <li>  <a href="{{ route('login') }}" class="d-inline-block px-3 py-2 text-decoration-none text-dark rounded-pill login outsideNavBtn"><img src="img/home/loginIcon.png">Dashboard</a> </li> 

                    </a> </li>
                         
 
                    @else
                      <li>  <a href="{{ route('login') }}" class="d-inline-block px-3 py-2 text-decoration-none text-dark rounded-pill login outsideNavBtn"><img src="img/home/loginIcon.png">Log in</a> </li> 

                        @if (Route::has('register'))
                        <li>  <a href="{{ route('register') }}" class="d-inline-block px-3 py-2 text-decoration-none text-white rounded-pill register outsideNavBtn">   <img src="img/home/regIcon.png">Register</a></li> 
                        @endif
                    @endauth
                
                </li>
            @endif
          







            
          </ul>
        </div>

      </div>
    </nav>
  </header>
  <!--Header section end-->

  <!--Banner section start-->
  <section class="mt-5 pt-5 banner">
    <div class="container">
      <div class="py-5 mt-1 bannerWrap">
        <div class="d-inline-block text-center text-sm-start bannerLeft">
          <h4>Bitcoin</h4>
          <h2>Exchange</h2>
          <h6 class="mb-3 mb-sm-5">you can trust</h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo veritatis t consectetur adipisicing elit.</p>
          <a class="d-inline-block text-decoration-none rounded-pill text-white learnMore" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!--Banner section end-->

  <!--About us section start-->
  <section class="aboutUs">
    <div class="container">
      <div class="ms-auto text-center text-sm-end py-5 aboutDesc">
        <h4>About us</h4>

        <h2 class="my-4">We are <span class="fw-bold">QpTrading</span></h2>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi earum maiores labore fugit incidunt illo aperiam consequatur qui? Explicabo praesentium ducimus eveniet quo quis molestiae itaque voluptates velit placeat eaquelabore fugit incidunt illo aperiam consequatur qui? Explicabo praesentium ducimus eveniet quo quis molestiae itaque voluptates velit</p>
        
        <a class="d-inline-block text-decoration-none rounded-pill text-white" href="#">Learn More</a>
      </div>
      
      <div class="mt-2 mt-lg-5 ms-auto text-center text-sm-end pt-2 pb-5 pt-lg-5 whyUs">
        <h4>Why us</h4>

        <h2 class="my-0">We are giving</h2>
        <h2 class="my-0 fw-bold">The Best Services</h2>
      </div>
    </div>
  </section>
  <!--About us section end-->

  <!--Why us feature section start-->
  <section class="mt-3 mt-lg-0 whyUsFeat">
    <div class="container">
      <!--Large features start-->
      <div class="row w-100 m-0">
        <!--Single feat start-->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
          <div class="border row w-100 m-0 px-2 px-lg-4 py-3 py-lg-5 text-center text-lg-start singleFeat largeFeat">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 featLeft">
              <img class="img-fluid" src="img/home/why1.png">
            </div>

            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 px-2 px-lg-4 py-4 featTxt featRight">
              <h4>Strong Security</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vero enim ducimus magni</p>
            </div>
          </div>
        </div>
        <!--Single feat end-->
        
        <!--Single feat start-->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2">
          <div class="border row w-100 m-0 px-2 px-lg-4 py-3 py-lg-5 text-center text-lg-end singleFeat largeFeat">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 px-2 px-lg-4 py-4 featTxt featLeft">
              <h4>World Covegare</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vero enim ducimus magni</p>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 why2ImgWrap featRight">
              <img class="img-fluid why2Img" src="img/home/why2.png">
            </div>
          </div>
        </div>
        <!--Single feat end-->
      </div>
      <!--Large features end-->

      <!--Small features start-->
      <div class="row w-100 m-0">
        <!--Single small feature start-->
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-3">
          <div class="px-3 px-lg-5 py-4 text-center border singleSmallFeat">
            <img src="img/home/why3.png" class="img-fluid">
            <div class="featTxt">
              <h4 class="mt-3 my-2">Payment Options</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vero enim ducimus magni</p>
            </div>
          </div>
        </div>
        <!--Single small feature end-->
        
        <!--Single small feature start-->
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-3">
          <div class="px-3 px-lg-5 py-4 text-center border singleSmallFeat">
            <img src="img/home/why4.png" class="img-fluid">
            <div class="featTxt">
              <h4 class="mt-3 my-2">Responsive Design</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vero enim ducimus magni</p>
            </div>
          </div>
        </div>
        <!--Single small feature end-->
        
        <!--Single small feature start-->
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-3">
          <div class="px-3 px-lg-5 py-4 text-center border singleSmallFeat">
            <img src="img/home/why5.png" class="img-fluid">
            <div class="featTxt">
              <h4 class="mt-3 my-2">Cost Efficiency</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vero enim ducimus magni</p>
            </div>
          </div>
        </div>
        <!--Single small feature end-->
        
        <!--Single small feature start-->
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-3">
          <div class="px-3 px-lg-5 py-4 text-center border singleSmallFeat">
            <img src="img/home/why6.png" class="img-fluid">
            <div class="featTxt">
              <h4 class="mt-3 my-2">High Liquidity</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vero enim ducimus magni</p>
            </div>
          </div>
        </div>
        <!--Single small feature end-->
      </div>
      <!--Small features end-->
    </div>
  </section>
  <!--Why us feature section end-->

  <!--Service section start-->
  <section class="my-5 py-5 service">
    <div class="my-5 text-center secTop">
      <h6>Our Services</h6>
      <h2>Service <span>We Provide</span></h2>
    </div>

    <div class="container">
      <div class="row w-100 m-0">
        <div class="col-12 my-2">
          <div class="row w-100 m-0 singleServiceBig">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <img src="img/home/services1.png" class="img-fluid" alt="Service Image">
            </div>
  
            <div class="text-center text-lg-end col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="d-inline-block bigServieRight">
                <h6>Annuity & Retirement Plan</h6>
  
                <p class="mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae exercitationem unde incidunt suscipit nesciunt corporis delectus corrupti quam ad explicabo consequuntur molestiae accusantium iste quaerat, harum illum pariatur impedit praesentiumnesciunt corporis delectus corrupti quam ad explicabo consequuntur molestiae accusantium iste quaerat, harum illum pariatur impedit praesentiumiste quaerat, harum illum pariatur impedit praesentium</p>
              </div>
            </div>
          </div>
        </div>
  
        <div class="row w-100 m-0">
          <div class="col-md-6 col-sm-12 col-xs-12 my-3">
            <div class="text-center singleServiceSmall">
              <img src="img/home/services2.png" class="img-fluid" alt="Service Image">
    
              <div class="p-lg-4 p-1 mt-3">
                <h6>Crypto Trading</h6>
      
                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae exercitationem unde incidunt suscipit nesciunt corporis delectus corrupti quam ad explicabo consequuntur molestiae accusantium iste quaerat, harum illum pariatur impedit praesentiumnesciunt corporis delectus corrupti quam ad explicabo consequuntur molestiae accusantium iste quaerat, harum illum pariatur impedit praesentiumiste quaerat, harum illum pariatur impedit praesentium</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-12 col-xs-12 my-3">
            <div class="text-center singleServiceSmall">
              <img src="img/home/services3.png" class="img-fluid" alt="Service Image">
              
              <div class="p-lg-4 p-1 mt-3">
                <h6>Stock Trading</h6>
      
                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae exercitationem unde incidunt suscipit nesciunt corporis delectus corrupti quam ad explicabo consequuntur molestiae accusantium iste quaerat, harum illum pariatur impedit praesentiumnesciunt corporis delectus corrupti quam ad explicabo consequuntur molestiae accusantium iste quaerat, harum illum pariatur impedit praesentiumiste quaerat, harum illum pariatur impedit praesentium</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Service section end-->

  <!--Pricing section start-->
  <section class="text-center pricing">
    <div class="my-5 secTop">
      <h6>Our Packages</h6>
      <h2>Our <span>Price Plan</span></h2>
    </div>

    <div class="container">
      <!--1st row start-->
      <div class="row w-100 p-1 p-md-5 m-0 priceWrap">
        <!--Single Pack start-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-2 my-lg-0">
          <div class="bg-white p-1 p-md-3 position-relative singlePack h-100">
            <h6 class="my-3">Starter</h6>
            <h4 class="pb-4 mb-3 position-relative">$500 - $14,999</h4>

            <ul class="text-start my-4">
              <li>45% Weekly Profit</li>
              <li>Personal Account Manager</li>
              <li>Full Access Over Your Money</li>
              <li>Cryptocurrency and Mining</li>
              <li>Forex Trading</li>
              <li>Binary Option</li>
            </ul>
            
            <div class="priceBottomSpace">
            </div>
            
            <a class="d-inline-block position-absolute text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register</a>
          </div>
        </div>
        <!--Single Pack end-->
        
        <!--Single Pack start-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-2 my-lg-0">
          <div class="bg-white p-1 p-md-3 position-relative singlePack h-100">
            <h6 class="my-3">Premium</h6>
            <h4 class="pb-4 mb-3 position-relative">$15,000 - $49,999</h4>

            <ul class="text-start my-4">
              <li>65% Weekly Profit</li>
              <li>Personal Account Manager</li>
              <li>Full Access Over Your Money</li>
              <li>Cryptocurrency</li>
              <li>Withdrawal Limit Per Week $5,000-$25,000</li>
              <li>Forex Trading</li>
              <li>Binary Option</li>
            </ul>
            
            <div class="priceBottomSpace">
            </div>
            
            <a class="d-inline-block position-absolute text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register</a>
          </div>
        </div>
        <!--Single Pack end-->
        
        <!--Single Pack start-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-2 my-lg-0">
          <div class="p-3 text-white position-relative singlePack h-100 pro">
            <h6 class="my-3">Professional</h6>
            <h4 class="pb-4 mb-3 position-relative">$50,000 - $99,999</h4>

            <ul class="text-start my-4">
              <li>85% Weekly Profit</li>
              <li>Personal Account Manager</li>
              <li>Full Access Over Your Money</li>
              <li>Cryptocurrency Trading and Mining</li>
              <li>Withdrawal Limit Per Week $25,000-$45,000</li>
              <li>Forex Trading</li>
              <li>Binary Option</li>
            </ul>
            
            <div class="priceBottomSpace">
            </div>
            
            <a class="d-inline-block position-absolute text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register</a>
          </div>
        </div>
        <!--Single Pack end-->
      </div>
      <!--1st row end-->

      <!--2nd row start-->
      <div class="row w-100 p-1 p-md-5 mx-0 mt-4 priceWrap">
        <!--Single Pack start-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-2 my-lg-0">
          <div class="bg-white p-1 p-md-3 position-relative singlePack h-100">
            <h6 class="my-3">QPT Require Annuity</h6>
            <h4 class="pb-4 mb-3 position-relative">$15,000 - $100,0000</h4>

            <ul class="text-start my-4">
              <li>Tax Deferred</li>
              <li>100% Insured</li>
              <li>Flexible Premium</li>
              <li>Partial Surrender</li>
              <li>Interest Rate (6%-7%)</li>
              <li>Personal Account Manager</li>
              <li>Policy Period (5-20 years)</li>
              <li>Guranteed Lifetime Benifits</li>
              <li>Investment (Stock &amp; Digital Assets)</li>
              <li>Contribution Limit (40% - 80% of pre-retirement Salary)</li>
            </ul>
            
            <div class="priceBottomSpace">
            </div>
            
            <a class="d-inline-block position-absolute text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register</a>
          </div>
        </div>
        <!--Single Pack end-->
        
        <!--Single Pack start-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-2 my-lg-0">
          <div class="bg-white p-1 p-md-3 position-relative singlePack h-100">
            <h6 class="my-3">QPT Fixed Annuity</h6>
            <h4 class="pb-4 mb-3 position-relative">$15,000 - $100,000</h4>

            <ul class="text-start my-4">
              <li>100% Insured</li>
              <li>Flexible Premium</li>
              <li>Tax Free (Deferred)</li>
              <li>50% Partial Surrender</li>
              <li>Stock &amp; Digital Assets</li>
              <li>Full Access to Your Fund</li>
              <li>Retirement (Above 4 yrs)</li>
              <li>Personal Account Manager</li>
              <li>Policy Period (4-20 yrs)</li>
              <li>Guranteed Lifetime Benifits</li>
              <li>Qualified Age (Above 50yrs)</li>
              <li>Partial Surrender (After 1 yr)</li>
            </ul>
            
            <div class="priceBottomSpace">
            </div>
            
            <a class="d-inline-block position-absolute text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register</a>
          </div>
        </div>
        <!--Single Pack end-->
        
        <!--Single Pack start-->
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-2 my-lg-0">
          <div class="p-1 p-md-3 text-white position-relative singlePack h-100 pro">
            <h6 class="my-3">Professional</h6>
            <h4 class="pb-4 mb-3 position-relative">$50,000 - $99,999</h4>

            <ul class="text-start my-4">
              <li>Tax Deferred</li>
              <li>100% Insured</li>
              <li>Full Access to Your Fund</li>
              <li>Retirement</li>
              <li>Interest Rate</li>
              <li>Personal Account Manager</li>
              <li>Policy Period (5-10 yrs)</li>
              <li>Qualified Age (Above 45 yrs)</li>
              <li>Investment in Stock &amp; Digital Assets</li>
            </ul>
            
            <div class="priceBottomSpace">
            </div>
            
            <a class="d-inline-block position-absolute text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register</a>
          </div>
        </div>
        <!--Single Pack end-->
      </div>
      <!--2nd row end-->

      <div class="w-100 mx-auto pricingBottom">
        <div class="row w-100 m-0">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="px-1 py-3 p-md-4">
              <h6>Self Managed Super Fund</h6>
    
              <p class="mt-1 mt-md-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae exercitationem unde incidunt suscipit nesciunt corporis delectus corrupti quam ad explicabo consequuntur</p>
              
              <a class="d-inline-block text-decoration-none rounded-pill" href="{{ route('register') }}">Register</a>
            </div>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="px-1 py-3 p-md-4">
              <h6>Defined Contribution Funds</h6>
    
              <p class="mt-1 mt-md-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae exercitationem unde incidunt suscipit nesciunt corporis delectus corrupti quam ad explicabo consequuntur</p>
              
              <a class="d-inline-block text-decoration-none rounded-pill" href="{{ route('register') }}">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Pricing section end-->

  <!--Footer top section start-->
  <section class="my-5 footerTop">
    <div class="container">
      <div class="row w-100 m-0">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/home/analytics.png" class="img-fluid" alt="Analitics">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="py-lg-5 mt-4 text-center text-md-end foterTopRight">
            <h4>Get Started Today</h4>
            <h2>with Bitcoin</h2>
            <p>Open account for free and start trading Bitcoin!</p>
            <a class="d-inline-block text-decoration-none rounded-pill text-white" href="{{ route('register') }}">Register Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Footer top section end-->
  
  <!--Footer section start-->
  <footer class="py-5 text-white">
    <div class="container">
      <div class="row w-100 m-0 pb-5 text-center text-md-start">
        <!--Single footer widget start-->
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Our Company</h6>

            <ul class="list-unstyled p-0 m-0">
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">Home</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">About</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">Services</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">Pricing</a>
              </li>
            </ul>
          </div>
        </div>
        <!--Single footer widget end-->

        <!--Single footer widget start-->
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Help &amp; Support</h6>

            <ul class="list-unstyled p-0 m-0">
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">FAQ</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">Terms &amp; Services</a>
              </li>
              <li class="mb-2">
                <a href="#" class="text-decoration-none text-white">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <!--Single footer widget end-->

        <!--Single footer widget start-->
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Contact Us</h6>

            <div>
              <p class="my-2">
                <img class="me-2" width="20" src="img/home/envelop.png">
                support@qptrading.com
              </p>

              <p class="my-2">
                <img class="me-2" width="20" src="img/home/tel.png">
                +1 125 125 1234
              </p>

              <p class="mt-5 mb-0">
                <img class="me-2" width="20" src="img/home/location.png">
                Address
              </p>

              <p class="my-2 ps-4">10 Downing Street, London</p>
            </div>
          </div>
        </div>
        <!--Single footer widget end-->

        <!--Single footer widget start-->
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Market Cap</h6>

            <h3>$198.76B</h3>
          </div>

          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Active Accounts</h6>

            <h3>$369K</h3>
          </div>
        </div>
        <!--Single footer widget end-->

        <!--Single footer widget start-->
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Daily Transaction</h6>

            <h3>$243K</h3>
          </div>

          <div class="mb-5 singleFooterWidget">
            <h6 class="mb-3">Supported Countries</h6>

            <h3>73</h3>
          </div>
        </div>
        <!--Single footer widget end-->
      </div>

      <div class="row w-100 m-0">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="text-center text-lg-start footerMenu">
            <ul class="list-unstyled m-0 p-0">
              <li class="d-inline-block">
                <a href="#" class="text-decoration-none active">Home</a>
              </li>

              <li class="d-inline-block">
                <a href="#" class="text-decoration-none ms-1 ms-lg-4">Pricing</a>
              </li>

              <li class="d-inline-block">
                <a href="#" class="text-decoration-none ms-1 ms-lg-4">FAQ</a>
              </li>

              <li class="d-inline-block">
                <a href="#" class="text-decoration-none ms-1 ms-lg-4">Advanced Chart</a>
              </li>

              <li class="d-inline-block">
                <a href="#" class="text-decoration-none ms-1 ms-lg-4">About Us</a>
              </li>

              <li class="d-inline-block">
                <a href="#" class="text-decoration-none ms-1 ms-lg-4">Services</a>
              </li>

              <li class="d-inline-block">
                <a href="#" class="text-decoration-none ms-1 ms-lg-4">Contact</a>
              </li>
            </ul>

            <p class="mt-2">Copyright ?? 2021qptradings.inc. All Rights Reserved</p>
          </div>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="text-center text-lg-end socialLinks">
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/fb.png" alt="Facebook" class="my-1">
            </a>
            
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/insta.png" alt="Instagram" class="my-1">
            </a>
            
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/tw.png" alt="Twitter" class="my-1">
            </a>
            
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/g+.png" alt="Google Plus" class="my-1">
            </a>
            
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/ln.png" alt="Iinked In" class="my-1">
            </a>
            
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/yt.png" alt="YouTube" class="my-1">
            </a>
            
            <a href="#" class="text-decoration-none mx-1">
              <img src="img/home/vimeo.png" alt="Vimeo" class="my-1">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer section end-->
  
  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
