<div class="bg-white h-100 p-4 py-3 history depositHistory">
                            <p class="widgetTitle">Deposit History</p>

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

        <ul class="list-unstyled text-uppercase w-100 hisTable dhTable">
                                <li class="bg-transparent d-flex p-2 dhTitle">
                                    <span class="d-inline-block">Id</span>
                                    <span class="d-inline-block date">Date &amp; time</span>
                                    <span class="d-inline-block">Amount</span>
                                    <span class="d-inline-block text-end">Screenshot</span>
                                </li>

                                @foreach($data as $product)
            
            <li class="d-flex my-2 px-2 py-3 singleDHistory">

            <span class="id">{{$product->id}}</span>
                 
            <span>{{$product->created_at}}</span>
                <span>{{$product->deposit_amount}}</span>
                 
            <span class="text-end">
            <img height="100" width="100" src="/depositimage/{{$product->image}}">

            </span>

               
                </li>
            
             
            @endforeach
            </ul>
                        </div>