<div class="col-xl-6 col-sm-12 col-xs-12 p-1">
                        <div class="bg-white h-100 px-4 py-3 overflow-hidden singlePS">
                            <p class="widgetTitle">Password Change</p>

                            @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                

                            <form action="{{url('profile_pass_update')}}" method="post"> 
                            {{ csrf_field() }}
                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/key.svg">
                                        New Password
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="password" placeholder="Enter New Password" class="form-control" name="password" value="{{$user->password}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-5 col-form-label">
                                        <img class="me-1" src="img/dashboard/key.svg">
                                        Confirm Password
                                    </label>
                                    <div class="col-sm-7">
                                    <input type="password"S
                                    placeholder="Confirm Password"
                                    class="form-control" name="password">
                                    </div>
                                </div>

                                <button type="submit" class="btn text-white float-end">Save Changes</button>
                            </form>
                        </div>
                    </div>