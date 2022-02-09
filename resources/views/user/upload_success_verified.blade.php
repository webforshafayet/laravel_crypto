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
</head>

<body>
    <!--Header start-->
    <header>
        <nav class="navbar p-3 navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img src="img/headLogo.png" class="img-fluid">
            </a>
        </nav>
    </header>
    <!--Header start-->

    <!--Main start-->
    <main class="mt-4">
        <div class="px-1 mx-auto authWrap verify uploadIdSuccess">
            <div class="ms-auto ps-lg-4 px-md-3 text-center px-lg-0">
                <img src="img/signup/uploadIdSuccess.png" class="img-fluid">

                <h2 class="my-3">You Have Successfully Uploaded Your Credentials</h2>
    
                <p>Your account is currently under review</p>

                <a href="{{'/redirect'}}" class="btn text-white px-4 py-2">Go Back to Dashboard</a>
            </div>
        </div>
    </main>
    <!--Main end-->
  
  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
