 

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
                <h2 class="m-0">Quote Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="transationHistoryContents overflow-auto userMngmtWrap">
                <!--Quote Management Table start-->
                <div class="bg-white position-relative h-100 p-2 p-lg-4 mb-4 mb-sm-0 history overflow-auto transationHistory userMngmtTbl">
                    <div class="d-flex justify-content-between w-100 mb-4 dateRange">
                        <div class="singleInputWrap">
                            <div class="input-group">
                                <div class="input-group-text icon">
                                    <img src="img/dashboard/calendar.svg">
                                </div>

                                <input id="startDate" type="text" class="form-control" placeholder="From.." readonly>
                            </div>
                        </div>

                        <div class="singleInputWrap">
                            <div class="input-group">
                                <div class="input-group-text icon">
                                    <img src="img/dashboard/calendar.svg">
                                </div>

                                <input id="endDate" type="text" class="form-control" placeholder="To.." readonly>
                            </div>
                        </div>

                        <select id="locationFilter" class="rounded">
                            <option value="">Sort By Amount</option>
                            <option value="asc">Ascending</option>
                            <option value="desc">Descending</option>
                        </select>
                    </div>

                    <a class="position-absolute px-2 pt-1 rounded text-white text-decoration-none export" href="{{ url('/quote_dynamic_pdf/pdf') }}"> 
                        <img src="admin/img/export.png" class="me-1">
                        Export
                    </a>

                    <!-- <ul class="list-unstyled w-100 hisTable transHisTable umData quoteMan">

                    </ul>

                    <div class="pagination">
                    </div> -->








                    <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        <th scope="col">NAME</th>
                        <th scope="col"> ADDRESS</th>
                            <th scope="col">STATE</th>
                            <th scope="col">CITY</th>
                            <th scope="col">DOB</th>
                            <th scope="col">SEX</th>
                            <th scope="col">SUM AMOUNT</th> 
                            <th scope="col">FREQUENT DEPOSIT</th>
                            <th scope="col">COVER DURATION(YR)</th> 
                </tr>
                    </thead>
                    @foreach($data as $product)
                    <tbody>
                        <tr>
                        <td>{{$product->name }}</td>
                        <td>{{$product->address}}</td>
                            <td>{{$product->state}}</td> 
                            <td>{{$product->city}}</td>
                            <td>{{$product->date}}</td>
                            <td>{{$product->sex}}</td>
                            <td>{{$product->sum}}</td>
                            <td>{{$product->frequent_deposit}}</td>
                            <td>{{$product->select_cover_duration}}</td>
                            <td>

<a style="color: white" class="btn btn-info" href="{{url('view_quote_management',$product->id)}}">EDIT</a>

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

    <!-- Quote Management Modal -->
    <div class="modal fade" id="quoteMngmtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">Address</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input address"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">State</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input state"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">City</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input city"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">DOB</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input dob"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <small class="d-block silver-text more-small-text fst-italic">Sex</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input sex"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Sum Amount</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="text"
                                    class="form-control fs-6 text-white border-0 edit-input sumAmount"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Frequent Deposit</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="text"
                                    class="form-control fs-6 text-white border-0 edit-input frequentDeposit"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Cover Duration(YR)</small>
                            <div class="position-relative input-group mb-3">
                                <div class="position-absolute rangeProgress"></div>
                                <input type="range" min="0" max="100" class="d-none me-2 mt-3 range">
                                <p class="fs-6 mt-1 mb-0 rangeVal coverDuration"></p>
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
