 

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





         <!--Main start-->
         <main class="mt-4 ms-auto">
            <!--Spacer-->
            <div class="spacer"></div>
            <!--Spacer-->

          

            <div class="pageHeading">
                <h2 class="m-0">Withdraw Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>



            @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif

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

                    <a class="position-absolute px-2 pt-1 rounded text-white text-decoration-none export" href="{{ url('/withdraw_dynamic_pdf/pdf') }}">    
                        <img src="admin/img/export.png" class="me-1">
                        Export
                    </a>

                    <!-- <ul class="list-unstyled w-100 hisTable transHisTable umData withData">

                    </ul>

                    <div class="pagination">
                    </div> -->






                    <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        
                        <tr align="center">
                        <th scope="col">W.ID</th>
                        <th scope="col"> DATE</th>
                            <th scope="col">WITHDRAWAL</th>
                            <th scope="col">EMAIL ADDRESS</th>
                            <th scope="col">CONTACT NUMBER</th>
                            <th scope="col">WALLET ADDRESS</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">AMOUNT</th>
                            <th scope="col">STAKE</th>
                            <th scope="col">PROFIT</th>
                            <th scope="col">ANNUITY PROFIT</th>
                            <th scope="col">RETURN</th>
                            <th scope="col">VERIFICATION</th>
                          
                            <th scope="col" colspan="2">ACTION</th>
                            
                            
                            
                             
                </tr>
                    </thead>
                    @foreach($data as $product)
                    <tbody>
                        <tr>
                        <td>{{$product->user_id }}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->email}}</td>
                        <td>{{$product->contact_number	}}</td>
                        <td>{{$product->wallet_address}}</td>
                        <td>{{$product->address}}</td>                         
                        <td>{{$product->amount}}</td>


                        <td>{{$product->stake ?? '0'}}  </td>
                        <td>{{$product->profit ?? '0'}}</td>
                        <td>{{$product->annuity_profit ?? '0'}}</td>                         
                        <td>{{$product->_return ?? '0'}}</td>
                        <td><span >
                            <!-- {{$product->verification}} -->
                            
                    
                        @if ($product->verification === 'VERIFIED')
                            <span class="btn btn-success">VERIFIED</span>
                        
                        @else
                            <span class="btn btn-warning">UNVERIFIED</span>
                        @endif 
                               
                    
                    
                    
                    
                    
                    </span></td>
                        <td>

<a style="color: white" class="btn btn-info" href="{{url('view_withdraw_management',$product->id)}}">EDIT</a>

</td>


<td>

<a style="color: white" class="btn btn-danger" href="{{url('delete_withdraw_management',$product->id)}}">DELETE</a>

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

    <!-- Withdraw Modal -->
    <div class="modal fade" id="withdrawModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 blue-border-bottom">
                        <div class="col">
                            <small class="silver-text more-small-text fst-italic">DATE</small>
                            <div class="input-group mb-3">
                                <input type="text"
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input date"
                                    disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col text-right">
                            <small class="silver-text more-small-text fst-italic">
                                DEPOSITOR
                            </small>
                            <p class="fs-6 name"></p>
                        </div>

                        <div class="col">
                            <small class="silver-text more-small-text fst-italic">EMAIL ADDRESS</small>
                            <p class="fs-6 email"></p>
                        </div>

                        <div class="col text-right">
                            <small class="silver-text more-small-text fst-italic">WALLET ADDRESS</small>
                            <div class="input-group mb-3">
                                <input type="text"
                                    class="form-control fs-6 rounded text-white border-0 px-0 edit-input wallAdd"
                                    disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-2 pt-3 sm-center">
                        <div class="col text-right">
                            <small class="silver-text more-small-text fst-italic">Stake</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input stake withNum"
                                     disabled>
                            </div>
                        </div>

                        <div class="col text-right">
                            <small class="silver-text more-small-text fst-italic">Profit</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input profit withNum"
                                     disabled>
                            </div>
                        </div>

                        <div class="col text-right">
                            <small class="silver-text more-small-text fst-italic">Annuity Profit</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input annuity withNum"
                                     disabled>
                                <button class="btn input-group-text bg-transparent border-0 edit-btn ms-auto mulAmount">
                                    <i class="fas fa-pen blue-text"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col text-right">
                            <small class="silver-text more-small-text fst-italic">Return</small>
                            <div class="position-relative input-group mb-3">
                                <span class="fs-6 position-absolute dolar">$</span>
                                <input type="number"
                                    class="form-control fs-6 text-white border-0 edit-input return withNum"
                                     disabled>
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
