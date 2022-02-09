 

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
                <h2 class="m-0">User Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="transationHistoryContents overflow-auto userMngmtWrap">
                <!--User Management Table start-->
                <div class="bg-white position-relative h-100 p-2 p-lg-4 mb-4 mb-sm-0 history overflow-auto transationHistory userMngmtTbl">
                    <div class="d-flex justify-content-between w-100 mb-4 dateRange">
                        <div class="singleInputWrap">
                            <div class="input-group">
                                <div class="input-group-text icon">
                                    <img src="admin/img/dashboard/calendar.svg">
                                </div>

                                <input id="startDate" type="text" class="form-control" placeholder="From.." readonly>
                            </div>
                        </div>

                        <div class="singleInputWrap">
                            <div class="input-group">
                                <div class="input-group-text icon">
                                    <img src="admin/img/dashboard/calendar.svg">
                                </div>

                                <input id="endDate" type="text" class="form-control" placeholder="To.." readonly>
                            </div>
                        </div>

                        <select id="locationFilter" class="rounded">
                            <option value="">Sort By Location</option>
                            <option value="Spain">Spain</option>
                            <option value="Russaia">Russaia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="France">France</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                        </select>

                        <!--
                        <select id="" class="rounded">
                            <option value="">All Users</option>
                            <option value="Spain">Spain</option>
                            <option value="Russaia">Russaia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="France">France</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="India">India</option>
                        </select>
                        -->
                    </div>

                    <a class="position-absolute px-2 pt-1 rounded text-white text-decoration-none export" href="{{ url('dynamic_pdf/pdf') }}"> 
                        <img src="admin/img/export.png" class="me-1">
                        Export
                    </a>


                    @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif


         <div class="bg-white px-4 py-3 mt-3 overflow-hidden depWit makeDeposit">
             <form id="depositForm" action="{{url('upload_user_management')}}" method="post" enctype="multipart/form-data">
                                @csrf           




                <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        <th scope="col">CLIENT ID</th>
                        <th scope="col">USER NAME</th>
                         
                            <th scope="col">EMAIL ADDRESS</th>
                            <th scope="col">CONTACT NUMBER</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">PLAN</th>
                            <th scope="col">ID CARD</th> 


                            <th scope="col">VERIFY USER</th>
                             
                 </tr>
                    </thead>
                    @foreach($data as $product)
                    <tbody>
                        <tr>
                        <td>{{$product->id }}</td>
                        <td>{{$product->name}} <span >
                            <!-- {{$product->verification}} -->
                            
                    
                        @if ($product->verification === 'VERIFIED')
                            <span class="btn btn-success">VERIFIED</span>
                        
                        @else
                            <span class="btn btn-warning">UNVERIFIED</span>
                        @endif 
                               
                    
                    
                    
                    
                    
                    </span>  </td>
                        
                         
                         
                            <td>{{$product->email}}</td> 
                            <td>{{$product->contact_number}}</td>
                            <td>{{$product->country}}</td>
                            <td>{{$product->choose_package}}</td>
                            <td> <span class="text-end">
            <img height="100" width="100" alt="didnt submit" src="/verifiedimage/{{$product->Upload_front_photo_path}}">

            </span></td>


            <td>

<a style="color: white" class="btn btn-info" href="{{url('view_upload_user_management',$product->id)}}">EDIT</a>

</td>


<td>

<a style="color: white" class="btn btn-danger" href="{{url('delete_upload_user_management',$product->id)}}">DELETE</a>

</td>
                             
                </tr>
                        
                    </tbody>
                    @endforeach
                    </table>
                    </div>
                    </form>

                     
                    
                    
                    </div>
                     
                     
                </div>
             
                <!--User Management Table end-->
            </div>




            
        </main>




        
        <!--Main end-->

    </div>
  
    @include('admin.script')
</body>

</html>
