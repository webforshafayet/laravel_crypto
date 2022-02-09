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
                <h2 class="m-0">Deposits Funds</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="depositFundsContents">
                <div class="row w-100 m-0">

                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 p-0">
                        <!--Fund calculator start-->
                        @include('user.deposit_bitcoin_calculator')
                        <!--Fund calculator end-->

                        <!--Make deposit start-->

                        @if(session()->has('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <button type="button" class="close" data-dismiss="alert">X</button>
{{session()->get('message')}}</div>

@endif


                        <div class="bg-white px-4 py-3 mt-3 overflow-hidden depWit makeDeposit">
                            <form id="depositForm" action="{{url('upload_deposits_funds')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <p class="text-center text-sm-start widgetTitle">Make A Deposit</p>
    
                                <div class="overflow-hidden">
                                    <div class="float-sm-start mx-auto text-center qrWrap">
                                        <img class="w-100" src="img/dashboard/qr.png">
                                    </div>
        
                                    <div class="d-sm-inline-block ps-sm-4 depositInputs">
                                        <p class="text-uppercase mb-1 label">Copy wallet address</p>
                                        <div class="input-group mb-3">
                                            <div id="copyWalAdd" class="input-group-text text-center icon">
                                                <img class="m-auto" src="img/dashboard/copy.png">
                                            </div>
        
                                            <input id="walAdd" type="text" class="form-control px-2 py-1" name="wallet_address" placeholder="Wallet address"  value="xxxxxxx"  readonly>
                                        </div>
        
                                        <p class="text-uppercase mb-1 label">Amount in usd</p>
                                        <div class="input-group">
                                            <div class="input-group-text text-center icon">
                                                <img class="m-auto" src="img/dashboard/bill.svg">
                                            </div>
        
                                            <input type="text" class="form-control px-2 py-1" name="deposit_amount" placeholder="Enter amount" required>
                                        </div>
                                    </div>
                                </div>
    
                                <p class="text-uppercase mb-1 mt-4 label">Upload Screenshot of payment</p>
                                <div class="float-sm-start w-100 position-relative fileFieldWrap">
                                    <div class="rounded border overflow-hidden mx-auto mx-lg-0 text-start customFileField">
                                        <div class="d-inline-block text-center icon">
                                            <img src="img/dashboard/file.png">
                                        </div>

                                        <div class="d-inline-block paymentScreenshot">
                                            <p class="py-2 ps-2 d-inline-block m-0"> Upload Here</p>
                                            <input type="file" name="file" required>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- <input id="paymentScreenshot" type="file" accept=".jpg, .jpeg, .png" class="d-none">   -->

                                <button class="btn mt-3 mt-sm-0 text-white conf" type="submit">Confirm Payment</button>
                            </form>
                        </div>
                        <!--Make deposit end-->
                    </div>

                    
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 p-0 ps-xl-3 mt-3 mt-xl-0">
                        <!--Deposit history start-->
                        @include('user.deposits_funds_history')
                        <!--Deposit history end-->
                    </div>
                </div>
            </div>
        </main>
        <!--Main end-->

    </div>
  
  <!--Bootstrap js-->
  @include('user.script')