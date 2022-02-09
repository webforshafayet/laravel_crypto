

<header class="position-fixed py-3 w-100">
        <div class="mx-auto px-3 maxContainer">
             




            <div class="d-inline-block text-center text-sm-start logo">
                <button id="navToggler" class="d-md-none border-0 bg-transparent">
                    <img src="img/hamburger.png" class="img-fluid">
                </button>

                <a class="navbar-brand" href="{{'/'}}">
                    <img src="img/headLogo.png" class="img-fluid">
                </a>

                <button id="headerMenuToggler" class="d-sm-none ms-1 border-0 rounded bg-secondary text-light">+</button>
            </div>

            <div class="float-sm-end pt-3 pt-sm-0 menuList">
            <ul class="float-sm-start list-unstyled text-center text-sm-start headerMenuItems">
                    <li class="float-sm-start darkToggler">
                        <img src="img/dashboard/sun.svg">

                        <label class="position-relative mb-4 switchBtnLabel">
                            <input class="position-absolute switchChk" type="checkbox">
                            <span class="position-absolute rounded-pill transition border border-secondary switchButton"></span>
                        </label>
                    </li>

                    <li class="d-inline-block float-sm-end mx-md-1 pt-2">
                        <button class="border-0 bg-transparent position-relative activeBell">
                            <img src="img/dashboard/bell.svg">
                        </button>
                    </li>

                    <li class="d-inline-block my-3 my-sm-0 float-sm-end mx-md-1 pt-2">
                        <button class="border-0 bg-transparent">
                            <img src="img/dashboard/search.svg">
                        </button>
                    </li>


                     
 

                     
                </ul>

                 

                <!-- <div class="float-sm-end text-center mx-sm-0 position-relative ps-sm-2 ps-md-4 usrInfo">

                
                <li class="w-25 p-3">
                <img src="/profileimage/{{$user->profile_photo_path}}" class="card-img-top w-8 mx-auto" alt="User">

                    </li>

                    <div class="d-inline-block text-end">
                        <p>Hello, <span>{{Auth::user()->name}}</span></p>
                         
                    </div>


                    

                    
                </div> -->



                <div class="float-sm-end text-center mx-sm-0 position-relative ps-sm-2 ps-md-4 usrInfo">
                    <div class="d-inline-block text-end">
                        <p class="notranslate">Hello, <span>{{Auth::user()->name}}</span></p>
                         
                    </div>

                    <img src="/profileimage/{{$user->profile_photo_path}}" class="img-responsive" alt="User" style="width:20%">
                </div>
                
            </div>
        </div>
    </header>