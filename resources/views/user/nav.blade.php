

<style>
    .translated-ltr{margin-top:-40px;}
.translated-ltr{margin-top:-40px;}
.goog-te-banner-frame {display: none;margin-top:-20px;}

.goog-logo-link {
   display:none !important;
   
} 

.goog-te-gadget{
   color: transparent !important;
    
}
</style>


<nav id="mainNav" class="pe-3 position-fixed position-md-static">
            <ul class="list-unstyled mt-sm-5">
                <li class="my-2">
                    <a href="{{'redirect'}}" class="d-block px-3 py-2 rounded text-decoration-none active">
                        <img src="img/dashboard/pie.svg">
                        <span class="ms-2 pt-1">Dashboard</span>
                    </a>
                </li>
    
                <li class="my-2">
                    <a href="{{'deposits_funds'}}" class="d-block px-3 py-2 rounded text-decoration-none">
                        <img src="img/dashboard/deposit.svg">
                        <span class="ms-2 pt-1">Deposits Funds</span>
                    </a>
                </li>
    
                <li class="my-2">
                    <a href="{{'withdraw_funds'}}" class="d-block px-3 py-2 rounded text-decoration-none">
                        <img src="img/dashboard/withdrawFund.svg">
                        <span class="ms-2 pt-1">Withdraw Funds</span>
                    </a>
                </li>
    
                <li class="my-2">
                    <a href="{{'transiction_history'}}" class="d-block px-3 py-2 rounded text-decoration-none">
                        <img src="img/dashboard/clock.svg">
                        <span class="ms-2 pt-1">Transaction History</span>
                    </a>
                </li>
    
                <li class="my-2">
                    <a href="{{'profile'}}" class="d-block px-3 py-2 rounded text-decoration-none">
                        <img src="img/dashboard/p&s.svg">
                        <span class="ms-2 pt-1">Profile &amp; Security</span>
                    </a>

                </li>

                

 
            </ul>

















            
















            <div   style=" background: transparernt ;  margin: auto;
 
 
 padding-top: 0px;
  padding-right: 0px;
   
  padding-left: 0px;">
                <!--Custom select start-->
               
                      
                    
                <div id="google_translate_element"></div>

            <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            
  
                 
            </div>



































            <div class="mt-5 pt-4 menuBottom">


            
                <!--Custom select start-->
                <!-- <select class="vodiapicker">
                    <option value="en" class="test" data-thumbnail="img/dashboard/us.png">
                        English
                    </option>

                    <option value="au" data-thumbnail="img/dashboard/us.png">
                        Hindi
                    </option>

                    <option value="uk" data-thumbnail="img/dashboard/us.png">Chinese</option>

                    <option value="cn" data-thumbnail="img/dashboard/us.png">
                        German
                    </option>

                    <option value="de" data-thumbnail="img/dashboard/us.png">
                        Bangla
                    </option>
                </select> -->
            
                <!-- <div class="position-relative lang-select">
                    <button class="btn-select position-relative" value=""></button>
                    <div class="b position-absolute rounded w-100 bg-white langList">
                        <ul id="a" class="m-0 px-2 py-1"></ul>
                    </div>
                </div> -->
                <!--Custom select end-->

                <a class="text-decoration-none text-start btn mt-4 text-white w-100 logout">
                    <!-- <img class="img-fluid me-2" src="img/dashboard/logout.svg"> -->
                    <span> 


                    <form method="POST" action="{{ route('logout') }}">
                @csrf
                <center> 

                <button type="submit" class="text-decoration-none text-start btn mt-3 text-white w-100 logout"> <img  class="img-fluid me-2" src="img/dashboard/logout.svg">
                    {{ __('Log Out') }}
                </button>
                </center>
              </form>

                    </span>
                </a>
            </div>
        </nav>