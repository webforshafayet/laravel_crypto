 

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
                <h2 class="m-0">Finance Management</h2>
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

                    <a class="position-absolute px-2 pt-1 rounded text-white text-decoration-none export" href="{{ url('/finance_dynamic_pdf/pdf') }}">  
                        <img src="admin/img/export.png" class="me-1">
                        Export
                    </a>

                    <!-- <ul class="list-unstyled w-100 hisTable transHisTable umData finMan">

                    </ul>

                    <div class="pagination">
                    </div> -->





                    <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        
                         
                         <th scope="col">USER NAME</th>
                         <th scope="col">EMAIL</th>
                         <th scope="col">ADDRESS</th>
                         <th scope="col"> DATE</th>
                            <th scope="col">CURR BALANCE </th>

                            <th scope="col">CURR PROFIT </th>
                            <th scope="col">LAST WITHDRAW</th>
                            <th scope="col">LAST DEPOSIT</th>
                            <th scope="col">QPT ANNUITY BAL</th>
                            <th scope="col">QPT CURR PROFIT</th>
                            <th scope="col">CASH BENEFIT BAL</th>
                            <th scope="col">ACTION</th>
                          

                            
                </tr>
                    </thead>



                    @foreach($data as $product)
                    <tbody>
                        <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->email}}</td>
                        <td>{{$product->address}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->current_balance}}</td>

                        <td>{{$product->current_profit}}</td>
                        <td>{{$product->last_withdraw}}</td>
                        <td>{{$product->last_deposit}}</td>
                        
                        <td>{{$product->qpt_annuity_balance}}</td>
                        <td>{{$product->qpt_current_profit}}</td>
                        <td>{{$product->cash_benifit_balance}}</td>
                     
                        <td>

<a style="color: white" class="btn btn-info" href="{{url('view_finance_management',$product->id)}}">EDIT</a>

</td>
                             
                             
                </tr>
                        
                    </tbody>
                    @endforeach
                    
                    </table>
                    </div>










                </div>
                <!--User Management Table end-->
            </div>
        </main>
        <!--Main end-->

    </div>


    <!-- Finance Modal -->
    <div class="modal fade" id="financeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl dark-blue-bg text-white">
            <div class="modal-content light-blue-bg px-3 py-2 square-radius">
                <!-- Modal Header -->
                <div
                    class="modal-header px-0 d-flex flex-column flex-sm-row align-items-center justify-content-between blue-border-bottom pb-2">
                    <div>
                        <h5 class="modal-title fs-5 uId"></h5>
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
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">
                                Username
                            </small>
                            <p class="fs-6 py-2 name"></p>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">DATE</small>
                            <div class="input-group mb-3">
                                <input type="text" 
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input date"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-3 sm-center">
                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Current Balance</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input currBal"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Current Profit</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input withNum currProfit"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Last Withdraw</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input withNum lastWithdraw"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Last Deposit</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input withNum lastDeposit"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">QPT Annuity Balance</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input withNum qptAnnuityBal"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">QPT Current Profit</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input withNum qptCurrProfit"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="py-3 py-sm-0 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <small class="d-block silver-text more-small-text fst-italic">Cash Benefit Balance</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input withNum cashBenefitBal"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
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
