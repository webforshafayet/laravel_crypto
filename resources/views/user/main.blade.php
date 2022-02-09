<main class="mt-4 ms-auto">
            <!--Spacer-->
            <div class="spacer"></div>
            <!--Spacer-->

            <div class="pageHeading">
                <h2 class="m-0">Dashboard</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <!--Summary section start-->
            <div class="accountSummary">
                <div class="row w-100 m-0">





 
                    <!--Single summary start-->
                    @include('user.main_current_balance')
                    <!--Single summary end-->

                    <!--Single summary start-->
                    @include('user.main_current_profile') 
                    <!--Single summary end-->

                    <!--Single summary start-->
                    @include('user.main_last_withdrawl') 
                    <!--Single summary end-->

                    <!--Single summary start-->
                    @include('user.main_last_deposit') 
                    <!--Single summary end-->

                    <!--Single summary start-->
                    @include('user.main_qpt_annuity_balance') 
                    <!--Single summary end-->
                    @include('user.main_qpt_current_profit') 
                    <!--Single summary start-->
                    @include('user.main_cash_benifit_balance') 
                    <!--Single summary end-->

                    <!--Single summary start-->
                    
                    <!--Single summary end-->
               

                </div>
            </div>
            <!--Summary section end-->
            
            <!--Statistics section start-->
            <div class="statics">
                <div class="row w-100 m-0">

                    <!--Overview column start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 px-1 py-2">
                        <div class="bg-white p-3 h-100 singleStat overviewWrap">
                            <h4 class="statTitle">Overview</h4>

                            <!--Overview table start-->
                            <table class="w-100 overviewTable">
                                <thead>
                                    <tr class="position-relative dropdownContainer">
                                        <th class="firstTh"></th>
                                        <th class="lastTh"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="position-relative">
                                        <td class="d-none">Comodities</td>
                                        <td class="d-none">This month</td>

                                        <td class="text-uppercase ps-2 py-2">
                                            <p class="m-0 fw-bold">Es1!</p>
                                            <p class="m-0 overviewSub">E-Mini s&amp;p</p>
                                        </td>
    
                                        <td class="py-2 amount">3762.25<sup>E</sup></td>
    
                                        <td class="text-danger pe-2 py-2 text-end">
                                            <p class="m-0 fw-bold">-0.76%</p>
                                            <p class="m-0">-29.00</p>
                                        </td>
                                    </tr>
    
                                    <tr class="position-relative">
                                        <td class="d-none">Filter 2</td>
                                        <td class="d-none">Last month</td>

                                        <td class="text-uppercase ps-2 py-2">
                                            <p class="m-0 fw-bold">Es1!</p>
                                            <p class="m-0 overviewSub">E-Mini s&amp;p</p>
                                        </td>
    
                                        <td class="py-2 amount">3762.25<sup>E</sup></td>
    
                                        <td class="text-danger pe-2 py-2 text-end">
                                            <p class="m-0 fw-bold">-0.76%</p>
                                            <p class="m-0">-29.00</p>
                                        </td>
                                    </tr>
    
                                    <tr class="position-relative">
                                        <td class="d-none">Comodities</td>
                                        <td class="d-none">This month</td>

                                        <td class="text-uppercase ps-2 py-2">
                                            <p class="m-0 fw-bold">Es1!</p>
                                            <p class="m-0 overviewSub">E-Mini s&amp;p</p>
                                        </td>
    
                                        <td class="py-2 amount">3762.25<sup>E</sup></td>
    
                                        <td class="text-danger pe-2 py-2 text-end">
                                            <p class="m-0 fw-bold">-0.76%</p>
                                            <p class="m-0">-29.00</p>
                                        </td>
                                    </tr>
    
                                    <tr class="position-relative">
                                        <td class="d-none">Filter3</td>
                                        <td class="d-none">This month</td>

                                        <td class="text-uppercase ps-2 py-2">
                                            <p class="m-0 fw-bold">Es1!</p>
                                            <p class="m-0 overviewSub">E-Mini s&amp;p</p>
                                        </td>
    
                                        <td class="py-2 amount">3762.25<sup>E</sup></td>
    
                                        <td class="text-danger pe-2 py-2 text-end">
                                            <p class="m-0 fw-bold">-0.76%</p>
                                            <p class="m-0">-29.00</p>
                                        </td>
                                    </tr>
    
                                    <tr class="position-relative">
                                        <td class="d-none">Comodities</td>
                                        <td class="d-none">This month</td>

                                        <td class="text-uppercase ps-2 py-2">
                                            <p class="m-0 fw-bold">Es1!</p>
                                            <p class="m-0 overviewSub">E-Mini s&amp;p</p>
                                        </td>
    
                                        <td class="py-2 amount">3762.25<sup>E</sup></td>
    
                                        <td class="text-danger pe-2 py-2 text-end">
                                            <p class="m-0 fw-bold">-0.76%</p>
                                            <p class="m-0">-29.00</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--Overview table end-->
                        </div>
                    </div>
                    <!--Overview column end-->

                    <!--Analytics column start-->
                    <div class="col-xl-5 col-lg-4 col-md-6 col-sm-6 col-xs-12 px-1 py-2">
                        <div class="bg-white p-3 h-100 position-relative singleStat analyticsWrap">
                            <h4 class="statTitle">
                                Analytics
                                <span class="text-uppercase float-end">Es1</span>
                            </h4>

                            <div class="position-absolute w-100 analyticsGraph">
                            </div>
                        </div>
                    </div>
                    <!--Analytics column end-->

                    <!--IP log column start-->
                    <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 col-xs-12 px-1 py-2">
                        <div class="bg-white p-3 singleStat ipLogWrap">
                            <h4 class="statTitle">IP Log</h4>

                            <ul class="list-unstyled text-uppercase w-100 ipLogTable">
                                <li class="bg-transparent logTitle">
                                    <span class="d-inline-block">Date/time</span>
                                    <span class="d-inline-block text-end">IP Address</span>
                                </li>

                                <li class="d-flex my-2 p-2">
                                    <span>
                                        <p class="m-0">2021-01-12</p>
                                        <p class="m-0 time">22:26:05 gmt(+1)</p>
                                    </span>
                                    
                                    <span class="text-end ipAddress">103.217.111.167</span>
                                </li>

                                <li class="d-flex my-2 p-2">
                                    <span>
                                        <p class="m-0">2021-01-12</p>
                                        <p class="m-0 time">22:26:05 gmt(+1)</p>
                                    </span>
                                    
                                    <span class="text-end ipAddress">103.217.111.167</span>
                                </li>

                                <li class="d-flex my-2 p-2">
                                    <span>
                                        <p class="m-0">2021-01-12</p>
                                        <p class="m-0 time">22:26:05 gmt(+1)</p>
                                    </span>
                                    
                                    <span class="text-end ipAddress">103.217.111.167</span>
                                </li>

                                <li class="d-flex my-2 p-2">
                                    <span>
                                        <p class="m-0">2021-01-12</p>
                                        <p class="m-0 time">22:26:05 gmt(+1)</p>
                                    </span>
                                    
                                    <span class="text-end ipAddress">103.217.111.167</span>
                                </li>

                                <li class="d-flex my-2 p-2">
                                    <span>
                                        <p class="m-0">2021-01-12</p>
                                        <p class="m-0 time">22:26:05 gmt(+1)</p>
                                    </span>
                                    
                                    <span class="text-end ipAddress">103.217.111.167</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--IP log column end-->

                </div>
            </div>
            <!--Statistics section end-->
        </main>