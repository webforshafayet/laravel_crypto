<div class="col-xl-6 col-sm-12 col-xs-12 p-1">
                        <div class="bg-white h-100 px-4 py-3 overflow-hidden singlePS">
                            <p class="widgetTitle">Country Information</p>

                            @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                

                 <form action="{{url('profile_contact_update')}}" method="post"> 
                 {{ csrf_field() }}

                             
                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/phone.svg">
                                        Existing Number
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="text" value="{{$user->contact_number}}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/phone.svg">
                                        Enter New Number
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="text"
                                    placeholder="Enter Contact Number" name="contact_number"
                                    class="form-control"  >
                                    </div>
                                </div>

                                <!-- <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/phone.svg">
                                        Re-enter New Number
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="text"
                                    placeholder="Enter Contact Number"
                                    class="form-control">
                                    </div>
                                </div> -->

                                <button type="submit" class="btn text-white float-end">Save Changes</button>
                            </form>
                        </div>
                    </div>