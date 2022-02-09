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



<nav id="mainNav" class="pe-2 position-fixed position-md-static">
            <ul class="list-unstyled mt-sm-5">
                <li class="my-1">
                    <a href="{{'/redirect'}}" class="d-block pe-3 py-2 rounded text-decoration-none dashboard active">
                        <span class="ms-2 pt-1">Admin Overview</span>
                    </a>
                </li>
    
                <li class="my-1">
                    <a href="{{'user_management'}}" class="d-block pe-3 py-2 rounded text-decoration-none usrMngmt">
                        <span class="ms-2 pt-1">User Management</span>
                    </a>
                </li>

                <li class="my-1">
                    <a href="{{'deposits_management'}}" class="d-block pe-3 py-2 rounded text-decoration-none deposMngmt">
                        <span class="ms-2 pt-1">Deposits Management</span>
                    </a>
                </li>

                <li class="my-1">
                    <a href="{{'withdraw_management'}}" class="d-block pe-3 py-2 rounded text-decoration-none withMngmt">
                        <span class="ms-2 pt-1">Withdraw Management</span>
                    </a>
                </li>
    
                <li class="my-1">
                    <a href="{{'finance_management'}}" class="d-block pe-3 py-2 rounded text-decoration-none financeMngmt">
                        <span class="ms-2 pt-1">Finance Management</span>
                    </a>
                </li>

                <li class="my-1">
                    <a href="{{'profile_and_security'}}" class="d-block pe-3 py-2 rounded text-decoration-none ps">
                        <span class="ms-2 pt-1">Profile &amp; Security</span>
                    </a>
                </li>

                <li class="my-1">
                    <a href="{{'quote_management'}}" class="d-block pe-3 py-2 rounded text-decoration-none quoteMngmt">
                        <span class="ms-2 pt-1">Quote Management</span>
                    </a>
                </li>

                <li class="my-1">
                    <a href="{{'beneficiary_management'}}" class="d-block pe-3 py-2 rounded text-decoration-none benifMngmt">
                        <span class="ms-2 pt-1">Beneficiary Management</span>
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

                <button type="submit" class="text-decoration-none text-start btn mt-4 text-white w-100 logout"> <img  class="img-fluid me-2" src="img/dashboard/logout.svg">
                    {{ __('Log Out') }}
                </button>
                </center>
            </form>
                    </span>


                     
                </a>
            </div>
        </nav>