<form action="withdraw_funds" method="get"> 

<div class="px-0 py-3 fundCalculator">
                            <div class="row w-100 m-0">

                                <!--Calculator title start-->
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-2">
                                    <div class="text-center text-sm-start calcTitle">
                                         <button type="submit"  style="background-color: transparent;border: none;"> <img src="img/dashboard//calculator.png" alt="Calculator">  

                                        <p class="d-inline-block ps-2 ms-1" style="color: white;">Fund Calculator</p></button>
                                    </div>
                                </div>
                                <!--Calculator title end-->
                            
                                <!--Amount in USD start-->
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-2 my-2 my-sm-0 amountInput">
                                    <p class="mb-1 text-uppercase">Amount in usd</p>

                                    <div class="input-group">
                                        <div class="input-group-text px-2 py-1 icon">
                                            <img src="img/dashboard/billWhite.svg">
                                            
                                        </div>

                                        <input id="fundUSD" type="text" class="form-control px-2 py-1"  value="{{0}}" name="number">
                                         
                                    </div>
                                </div>
                                <!--Amount in USD end-->
                                 
                                <!--Amount in BTC start-->
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-2 my-2 my-sm-0 amountInput">
                                    <p class="mb-1 text-uppercase">Amount in btc</p>
                                    <form action="" method="get"> 
                                    <div class="input-group">
                                        <div class="input-group-text px-2 py-1 icon">
                                            <img src="img/dashboard/btcWhite.svg">
                                        </div>

                                        <input id="fundBTC" type="text" class="form-control px-2 py-1" placeholder="Result" value="{{$sum}}" readonly>
                                    </div>
                                    </form>
                                </div>
                                <!--Amount in BTC end-->

                                 
                            </div>
                        </div>
</form>