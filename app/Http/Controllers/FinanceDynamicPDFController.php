<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;


class FinanceDynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = DB::table('admin_finance_transaction')
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
     <h3 align="center">Finance Management Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="10%">USER NAME</th>
    <th style="border: 1px solid; padding:12px;" width="10%">EMAIL</th>
    <th style="border: 1px solid; padding:12px;" width="10%">ADDRESS</th>
    <th style="border: 1px solid; padding:12px;" width="10%">DATE</th>
    <th style="border: 1px solid; padding:12px;" width="10%">CURR BALANCE</th>
    <th style="border: 1px solid; padding:12px;" width="10%">CURR PROFIT</th>
    <th style="border: 1px solid; padding:12px;" width="10%">LAST WITHDRAW</th>
    <th style="border: 1px solid; padding:12px;" width="10%">LAST DEPOSIT</th>
    <th style="border: 1px solid; padding:12px;" width="10%">QPT ANNUITY BAL</th>
    <th style="border: 1px solid; padding:12px;" width="10%">QPT CURR PROFIT</th>

   </tr>
     ';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->created_at.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->current_balance.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->current_profit.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->last_withdraw.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->last_deposit.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->qpt_annuity_balance.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->qpt_current_profit.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
