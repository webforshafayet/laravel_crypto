<div class="bg-white h-100 px-2 px-sm-4 px-lg-2 px-xl-4 py-3 history depositHistory">
                            <p class="widgetTitle">Withdraw History</p>

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
                            
                            <center>
                            <ul class="list-unstyled text-uppercase w-100 hisTable witTable">
                            <li class="bg-transparent d-flex p-2 dhTitle">
                                    <span class="d-inline-block">Id</span>
                                    <span></span>
                                    <span class="d-inline-block date">Date &amp; time</span>
                                    <span></span>
                                    <span class="d-inline-block">Amount</span>
                                    
                                </li>

                               


                                @foreach($data as $product)
                                
                                <li class="d-flex my-2 px-2 py-3 singleDHistory">

                                <span class="id">{{$product->id}}</span>
                                <span></span>
                                    
                                <span>{{$product->created_at}}</span>
                                <span></span> 
                                <span>{{$product->amount}}</span>
                                    
                                
                                    </li>       
             
                               @endforeach



                            </ul>

                             </center>
                        </div>