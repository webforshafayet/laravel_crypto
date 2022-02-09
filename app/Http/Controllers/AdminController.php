<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\transaction_history;
use App\Models\deposit_funds;
use App\Models\withdraw_funds;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;




class AdminController extends Controller
{
    //




    public function user_management() 
    {

        $user=User::find(Auth::user()->id);
        $data=DB::table('users')
        ->where('usertype','0')
        ->get();
        return view('admin.user_management', compact('user','data'));
      
    }


    public function view_upload_user_management($id) 
    {

        $user=User::find(Auth::user()->id);
        
        $data=User::find($id);
        return view('admin.view_upload_user_management', compact('user','data'));
      
    }



    public function upload_user_management(Request $request,$id){

        


        // $user=new User;
        
        // $user->verification=$request->verification;  
        // $user->save();
        // return redirect()->back()->with('message','verification done');   
        
        

       // $user=User::find($id);
        $user=User::find($id);
        $user->verification=$request->input('verification');
        $user->update();
        return redirect()->back()->with('message','verification done');   
    }

      public function view_transaction_user_management($id) 
    {
        $user=User::find(Auth::user()->id);

        $data_id=transaction_history::find($id);
        $data=DB::table('transaction_histories')
        ->where('user_id',$id)
        ->get();
        return view('admin.view_transaction_user_management', compact('user','data'));
      
    }

    public function delete_upload_user_management($id)
    {
        $user=User::find(Auth::user()->id);
        $data=User::find($id);
        $data->delete();
        return view('admin.user_management', compact('user','data'));
    }



    public function deposits_management() 
    {
        $user=User::find(Auth::user()->id);
        $data=DB::table('v_new_deposit_funds_full')
        ->get();
        return view('admin.deposits_management', compact('user','data'));
      
    }
    public function view_deposits_management($id) 
    {

        $user=User::find(Auth::user()->id);
        
        $data=deposit_funds::find($id);
        return view('admin.view_deposits_management', compact('user','data'));
      
    }

    public function upload_deposits_management(Request $request,$id){

        $user=deposit_funds::find($id);
        $user->wallet_address=$request->input('wallet_address');
        $user->deposit_amount=$request->input('deposit_amount');
        $user->verification=$request->input('verification');
        $user->update();
        return redirect()->back()->with('message','deposit management updated');   
    }

    public function delete_deposits_management($id)
    {
        $user=User::find(Auth::user()->id);
        $data=deposit_funds::find($id);
        $data->delete();
        return redirect()->back()->with('message','deleted');   
    }

    public function withdraw_management() 
    {
        $user=User::find(Auth::user()->id);
        $data=DB::table('v_new_withdraw_funds_full')
        ->get();
        return view('admin.withdraw_management', compact('user','data'));
      
    }

    public function view_withdraw_management($id) 
    {
        $user=User::find(Auth::user()->id);
        
        $data=withdraw_funds::find($id);
        return view('admin.view_withdraw_management', compact('user','data'));
      
    }

    public function upload_withdraw_management(Request $request,$id){

        $user=withdraw_funds::find($id);
        $user->wallet_address=$request->input('wallet_address');
        $user->amount=$request->input('amount');
        $user->stake=$request->input('stake');
        $user->profit=$request->input('profit');
        $user->annuity_profit=$request->input('annuity_profit');
        $user->_return=$request->input('_return');
        $user->verification=$request->input('verification');
        
        $user->update();
        return redirect()->back()->with('message','withdraw management updated');   
    }

    public function delete_withdraw_management($id)
    {
        $user=User::find(Auth::user()->id);
        $data=withdraw_funds::find($id);
        $data->delete();
        return redirect()->back()->with('message','deleted');   
    }

    public function finance_management() 
    {
        $user=User::find(Auth::user()->id);
        $data=DB::table('new_admin_finance_transaction')
        ->get();
        return view('admin.finance_management', compact('user','data'));
      
    }
    public function view_finance_management($id) 
    {
        $user=User::find(Auth::user()->id);
        
        $data=transaction_history::find($id);
        return view('admin.view_finance_management', compact('user','data'));
      
    }

    public function upload_finance_management(Request $request,$id){

        $user=transaction_history::find($id);
        $user->last_withdraw=$request->input('last_withdraw');
        $user->last_deposit=$request->input('last_deposit');
        $user->current_profit=$request->input('current_profit');
        $user->current_balance=$request->input('current_balance');
        $user->qpt_annuity_balance=$request->input('qpt_annuity_balance');
        $user->qpt_current_profit=$request->input('qpt_current_profit');
        $user->cash_benifit_balance=$request->input('cash_benifit_balance');
        $user->verification=$request->input('verification');
        
        
        $user->update();
        return redirect()->back()->with('message','finance management updated');   
    }

    public function profile_and_security() 
    {
        $user=User::find(Auth::user()->id);
        $data=DB::table('users')
        ->where('usertype','0')
        ->get();
        return view('admin.profile_and_security', compact('user','data'));
      
    }
    public function view_upload_profile_and_security()
    {
        $user=User::find(Auth::user()->id);
        // $data=product::find($id);
        return view ('admin.view_upload_profile_and_security',compact('user'));
    }

    public function delete_profile_and_security($id)
    {
        $data=User::find($id);
        
        $data->delete();
        return redirect()->back()->with('message','Buyer order Delivered');
    }


    public function  upload_profile_and_security(Request $request)
    {

        $data=new User;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->choose_package=$request->choose_package;
        $data->date=$request->date;
        $data->contact_number=$request->contact_number;
        $data->password = Hash::make($request->get('password'));


        $data->save();
        return redirect()->back()->with('message','New User Added Successfully');
    }


    public function quote_management() 
    {
        $user=User::find(Auth::user()->id);
        $data=DB::table('users')
        ->where('usertype','0')
        ->get();
        return view('admin.quote_management', compact('user','data'));
      
    }
    public function view_quote_management($id) 
    {
        $user=User::find(Auth::user()->id);
        
        $data=User::find($id);
        return view('admin.view_quote_management', compact('user','data'));
      
    }

    public function upload_quote_management(Request $request,$id){

        $user=User::find($id);
        $user->address=$request->input('address');
        $user->state=$request->input('state');
        $user->city=$request->input('city');
        $user->date=$request->input('date');
        $user->sex=$request->input('sex');
        $user->sum=$request->input('sum');
        $user->frequent_deposit=$request->input('frequent_deposit');
        $user->select_cover_duration=$request->input('select_cover_duration');
        
        
        $user->update();
        return redirect()->back()->with('message','quote management updated');   
    }

    public function beneficiary_management() 
    {
        $user=User::find(Auth::user()->id);
        $data=DB::table('users')
        ->where('usertype','0')
        ->get();
        return view('admin.beneficiary_management', compact('user','data'));
      
    }


    public function view_beneficiary_management($id) 
    {
        $user=User::find(Auth::user()->id);
        
        $data=User::find($id);
        return view('admin.view_beneficiary_management', compact('user','data'));
      
    }

    public function upload_beneficiary_management(Request $request,$id){

        $user=User::find($id);
        $user->ben_name=$request->input('ben_name');
        $user->ben_relationship=$request->input('ben_relationship');
        $user->ben_number=$request->input('ben_number');
        $user->ben_percentage=$request->input('ben_percentage');
        
        $user->update();
        return redirect()->back()->with('message','beneficiary management updated');   
    }

}
