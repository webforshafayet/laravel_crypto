<div class="col-xl-6 col-sm-12 col-xs-12 p-1">
                        <div class="bg-white h-100 px-4 py-3 overflow-hidden singlePS">
                            <p class="widgetTitle">Profile Picture</p>
                            

                            @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                

                        <form action="{{url('profile_picture_update')}}" method="post" enctype="multipart/form-data"> 
                         
                        @csrf
                                <div class="row">
                                    <div class="col-12 newPic">
                                    <img class="w-100 proPic" src="/profileimage/{{$user->profile_photo_path}}">    
                                    <!-- profile_photo_path -->
                                        <div class="d-inline-block position-relative my-2 my-sm-0 ms-sm-3">
                                            <div class="customFileField">




                                                <p> <input type="file" name="file" class=""></p>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>

                                

                                <button type="submit" class="btn text-white float-end">Save Changes</button>
                            </form>
                        </div>
                    </div>
                    