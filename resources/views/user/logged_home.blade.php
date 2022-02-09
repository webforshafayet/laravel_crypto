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
        @include('user.main')
        <!--Main end-->

    </div>
  
  <!--Bootstrap js-->
  @include('user.script')