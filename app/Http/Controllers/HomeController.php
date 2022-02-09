<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\deposit_funds;
use App\Models\transaction_history;
use App\Models\withdraw_funds;
use GuzzleHttp\Client;


class HomeController extends Controller
{



    
    public function admin_login() 
    {
        return view('admin.admin_login');
      
    }




    public function redirect(){
        $usertype=Auth::user()->usertype;
        // $choose_package=Auth::user()->choose_package;
       


        if($usertype =='1')
        {

            
            // $last_withdraw = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)
                                                        
            //                                             ->latest()->first() ;
            $last_withdraw = DB::table('withdraw_funds')->where([
              
                'verification' => 'VERIFIED'     
             ])->latest()->first();
            // $last_deposit = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->latest()->first();
            $last_deposit = DB::table('deposit_funds')->where([
             
            'verification' => 'VERIFIED'     
            ])->latest()->first();




            // $last_withdraw = DB::table('withdraw_funds')->latest()->first() ;
            // $last_deposit = DB::table('deposit_funds')->latest()->first();

            $deposit_total = DB::table('deposit_funds')->where([
                 
                'verification' => 'VERIFIED'     
             ])->sum('deposit_amount');
    
    
    
    
                // $withdraw_total = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->sum('amount');
                $withdraw_total = DB::table('withdraw_funds')->where([
                    
                    'verification' => 'VERIFIED'     
                 ])->sum('amount');







            


            // $deposit_total = DB::table('deposit_funds')->sum('deposit_amount');
            // $withdraw_total = DB::table('withdraw_funds')->sum('amount');
            $current_profit = DB::table('transaction_histories')->sum('current_profit');





            
           $current_profit = DB::table('transaction_histories')->where([
            
            'verification' => 'VERIFIED'     
         ])->sum('current_profit');
            // $only_profit =  $deposit_total- $withdraw_total;
            // $current_profit= ($only_profit*0.05);
            // $current_balance = $current_profit+$only_profit ;

             $current_balance = $deposit_total- $withdraw_total ;

            
            // $link="https://blockchain.info/tobtc?currency=USD&value=500";

            // $ch=curl_init();
            // curl_setopt($ch,CURLOPT_URL,$link);
            // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            // $result=curl_exec($ch);
            // curl_close($ch);
            // $result=json_decode($result,true);
            
            // print_r($result);
            
            
            // $calculative_qpt_annuity_balance=$current_balance*$result;
            // $qpt_annuity_balance=$calculative_qpt_annuity_balance/500;


            // $calculative_qpt_current_profit=$current_profit*$result;
            // $qpt_current_profit=$calculative_qpt_current_profit/500;


            $user=User::find(Auth::user()->id);

            
            return view('admin.home', compact('user','last_deposit','last_withdraw','current_balance','current_profit'));

 
        }

        

        else
        {

            // $last_withdraw = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)
                                                        
            //                                             ->latest()->first() ;




                                                        $last_withdraw = DB::table('withdraw_funds')->where([
                                                            'user_id' => Auth::user()->id,
                                                            'verification' => 'VERIFIED'     
                                                         ])->latest()->first();
            // $last_deposit = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->latest()->first();

            


            $last_deposit = DB::table('deposit_funds')->where([
                'user_id' => Auth::user()->id,
                'verification' => 'VERIFIED'     
             ])->latest()->first();


            
            $data= DB::table('transaction_histories')->where('user_id',Auth::user()->id)->latest()->first();


           // $deposit_total = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->sum('deposit_amount');

           $deposit_total = DB::table('deposit_funds')->where([
            'user_id' => Auth::user()->id,
            'verification' => 'VERIFIED'     
         ])->sum('deposit_amount');




            // $withdraw_total = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->sum('amount');
            $withdraw_total = DB::table('withdraw_funds')->where([
                'user_id' => Auth::user()->id,
                'verification' => 'VERIFIED'     
             ])->sum('amount');


            $only_profit =  $deposit_total- $withdraw_total;
            // $current_profit= ($only_profit*0.05);
            //$current_balance = $current_profit+$only_profit ;
            // $current_balance = ($new_data->current_profit ?? '0') ;

            $current_balance = $only_profit + ($new_data->current_profit ?? '0') ;
            // {{$data->current_profit ?? '0'}}
            
            // $link="https://blockchain.info/tobtc?currency=USD&value=500";

            // $ch=curl_init();
            // curl_setopt($ch,CURLOPT_URL,$link);
            // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            // $result=curl_exec($ch);
            // curl_close($ch);
            // $result=json_decode($result,true);
            
            // print_r($result);
            
            
            // $calculative_qpt_annuity_balance=$current_balance*$result;
            // $qpt_annuity_balance=$calculative_qpt_annuity_balance/500;


            // $calculative_qpt_current_profit=$current_profit*$result;
            // $qpt_current_profit=$calculative_qpt_current_profit/500;


  
            // return view ('admin.showproduct',compact('data'));

 
            

            $user=User::find(Auth::user()->id);
            return view('user.logged_home', compact('user','last_deposit','last_withdraw','current_balance','data'));


            // return view('user.transiction_history', compact('user','last_deposit','last_withdraw','current_balance','current_profit','qpt_annuity_balance','qpt_current_profit','data'));
             
        }
    }
 


    public function index() 
    {
        return view('user.home');
      
    }



    public function make_verified() 
    {
        $user=User::find(Auth::user()->id);
        $Upload_front_photo_path=Auth::user()->Upload_front_photo_path;

        // return view('user.make_verified', compact('user'));

        if($user->verification === 'VERIFIED')
        {
        return redirect()->back()->with('message_verify','Your id already verified');   
    }
    else{
        return view('user.make_verified', compact('user'));
    }
      
    }

    public function upload_make_verified(Request $request) 
    {
        $user=User::find(Auth::user()->id);
         
        $image=$request->file;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('verifiedimage',$imagename);
        $user->Upload_front_photo_path=$imagename;



        $image_1=$request->file_1;
        $imagename_1=time().'.'. $image_1->getClientOriginalExtension();
        $request->file_1->move('verifiedimage1',$imagename_1);
        $user->Upload_back_photo_path=$imagename_1;


        $image_2=$request->file_2;
        $imagename_2=time().'.'. $image_2->getClientOriginalExtension();
        $request->file_2->move('verifiedimage2',$imagename_2);
        $user->Upload_selfie_photo_path=$imagename_2;





         
        $user->save();
        
    



        return view('user.upload_success_verified', compact('user'));
        
      
    }




    public function calculate_deposits_funds(Request $req) 
    {

        return view('user.bitcoin_calculator');
        // print_r($req->input());
      
    }


    public function deposits_funds()
    {

        $user=User::find(Auth::user()->id);
        // $data=deposit_funds::all()->where('user_id',Auth::user()->id);
        $data=deposit_funds::where([
            'user_id' => Auth::user()->id,
            'verification' => 'VERIFIED'     
     ])->get();
         
         

        // ->where('verification', 'LIKE', '%VERIFIED%');

// $key="d90ff09c2400702b427848e7c07fb8f6";
$link="https://blockchain.info/tobtc?currency=USD&value=500";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$link);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
 

print_r($result);
 


$a=$_GET["number"]  ?? null;
        $b=$a*$result;
        $sum=$b/500;

        return view('user.deposits_funds', compact('user','data','sum'));
            
    }

    public function upload_deposits_funds(Request $request){
        $data=new deposit_funds;
        $image=$request->file;
        $imagename=time().'.'. $image->getClientOriginalExtension();
        $request->file->move('depositimage',$imagename);
        $data->image=$imagename;
        $data->user_id= Auth::id();

        $data->wallet_address=$request->wallet_address;
        $data->deposit_amount=$request->deposit_amount;

        
        $data->save();
        return redirect()->back()->with('message','Your Amount deposited, wait for admin review');      
    }



    public function withdraw_funds()
    {
        


        $user=User::find(Auth::user()->id);
        // $data=withdraw_funds::all()->where('user_id',Auth::user()->id);
        $data=withdraw_funds::where([
            'user_id' => Auth::user()->id,
            'verification' => 'VERIFIED'     
     ])->get();



        $link="https://blockchain.info/tobtc?currency=USD&value=500";

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$link);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        curl_close($ch);
        $result=json_decode($result,true);
        

        print_r($result);
        





        $a=$_GET["number"]  ?? null;
        $b=$a*$result;
        $sum=$b/500;

        // $deposit_total = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->sum('deposit_amount');
        // $withdraw_total = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->sum('amount');


        $deposit_total = DB::table('deposit_funds')->where([
            'user_id' => Auth::user()->id,
            'verification' => 'VERIFIED'     
         ])->sum('deposit_amount');


         $withdraw_total = DB::table('withdraw_funds')->where([
            'user_id' => Auth::user()->id,
            'verification' => 'VERIFIED'     
         ])->sum('amount');







        $new_data= DB::table('transaction_histories')->where('user_id',Auth::user()->id)->latest()->first();
        $only_profit =  $deposit_total- $withdraw_total;
        // $current_profit= ($only_profit*0.05);
        // $current_balance = $current_profit+$only_profit ;


        $current_balance = $only_profit + ($new_data->current_profit ?? '0') ;

        return view('user.withdraw_funds', compact('user','data','current_balance','sum','new_data'));
       
    }

    public function upload_withdraw_funds(Request $request){
        $data=new withdraw_funds;
        $data->user_id= Auth::id();

        $data->wallet_address=$request->wallet_address;
        $data->amount=$request->amount;

        
        $data->save();
        return redirect()->back()->with('message','Your Amount withdrawn, wait for admin review');     
    }











        //______________________________profile Setting__________________________

            public function profile()
            {
                $user=User::find(Auth::user()->id);
                // $data=User::find($id);
                return view ('user.profile_&_security',['user'=>$user]);
            }
        
            public function profile_contact_update(Request $request)
            {
                $user_id=Auth::user()->id;
                $user=User::findOrFail($user_id);
                $user->contact_number=$request->input('contact_number');
                $user->update();
                return redirect()->back()->with('status','Contact Number updated');
            }

            public function profile_pass_update(Request $request)
            {
                $user_id=Auth::user()->id;
                $user=User::findOrFail($user_id);
                $user->password=$request->input('password');
                $user->update();
                return redirect()->back()->with('status','password updated');
            }

            public function profile_picture_update(Request $request)
            {

                $user_id=Auth::user()->id;
                $user=User::findOrFail($user_id);
                // $user->profile_photo_path=$request->input('profile_photo_path');
                $profile_photo_path=$request->file;
                $imagename=time().'.'. $profile_photo_path->getClientOriginalExtension();
                $request->file->move('profileimage',$imagename);
                $user->profile_photo_path=$imagename;


                $user->update();
                return redirect()->back()->with('status','image updated');
            }


             

            //______________________________transiction_history__________________________
            function transiction_history()
            {
                // $user=User::find(Auth::user()->id);
                // $data=withdraw_funds::all();
         
                // $data = DB::table('deposit_funds')
                //         ->join('withdraw_funds','deposit_funds.user_id','=','withdraw_funds.user_id')
                //                 ->select('deposit_funds.deposit_amount','deposit_funds.image','deposit_funds.updated_at','withdraw_funds.amount','withdraw_funds.created_at')
                //                 ->get();
                
                                // $data = deposit_funds::join('withdraw_funds', 'withdraw_funds.user_id', '=', 'deposit_funds.user_id')
                                //                         ->join('users', 'users.id', '=', 'withdraw_funds.user_id')
                                //      ->get(['deposit_funds.deposit_amount','deposit_funds.image','deposit_funds.updated_at',  'withdraw_funds.user_id','withdraw_funds.amount','withdraw_funds.created_at']);
                        
                   /*Above code will produce following query
        
                Select 
                    `country`.`country_name`, 
                    `state`.`state_name`, 
                    `city`.`city_name` 
                from `country` 
                inner join `state` 
                    on `state`.`country_id` = `country`.`country_id` 
                inner join `city` 
                    on `city`.`state_id` = `state`.`state_id`
        
                */

                $last_withdraw = DB::table('withdraw_funds')->where([
                    'user_id' => Auth::user()->id,
                    'verification' => 'VERIFIED'     
                 ])->latest()->first();
// $last_deposit = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->latest()->first();




$last_deposit = DB::table('deposit_funds')->where([
'user_id' => Auth::user()->id,
'verification' => 'VERIFIED'     
])->latest()->first();



// $data= DB::table('transaction_histories')->where('user_id',Auth::user()->id)->latest()->first();


// $deposit_total = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->sum('deposit_amount');

$deposit_total = DB::table('deposit_funds')->where([
'user_id' => Auth::user()->id,
'verification' => 'VERIFIED'     
])->sum('deposit_amount');




// $withdraw_total = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->sum('amount');
$withdraw_total = DB::table('withdraw_funds')->where([
'user_id' => Auth::user()->id,
'verification' => 'VERIFIED'     
])->sum('amount');








































                // $last_withdraw = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->latest()->first() ;
                // $last_deposit = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->latest()->first();
                
                $new_data= DB::table('transaction_histories')->where('user_id',Auth::user()->id)->latest()->first();
    
    
                // $deposit_total = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->sum('deposit_amount');
                // $withdraw_total = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->sum('amount');
                $only_profit =  $deposit_total- $withdraw_total;
                // $current_profit= ($only_profit*0.05);
                //$current_balance = $current_profit+$only_profit ;
                
                $current_balance = $only_profit + ($new_data->current_profit ?? '0') ;


                

 
    
                
                // $link="https://blockchain.info/tobtc?currency=USD&value=500";
    
                // $ch=curl_init();
                // curl_setopt($ch,CURLOPT_URL,$link);
                // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                // $result=curl_exec($ch);
                // curl_close($ch);
                // $result=json_decode($result,true);
                
                // print_r($result);
                
                
                // $calculative_qpt_annuity_balance=$current_balance*$result;
                // $qpt_annuity_balance=$calculative_qpt_annuity_balance/500;
    
    
                // $calculative_qpt_current_profit=$current_profit*$result;
                // $qpt_current_profit=$calculative_qpt_current_profit/500;



                $user=User::find(Auth::user()->id);
                // $data=transaction_history::all()->where('user_id',Auth::user()->id);




                $data=transaction_history::where([
                    'user_id' => Auth::user()->id,
                    'verification' => 'VERIFIED'     
             ])->get();



                
            // $user=User::find(Auth::user()->id);
            // return view('user.logged_home', compact('user','last_deposit','last_withdraw','current_balance','data'));
              
        
                // return view('user.transiction_history', compact('user','data'));

               return view('user.transiction_history', compact('user','last_deposit','last_withdraw','current_balance','data','new_data'));
                 
            }




        public function add_transiction_history(Request $request)
        {
            // $user_id=Auth::user()->id;
            // $user=User::findOrFail($user_id);















            















            $last_withdraw = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->latest()->first() ;
            $last_deposit = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->latest()->first();
            
            $new_data= DB::table('transaction_histories')->where('user_id',Auth::user()->id)->latest()->first();


            $deposit_total = DB::table('deposit_funds')->where('user_id',Auth::user()->id)->sum('deposit_amount');
            $withdraw_total = DB::table('withdraw_funds')->where('user_id',Auth::user()->id)->sum('amount');
            $only_profit =  $deposit_total- $withdraw_total;
            // $current_profit= ($only_profit*0.05);
            //$current_balance = $current_profit+$only_profit ;
          $current_balance = $only_profit + ($new_data->current_profit ?? '0') ;

            
            // $link="https://blockchain.info/tobtc?currency=USD&value=500";

            // $ch=curl_init();
            // curl_setopt($ch,CURLOPT_URL,$link);
            // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            // $result=curl_exec($ch);
            // curl_close($ch);
            // $result=json_decode($result,true);
            
            // print_r($result);
            
            
            // $calculative_qpt_annuity_balance=$current_balance*$result;
            // $qpt_annuity_balance=$calculative_qpt_annuity_balance/500;


            // $calculative_qpt_current_profit=$current_profit*$result;
            // $qpt_current_profit=$calculative_qpt_current_profit/500;


            $user=User::find(Auth::user()->id);
            

            $data=new transaction_history;
            $data->user_id= Auth::id();
             

            $data->last_withdraw=$request->input('last_withdraw');
            $data->last_deposit=$request->input('last_deposit');
            $data->current_profit=$request->input('current_profit');
            $data->current_balance=$request->input('current_balance');
            $data->qpt_annuity_balance=$request->input('qpt_annuity_balance');
            $data->qpt_current_profit=$request->input('qpt_current_profit');

            $data->save();
            // return view('user.logged_home', compact('user','last_deposit','last_withdraw','current_balance','current_profit','qpt_annuity_balance','qpt_current_profit','data'));
            return redirect()->back()->with('status','image updated');

        }

}
