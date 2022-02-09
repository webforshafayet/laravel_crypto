


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
                <h2 class="m-0">Edit Beneficiary Management</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
               
            </div>

            

            @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}</div>

            @endif

                <form action="{{url('upload_beneficiary_management',$data->id)}}" method="post" enctype="multipart/form-data"> 
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
  <label for="exampleFormControlInput1" class="form-label">RETIREE NAME</label>
  <input type="text"  name="name"   class="form-control" id="exampleFormControlInput1"  value="{{$data->name}}" readonly>
</div>




                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">BENEFICIARY NAME</label>
  <input type="text" name="ben_name"  class="form-control" id="exampleFormControlInput1"   value="{{$data->ben_name}}">
</div>


<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">RELATION WITH BENEFACTOR</label>
  <input type="text"  name="ben_relationship"    class="form-control" id="exampleFormControlInput1"  value="{{$data->ben_relationship}}">
</div> -->

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">RELATION WITH BENEFACTOR</label>
  
  <select class="custom-select" name="ben_relationship">
  <option selected>Open this select menu</option>
  <option selected>Choose an option</option>
                                                    <option>Mother</option>
                                                    <option>Father</option>
                                                    <option>Brother</option>
                                                    <option>Sister</option>
                                                    <option>Cousin</option>
                                                    <option>Uncle</option>
                                                    <option>Auntie</option>
                                                    <option>Friend</option>
</select>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">BENEFICIARY NUMBER</label>
  <input type="text"  name="ben_number"    class="form-control" id="exampleFormControlInput1"  value="{{$data->ben_number}}">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">BENEFICIARY PERCENTAGE</label>
  <input type="text"  name="ben_percentage"    class="form-control" id="exampleFormControlInput1"  value="{{$data->ben_percentage}}">
</div>


<div class="my-1 px-1 col-12"> 
                                            <input type="range" class="form-range" min="1" max="100"
                                                id="percentageRange" value="1" name="ben_percentage" :value="old('ben_percentage')" required>
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

    <script>
        document.getElementById("percentageRange").addEventListener("click", () => {
            document.getElementById("percentage").innerText = document.getElementById("percentageRange").value;
        });
    </script>
</body>

</html>