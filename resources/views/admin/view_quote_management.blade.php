


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
                <h2 class="m-0">Edit Quote Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
               
            </div>

            

            @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}</div>

            @endif

                <form action="{{url('upload_quote_management',$data->id)}}" method="post" enctype="multipart/form-data"> 
                @csrf


            <table> 
                
 


                <!-- <td>
                <select name="verification" class="form-control" >
                            <option value="VERIFIED">VERIFIED</option>
                            <option value="UNVERIFIED">UNVERIFIED</option>
                            
                        </select>
                </td> -->


                <div class="mb-3">
  
  <!-- <p  align="right"> <a style="color: white" class="btn btn-info" href="{{url('view_transaction_user_management',$data->id)}}">TRANSASCTION HISTORY</a></p> -->
   
   
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ADDRESS</label>
  <input type="text"  name="address"   class="form-control" id="exampleFormControlInput1"  value="{{$data->address}}"  >
</div>




                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">STATE</label>
  <input type="text" name="state"  class="form-control" id="exampleFormControlInput1"   value="{{$data->state}}"  >
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">CITY</label>
  <input type="text"  name="city"    class="form-control" id="exampleFormControlInput1"  value="{{$data->city}}">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">DOB</label>
  <input type="date"  name="date"    class="form-control" id="exampleFormControlInput1"  value="{{$data->date}}">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">SEX</label>
  <input type="text"  name="sex"    class="form-control" id="exampleFormControlInput1"  value="{{$data->sex}}" readonly>
</div>


<div class="mb-3">
 
  
  <select class="custom-select" name="sex">
 
  <option >Choose an option</option>
  <option selected>Male</option>
         <option>Female</option>
</select>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">SUM AMOUNT</label>
  <input type="text"  name="sum"    class="form-control" id="exampleFormControlInput1"  value="{{$data->sum}}">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">FREQUENT DEPOSIT</label>
  <input type="text"  name="frequent_deposit"    class="form-control" id="exampleFormControlInput1"  value="{{$data->frequent_deposit}}">
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">COVER DURATION(YR)</label>
  <input type="text"  name="select_cover_duration"   class="form-control" id="exampleFormControlInput1"  value="{{$data->select_cover_duration}}">
</div>

<div class="mb-3">
 
  
  <select class="custom-select" name="select_cover_duration">
 
  <option >Choose an option</option>
   <option selected>1 Month</option>
                                <option >3 Months</option>
                                <option>6 Months</option>
                                <option>9 Months</option>
                                <option>12 Months</option>
</select>
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