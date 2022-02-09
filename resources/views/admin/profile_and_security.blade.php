 

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
                    <div class="d-flex w-100 mb-4 dateRange">
                        <div class="singleInputWrap">
                            <div class="input-group">
                                <div class="input-group-text icon">
                                    <img src="img/dashboard/calendar.svg">
                                </div>

                                <input id="startDate" type="text" class="form-control" placeholder="From.." readonly>
                            </div>
                        </div>

                        <div class="ms-3 singleInputWrap">
                            <div class="input-group">
                                <div class="input-group-text icon">
                                    <img src="img/dashboard/calendar.svg">
                                </div>

                                <input id="endDate" type="text" class="form-control" placeholder="To.." readonly>
                            </div>
                        </div>
                    </div>

                     

                    <a class="position-absolute px-3 pt-1 rounded text-white text-decoration-none export" href="{{ url('view_upload_profile_and_security') }}">
                        <img src="admin/img/export.png" class="me-1">
                        Add
                    </a>

                    <!-- <ul class="list-unstyled text-center w-100 hisTable transHisTable umData dmData ps"> -->








                    <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        <th scope="col">FULL NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PLAN</th>
                            <th scope="col">DOB</th>
                            <th scope="col">PHONE NUMBER</th>
                            <th scope="col">PASSWORD</th>
                </tr>
                    </thead>
                    @foreach($data as $product)
                    <tbody>
                        <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->email}}</td>
                            <td>{{$product->choose_package}}</td> 
                            <td>{{$product->date}}</td>
                            <td>{{$product->contact_number}}</td>
                            <td>{{$product->password}}</td>

                            <td><a  style="color: white" class="btn btn-danger" href="{{url('delete_profile_and_security',$product->id)}}"> <img src="admin/img/export.png" class="me-1">Delete</a></td>
            </tr>
                </tr>
                        
                    </tbody>
                    @endforeach
                    </table>
                    </div>




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
