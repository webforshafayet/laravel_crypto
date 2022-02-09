


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
                <h2 class="m-0">Edit Deposits Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
               
            </div>

            

            @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}</div>

            @endif

                <form action="{{url('upload_deposits_management',$data->id)}}" method="post" enctype="multipart/form-data"> 
                @csrf


            <table> 
                

                <td class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload selfie photo</label>
                <img height="300"  width="300"  src="/depositimage/{{$data->image}}" alt="">
                </td> 


                <td>
                <select name="verification" class="form-control" >
                            <option value="VERIFIED">VERIFIED</option>
                            <option value="UNVERIFIED">UNVERIFIED</option>
                            
                        </select>
                </td>


                <div class="mb-3">
  
  <!-- <p  align="right"> <a style="color: white" class="btn btn-info" href="{{url('view_transaction_user_management',$data->id)}}">TRANSASCTION HISTORY</a></p> -->
   
   
</div>


 



                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Wallet Address</label>
  <input type="text" name="wallet_address"  class="form-control" id="exampleFormControlInput1"   value="{{$data->wallet_address}}">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Deposit Amount</label>
  <input type="text"  name="deposit_amount"    class="form-control" id="exampleFormControlInput1"  value="{{$data->deposit_amount}}">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Deposit Amount</label>
  <input type="text"  name="updated_at"   class="form-control" id="exampleFormControlInput1"  value="{{$data->updated_at}}" readonly>
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">VERIFICATION</label>
  <input type="text" name="verification"  class="form-control" id="exampleFormControlInput1"   value="{{$data->verification}}" readonly>
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