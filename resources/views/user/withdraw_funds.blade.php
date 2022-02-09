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
                <h2 class="m-0">Withdraw Funds</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="depositFundsContents">
                <div class="row w-100 m-0">

                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-xs-12 p-0">
                        <!--Fund calculator start-->
                         @include('user.withdraw_bitcoin_calculator')
                        <!--Fund calculator end-->


   

                        <!--Make withdraw start-->
                        <div class="bg-white px-4 py-3 mt-3 overflow-hidden depWit withdrawFund">
                        @if(session()->has('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                            <button type="button" class="close" data-dismiss="alert">X</button>
                        {{session()->get('message')}}</div>

                        @endif


                            <form id="depositForm" action="{{url('upload_withdraw_funds')}}" method="post">
                                @csrf 

                                <p class="text-center text-sm-start widgetTitle">Make A Withdraw</p>

                                <div class="d-inline-block pe-3 me-2 pe-xl-5 me-xl-5 my-3 position-relative balance currentBal">
                                    <h3>${{$current_balance}}</h3>
                                    <p class="text-uppercase mb-1 label">Current balance</p>
                                </div>

                                <div class="d-inline-block my-3 balance">
                                    <h3>$0.00</h3>
                                    <p class="text-uppercase mb-1 label">Remaining balance</p>
                                </div>

                                <div class="d-sm-inline-block depositInputs">
                                    <p class="text-uppercase mb-1 label">wallet address</p>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text text-center icon">
                                            <img class="m-auto" src="img/dashboard/walAdd.png">
                                        </div>
    
                                        <input type="text" name="wallet_address" placeholder="Wallet address"   class="form-control px-2 py-1" value="xxxxxxx"  readonly>
                                    </div>
    
                                    <p class="text-uppercase mb-1 label">Amount in usd</p>
                                    <div class="input-group">
                                        <div class="input-group-text text-center icon">
                                            <img class="m-auto" src="img/dashboard/bill.svg">
                                        </div>
    
                                        <input type="text" class="form-control px-2 py-1" name="amount" placeholder="Enter amount" required>
                                    </div>
                                </div>
    
                                <button class="btn text-white conf witFund" type="submit">Withdraw Fund</button>
                              
                            </form>
                        </div>
                        <!--Make withdraw end-->
                    </div>

                    
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12 p-0 ps-lg-1 ps-xl-3 mt-3 mt-lg-0">
                        <!--Withdraw history start-->
                        @include('user.withdraw_funds_history')
                        <!--Withdraw history end-->
                    </div>
                </div>
            </div>
        </main>

        <!--Main end-->

    </div>
  
  <!--Bootstrap js-->
  @include('user.script')