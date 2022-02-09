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

  <link rel="stylesheet" href="admin/css/normalize.css">
  
  <link rel="stylesheet" href="admin/css/main.css">

  <link rel="stylesheet" href="admin/css/login.css">
</head>

<body>
    <!--Header start-->
    <header>
        <nav class="navbar p-3 navbar-expand-lg">
            <a class="navbar-brand ms-auto" href="index.html">
                <img src="admin/img/headLogoWhite.png" class="img-fluid">
            </a>
        </nav>
    </header>
    <!--Header start-->

    <!--Main start-->
    <main>
        <div class="px-1 w-100 py-5 mx-auto authWrap verify signin">
        <form method="POST" action="{{ route('login') }}" method="post" class="ms-auto  px-md-3 text-center text-md-start px-lg-0">
            @csrf
                <h2 class="text-white">
                    QPT Admin Panel <br>Login
                </h2>
    
                <p class="text-white">Send, receive and securely store your coins in your wallet</p>
    
                <div class="row w-100 m-0">
                <div class="my-1 px-1 col-12">
                        <input type="email" class="mx-auto mx-md-0 form-control py-2 no-shadow" placeholder="Email Address" name="email" :value="old('email')" required autofocus>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <input type="password" class="mx-auto mx-md-0 form-control py-2 no-shadow" placeholder="Password"  name="password" required autocomplete="current-password" >
                    </div>





                   
                    @if (Route::has('password.request'))
                    <a   class="text-decoration-none text-white" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
					@endif

                    <div class="mt-4 mx-auto mx-md-0 submitBtnWrap">
                        <button class="btn text-white w-100 px-5 float-end py-2" id="submit" type="submit" class="ibtn">Sign In</button>
                    </div>











                    
 
                </div>
            </form>
        </div>
    </main>
    <!--Main end-->
  
  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="admin/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="admin/js/plugins.js"></script>
  <script src="admin/js/main.js"></script>

  <script src="admin/js/signup.js"></script>
</body>

</html>






