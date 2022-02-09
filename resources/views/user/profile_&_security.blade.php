@include('user.css')

<body>

 

    <!--Header start-->
    @include('user.header')
    <!--Header start-->

     

    <div class="mx-auto px-3 maxContainer">

        <!--Nav start-->
        @include('user.nav')
        <!--Nav end-->
    
        <!--Main start-->
         
        <main class="mt-4 ms-auto">
            <!--Spacer-->
            <div class="spacer"></div>
            <!--Spacer-->

            <div class="pageHeading">
                <h2 class="m-0">Profile &amp; Security</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <!--PS row section start-->
            <div class="psRowsWrap">
                <div class="row w-100 m-0">
                    <!--Single profile info start-->
                    <div class="col-xl-6 col-sm-12 col-xs-12 p-1">
                        <div class="bg-white h-100 px-4 py-3 overflow-hidden singlePS">
                            <p class="widgetTitle">Basic Information</p>

                            <form>
                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/user.svg">
                                        Full Name
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="text" value="{{$user->name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/envelop.svg">
                                        Email Address
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="email" value="{{$user->email}}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/paperPlane.svg">
                                        Plan
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="text" value="{{$user->choose_package}}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/globe.svg">
                                        Country
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="text" value="{{$user->country}}" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Single profile info end-->

                    <!--Single profile info start-->
                    @include('user.profile_country')
                    <!--Single profile info end-->
                </div>

                <div class="row w-100 mx-0 mb-3">
                    <!--Single profile info start-->
                    <!-- @include('user.profie_password') -->
                    <!-- Single Profile Info end -->

                    
                    <!--Single profile info start-->
                    @include('user.profile_picture')
                </div>
            </div>
            <!--PS row section end-->
        </main>


        <!--Main end-->

    </div>
  
  <!--Bootstrap js-->
  @include('user.script')