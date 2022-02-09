 
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
                <h2 class="m-0">Beneficiary Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="transationHistoryContents overflow-auto userMngmtWrap">
                <!--Quote Management Table start-->
                <div class="bg-white position-relative h-100 p-2 p-lg-4 mb-4 mb-sm-0 history overflow-auto transationHistory userMngmtTbl">
                    <div class="d-flex justify-content-between w-100 mb-4 dateRange">
                        <select id="locationFilter" class="rounded">
                            <option value="">Sort By Percentage</option>
                            <option value="asc">Ascending</option>
                            <option value="desc">Descending</option>
                        </select>
                    </div>

                    <a class="position-absolute px-2 pt-1 rounded text-white text-decoration-none export" href="{{ url('/ben_dynamic_pdf/pdf') }}">  
                        <img src="admin/img/export.png" class="me-1">
                        Export
                    </a>

                     




                    <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        <th scope="col">RETIREE NAME</th>
                        <th scope="col"> BENEFICIARY NAME</th>
                            <th scope="col">RELATION WITH BENEFACTOR</th>
                            <th scope="col">BENEFICIARY NUMBER</th>
                            <th scope="col">BENEFICIARY PERCENTAGE</th>
                            
                </tr>
                    </thead>
                    @foreach($data as $product)
                    <tbody>
                        <tr>
                        <td>{{$product->name }}</td>
                        <td>{{$product->ben_name}}</td>
                            <td>{{$product->ben_relationship}}</td> 
                            <td>{{$product->ben_number}}</td>
                            <td>{{$product->ben_percentage}}</td>
                            <td>

<a style="color: white" class="btn btn-info" href="{{url('view_beneficiary_management',$product->id)}}">EDIT</a>

</td>
                             
                             
                </tr>
                        
                    </tbody>
                    @endforeach
                    </table>
                    </div>












                </div>
                <!--Quote Management Table end-->
            </div>
        </main>
        <!--Main end-->
    </div>

    <!-- Beneficiary Management Modal -->
    <div class="modal fade" id="beneficiaryMngmtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl dark-blue-bg text-white">
            <div class="modal-content light-blue-bg px-3 py-2 square-radius">
                <!-- Modal Header -->
                <div
                    class="modal-header px-0 d-flex flex-column flex-sm-row align-items-center justify-content-between blue-border-bottom pb-2">
                    <div>
                        <h5 class="modal-title fs-5 name"></h5>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="mt-3">
                            <button type="button" class="btn-close pe-0" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal Body -->
                <div class="modal-body px-0 pb-2">
                    <div class="row g-4 blue-border-bottom">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">Retiree Name</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input retireeName"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">Beneficiary Name</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input benName"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">Relation With Benefactor</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input relWithBenefactor"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 pt-3">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">Beneficiary Number</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input benNum"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Beneficiary Percentage</small>
                            <div class="position-relative input-group mb-3">
                                <div class="position-absolute rangeProgress"></div>
                                <input type="range" min="0" max="100" class="d-none me-2 mt-3 range">
                                <p class="fs-6 mt-1 mb-0 rangeVal benPercentage"></p>
                                <button class="btn ms-auto input-group-text bg-transparent border-0 edit-btn hasRange">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div id="save" class="modal-footer border-0 px-0 d-flex justify-content-center d-none justify-content-md-end">
                    <button type="button" class="btn btn-success green-bg border-0 small-text btn-lg small-radius">
                        Save Change
                    </button>
                </div>
            </div>
        </div>
    </div>
        
        <!--Main end-->

    </div>
  
    @include('admin.script')
</body>

</html>
