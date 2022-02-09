<x-guest-layout>
    <!-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> -->







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
  
  <link rel="stylesheet" href="css/main.css">

  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/selectField.css">
</head>

<body>
<x-jet-validation-errors />
<!-- <form method="POST" action="{{ route('login') }}" method="post"> -->
            
 



    <!--Header start-->
    <header>
        <nav class="navbar p-3 navbar-expand-lg">
            <a class="navbar-brand" href="{{'/'}}">
                <img src="img/headLogo.png" class="img-fluid">
            </a>
        </nav>
    </header>
    <!--Header start-->

    <!--Main start-->
    <main>
        <div class="px-1 w-100 py-5 mx-auto authWrap verify signin">
            <form method="POST" action="{{ route('login') }}" method="post" class="ms-auto  px-md-3 text-center text-md-start px-lg-0">
            @csrf
                <h2>
                    Don't be Late and
                    <p>Sign in</p>
                </h2>
    
                <p>Send, receive and securely store your coins in your wallet</p>
    
                <div class="row w-100 m-0">
                    <div class="my-1 px-1 col-12">
                        <input type="email" class="mx-auto mx-md-0 form-control py-2 no-shadow" placeholder="Email Address" name="email" :value="old('email')" required autofocus>
                    </div>

                    <div class="my-1 px-1 col-12">
                        <input type="password" class="mx-auto mx-md-0 form-control py-2 no-shadow" placeholder="Password"  name="password" required autocomplete="current-password" >
                    </div>
 


                    @if (Route::has('password.request'))
                    <a   class="text-decoration-none" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                    <div class="mt-4 mx-auto mx-md-0 submitBtnWrap">
                        <p class="d-inline-block py-2">
                            Don't have an account? 
                            <a class="text-decoration-none" href="{{ route('register') }}">Registration</a>
                        </p>

                        <!-- <button class="btn text-white px-5 float-end py-2" type="submit">Sign In</button> -->

                        <button class="btn text-white px-5 float-end py-2" id="submit" type="submit" class="ibtn">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--Main end-->
  
  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <script src="js/signup.js"></script>
</body>

</html>



</x-guest-layout>
