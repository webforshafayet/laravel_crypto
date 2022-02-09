


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
                <h2 class="m-0">Edit Finance Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
               
            </div>

            

            @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}</div>

            @endif

                <form action="{{url('upload_finance_management',$data->id)}}" method="post" enctype="multipart/form-data"> 
                @csrf


            <table> 
                
 


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
  <label for="exampleFormControlInput1" class="form-label">DATE</label>
  <input type="text"  name="updated_at"   class="form-control" id="exampleFormControlInput1"  value="{{$data->updated_at}}" readonly>
</div>




                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">CURR BALANCE</label>
  <input type="text" name="current_balance"  class="form-control" id="exampleFormControlInput1"   value="{{$data->current_balance}}" readonly>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">CURR PROFIT</label>
  <input type="text"  name="current_profit"    class="form-control" id="exampleFormControlInput1"  value="{{$data->current_profit}}">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">LAST WITHDRAW</label>
  <input type="text"  name="last_withdraw"    class="form-control" id="exampleFormControlInput1"  value="{{$data->last_withdraw}}">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">LAST DEPOSIT</label>
  <input type="text"  name="last_deposit"    class="form-control" id="exampleFormControlInput1"  value="{{$data->last_deposit}}">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">QPT ANNUITY BAL</label>
  <input type="text"  name="qpt_annuity_balance"    class="form-control" id="exampleFormControlInput1"  value="{{$data->	qpt_annuity_balance}}">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">QPT CURR PROFIT</label>
  <input type="text"  name="qpt_current_profit"    class="form-control" id="exampleFormControlInput1"  value="{{$data->qpt_current_profit}}">
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">CASH BENEFIT BAL</label>
  <input type="text"  name="cash_benifit_balance"   class="form-control" id="exampleFormControlInput1"  value="{{$data->cash_benifit_balance}}">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">VERIFICATION</label>
  <input type="text"  name="verification"   class="form-control" id="exampleFormControlInput1"  value="{{$data->verification}}" readonly>
  
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