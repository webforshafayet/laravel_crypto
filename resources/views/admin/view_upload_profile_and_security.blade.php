 

     @include('admin.css')

<body>

    <!--Header start-->

    @include('admin.header')
    
    <!--Header start-->



    <div class="mx-auto px-3 maxContainer">

        <!--Nav start-->
        @include('admin.nav')
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

            <div class="transationHistoryContents overflow-auto userMngmtWrap">
                <!--User Management Table start-->
                <div class="bg-white position-relative h-100 p-2 p-lg-4 mb-4 mb-sm-0 history overflow-auto transationHistory userMngmtTbl">
                    


                    <!-- <ul class="list-unstyled text-center w-100 hisTable transHisTable umData dmData ps"> -->

                    @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif

<form action="{{url('upload_profile_and_security')}}" method="post" enctype="multipart/form-data"> 
@csrf
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">User Name</label>
<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="User name">
</div>


<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
<input type="email"  name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
</div>


<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Choose Package</label>
<!-- <input type="text" name="choose_package" class="form-control" id="exampleFormControlInput1" placeholder="choose package" readonly> -->
</div>

<div class="mb-3">
 
  
  <select class="custom-select" name="choose_package">
 
  <option  >Choose an option</option>
  <option value="Starter" name="choose_package" selected>Starter</option>
                                <option value="Premium" name="choose_package"  >Premium</option>
                                <option value="Professional" name="choose_package">Professional</option>
                                <option value="Qpt_Fixed_Annuity" name="choose_package">Qpt Fixed Annuity</option>
                                <option value="Cash_Balance" name="choose_package">Cash Balance</option>
                                <option value="SMFS" name="choose_package">SMFS</option>
                                <option value="DCF" name="choose_package">DCF</option>
</select>
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Date of birth</label>
<input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="date">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Contact Number</label>
<input type="text" name="contact_number" class="form-control" id="exampleFormControlInput1" placeholder="contact number">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Password</label>
<input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
</div>

 
 
<div class="col-auto">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>





 




                    <!-- <div class="pagination">
                    </div> -->
                </div>
                <!--User Management Table end-->
            </div>
        </main>
        <!--Main end-->

    </div>

    

        <!--Main end-->

    </div>
  
    @include('admin.script')
</body>

</html>
