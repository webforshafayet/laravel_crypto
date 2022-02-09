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
                <h2 class="m-0">Transaction History</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="transationHistoryContents">
                <!--Transaction history start-->
                
             </div>


             




             <div class="bg-white h-100 px-2 px-sm-4 px-lg-2 px-xl-4 py-3 history depositHistory">
                            <p class="widgetTitle">Transiction History</p>

                            <div class="d-flex justify-content-between mb-4 dateRange">
                                <div class="pe-1">
                                    <div class="input-group">
                                        <div class="input-group-text icon">
                                            <img src="img/dashboard/calendar.svg">
                                        </div>
        
                                        <input id="startDate" type="text" class="form-control bg-white" placeholder="Start Date" readonly>
                                    </div>
                                </div>

                                <div class="ps-1">
                                    <div class="input-group">
                                        <div class="input-group-text icon">
                                            <img src="img/dashboard/calendar.svg">
                                        </div>
        
                                        <input id="endDate" type="text" class="form-control bg-white" placeholder="End Date" readonly>
                                    </div>
                                </div>
                            </div>
                            
                          


                <form action="{{url('add_transiction_history')}}" method="post" class="contat-input checkout-form-input" >
                     @csrf


                        <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        
                         
                         <!-- <th scope="col">USER NAME</th> -->
                         <th scope="col"> DATE</th>
                            <th scope="col">CURR BALANCE </th>
                            <th scope="col">CURR PROFIT </th>
                            <th scope="col">LAST WITHDRAW</th>
                            <th scope="col">LAST DEPOSIT</th>
                            <th scope="col">QPT ANNUITY BAL</th>
                            <th scope="col">QPT CURR PROFIT</th>
                            <th scope="col">CASH BENIFIT BALANCE</th>
                            <!-- <th scope="col">CASH BENEFIT BAL</th> -->

                            
                      </tr>
                      <td>{{$user->updated_at}}</td>
                      <td><input type="text" name="current_balance" value="{{$current_balance?? '0'}}" readonly></td>
                      <td><input type="text" name="current_profit" value="{{$new_data->current_profit ?? '0'}}" readonly></td>
                      <td><input type="text" name="last_withdraw" value="{{$last_withdraw->amount ?? '0'}}" readonly></td>
                      <td><input type="text" name="last_deposit" value="{{$last_deposit->deposit_amount ?? '0'}}" readonly></td>
                      <td><input type="text" name="qpt_annuity_balance" value="{{$new_data->qpt_annuity_balance?? '0'}}" readonly></td>
                      <td><input type="text" name="qpt_current_profit" value="{{$new_data->qpt_current_profit?? '0'}}" readonly></td>
                      <td><input type="text" name="qpt_current_profit" value="{{$new_data->cash_benifit_balance	?? '0'}}" readonly></td>
                       
                    </thead>
                    
                    </table>
                    </div>
 

                   
                    <center>  <button type="submit" class="btn btn-dark">UPDATE YOUR HISTORYLIST <p class="text-warning">******Must update your transaction history every time before every transaction******</p></button> 
                    </center> </form>










               







                <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        
                        <!-- <th scope="col"> DATE</th>
                        <th scope="col">CURR BALANCE </th>
                            <th scope="col">CURR PROFIT </th>
                            <th scope="col">LAST WITHDRAW</th>
                            <th scope="col">LAST DEPOSIT</th>
                            <th scope="col">QPT ANNUITY BAL</th>
                            <th scope="col">QPT CURR PROFIT</th> -->
                            
                </tr>
                    </thead>
                    @foreach($data as $product)
                    <tbody>
                        <tr>
                         
                        <td><p><strong>DATE</strong></p>{{$product->created_at}}</td>
                        <td><p><strong>CURR BALANCE</strong></p>${{$product->current_balance}}</td>
                        <td><p><strong>CURR PROFIT</strong></p>${{$product->current_profit}}</td>
                        <td><p><strong>LAST WITHDRAW</strong></p>${{$product->last_withdraw}}</td>
                        <td><p><strong>LAST DEPOSIT</strong></p>${{$product->last_deposit}}</td>
                        <td><p><strong>QPT ANNUITY BAL</strong></p>{{$product->qpt_annuity_balance}}</td>
                        <td><p><strong>QPT CURR PROFIT</strong></p>{{$product->qpt_current_profit}}</td>
                             
                             
                </tr>
                        
                    </tbody>
                    @endforeach
                    </table>
                    </div>























        </div>
        </main>
        <!--Main end-->

    </div>
  
  <!--Bootstrap js-->
  @include('user.script')