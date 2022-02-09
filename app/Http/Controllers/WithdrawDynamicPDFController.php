<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class WithdrawDynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = DB::table('withdraw_funds_full')
         ->limit(10)
         ->get();
     return $customer_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '
     <h3 align="center">Withdraw Management Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">W.ID</th>
    <th style="border: 1px solid; padding:12px;" width="20%">DATE</th>
    <th style="border: 1px solid; padding:12px;" width="15%">WITH DRAWAL</th>
    <th style="border: 1px solid; padding:12px;" width="20%">EMAIL ADDRESS</th>
    <th style="border: 1px solid; padding:12px;" width="10%">CONTACT NUMBER</th>
    <th style="border: 1px solid; padding:12px;" width="20%">WALLET ADDRESS</th>
    <th style="border: 1px solid; padding:12px;" width="20%">ADDRESS</th>
    <th style="border: 1px solid; padding:12px;" width="10%">AMOUNT</th>
   </tr>
     ';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->user_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->created_at.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->contact_number.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->wallet_address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->amount.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
