<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class QuoteDynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = DB::table('users')
     ->where('usertype','0')
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
     <h3 align="center">Quote Management Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">NAME</th>
    <th style="border: 1px solid; padding:12px;" width="20%">ADDRESS</th>
    <th style="border: 1px solid; padding:12px;" width="15%">STATE</th>
    <th style="border: 1px solid; padding:12px;" width="20%">CITY</th>
    <th style="border: 1px solid; padding:12px;" width="10%">DOB</th>
    <th style="border: 1px solid; padding:12px;" width="20%">SEX</th>
    <th style="border: 1px solid; padding:12px;" width="20%">SUM AMOUNT</th>
    <th style="border: 1px solid; padding:12px;" width="20%">FREQUENT DEPOSIT</th>
    <th style="border: 1px solid; padding:12px;" width="10%">COVER DURATION(YR)</th>
   </tr>
     ';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->state.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->city.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->date.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->sex.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->sum.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->frequent_deposit.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->select_cover_duration.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
