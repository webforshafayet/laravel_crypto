 
<base href="/public">
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
                <h2 class="m-0">User Transaction History</h2>
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

                    <!-- <a class="position-absolute px-2 pt-1 rounded text-white text-decoration-none export" href="{{ url('/finance_dynamic_pdf/pdf') }}">  
                        <img src="admin/img/export.png" class="me-1">
                        Export
                    </a> -->

                    <!-- <ul class="list-unstyled w-100 hisTable transHisTable umData finMan">

                    </ul>

                    <div class="pagination">
                    </div> -->





                    <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        
                         
                         
                          
                         <th scope="col"> DATE</th>
                            <th scope="col">CURR BALANCE </th>

                            <th scope="col">CURR PROFIT </th>
                            <th scope="col">LAST WITHDRAW</th>
                            <th scope="col">LAST DEPOSIT</th>
                            <th scope="col">QPT ANNUITY BAL</th>
                            <th scope="col">QPT CURR PROFIT</th>
                          

                            
                </tr>
                    </thead>



                    @foreach($data as $product)
                    <tbody>
                        <tr>
                         
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->current_balance}}</td>

                          <td>{{$product->current_profit}}</td>
                        <td>{{$product->last_withdraw}}</td>
                        <td>{{$product->last_deposit}}</td>
                        
                        <td>{{$product->qpt_annuity_balance}}</td>
                        <td>{{$product->qpt_current_profit}}</td>
                             
                             
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


   

              
        
        <!--Main end-->

    </div>
  
    @include('admin.script')
</body>

</html>
