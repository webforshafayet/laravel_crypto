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
            <a class="navbar-brand" href="{{'/'}}">
                <img src="img/headLogo.png" class="img-fluid">
            </a>
        </nav>
    </header>
    <!--Header start-->

    <!--Main start-->
    <main class="mt-4">
        <div class="px-2 mx-auto authWrap verify uploadId">
            

            <form action="{{url('upload_make_verified')}}"  method="post" enctype="multipart/form-data" class="ms-auto px-md-3 text-center text-md-start px-lg-0"> 
@csrf
                <div class="ms-auto ps-lg-4 px-md-3 text-center text-md-start px-lg-0">
                    <h2>
                        Upload Your
                        <p>ID Card</p>
                    </h2>
    
                    <p>Upload front and back card of a government approved id</p>
    
                    <div class="row w-100 m-0">
                        <div class="my-1 px-1 col-12">
                            <div id="idFront" class="position-relative rounded border overflow-hidden mx-auto mx-lg-0 text-start customFileField">
                               
                                    <p class="py-2 ps-3 d-inline-block m-0">Upload Front Side</p>
                                    <div  >
                                    <input id="idFrontSide" type="file" name="file" >
                                    </div>
                                 
                            </div>
                            <!-- <input id="idFrontSide" type="file" name="file" accept=".jpg, .jpeg, .png" class="d-none"> -->
                            
                        </div>
                        
                        <div class="my-1 px-1 col-12">
                        <div id="idFront" class="position-relative rounded border overflow-hidden mx-auto mx-lg-0 text-start customFileField">
                               
                               <p class="py-2 ps-3 d-inline-block m-0">Upload Front Side</p>
                               <div  >
                               <input id="idFrontSide" type="file" name="file_1" >
                               </div>
                            
                       </div>
                             
                        </div>


                        <div class="mx-auto mx-md-0 my-3 mt-4 text-center submitBtnWrap">
                            <div class="position-relative selfieWrap">
                                <div  class="rounded-circle p-4 p-lg-5 border d-inline-block imgWrap">
                                    <img src="img/signup/cam.png" alt="camera" class="d-block mx-auto">
                                </div>
                                <input id="idFrontSide" type="file" name="file_2" >
                            </div>

                            <div class="d-inline-block paymentScreenshot">
                                            <p class="py-2 ps-2 d-inline-block m-0"> Upload Here</p>
                                             
                                            
                                        </div>

                            <p class="py-3 resendOTP">
                                A selfie of you holding the id card.
                            </p>

                            <p class="text-start my-3 condition">Conditions: In a bright &amp; plain background and content of card have to be clearly visible without any blur or alternation.</p>

                            <button class="btn text-white px-4 py-2" type="submit">Submit &amp; Continue</button>
                            
                        </div>
                    </div>
                </div>
                 
            </form>
        </div>
    </main>
    <!--Main end-->
  
  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>

  <script src="js/fileTrigger.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
