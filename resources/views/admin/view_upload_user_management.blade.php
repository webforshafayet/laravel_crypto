


<!DOCTYPE html>
<html lang="en">

<head>
     
<base href="/public">
@include('admin.css')  
</head>

<body>

    <!--Header start-->

    @include('admin.header')
    
    <!--Header start-->



    <div class="mx-auto px-3 maxContainer">

        <!--Nav start-->
        @include('admin.nav')
        <!--Nav end-->
    
        <!--Main start-->
        

        <main class="mt-4 ms-auto">
            <!--Spacer-->
            <div class="spacer">
                
            </div>
            <!--Spacer-->

            <div class="pageHeading">
                <h2 class="m-0">verification panel</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
               
            </div>

            

            @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}</div>

            @endif

                <form action="{{url('upload_user_management',$data->id)}}" method="post" enctype="multipart/form-data"> 
                @csrf


            <table> 
                <td class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload front photo</label>
                <img height="300"  width="300"  src="/verifiedimage/{{$data->Upload_front_photo_path}}" alt="">
                </td>
                 

                <td class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload back photo</label>
                <img height="300"  width="300"  src="/verifiedimage1/{{$data->Upload_back_photo_path}}" alt="">
                </td> 

                <td class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload selfie photo</label>
                <img height="300"  width="300"  src="/verifiedimage2/{{$data->Upload_selfie_photo_path}}" alt="">
                </td> 


                <td>
                <select name="verification" class="form-control" >
                            <option value="VERIFIED">VERIFIED</option>
                            <option value="UNVERIFIED">UNVERIFIED</option>
                            
                        </select>
                </td>


                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">{{$data->name}}</label> <br>
  <label for="exampleFormControlInput1" class="form-label">CLIENT ID::{{$data->id}}</label>
  <p  align="right"> <a style="color: white" class="btn btn-info" href="{{url('view_transaction_user_management',$data->id)}}">TRANSASCTION HISTORY</a></p>
   
   
</div>


 



                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="{{$data->email}}" readonly>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
  <input type="text"    class="form-control" id="exampleFormControlInput1" placeholder="{{$data->contact_number}}" readonly>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Country</label>
  <input type="text"    class="form-control" id="exampleFormControlInput1" placeholder="{{$data->country}}" readonly>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Plan</label>
  <input type="text"   class="form-control" id="exampleFormControlInput1" placeholder="{{$data->choose_package}}" readonly>
</div>


 


 

                <td>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
                </td>

                </table>
               
</div>


              

                 
                        
                
            </form>
             

        
        </div>
        </main>
        <!--Main end-->

    </div>
  
    @include('admin.script')
</body>

</html>