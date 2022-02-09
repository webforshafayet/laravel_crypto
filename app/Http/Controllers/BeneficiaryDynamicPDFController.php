<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use PDF;

class BeneficiaryDynamicPDFController extends Controller
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
     <h3 align="center">Beneficiary Management Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">RETIREE NAME</th>
    <th style="border: 1px solid; padding:12px;" width="20%">BENEFICIARY NAME</th>
    <th style="border: 1px solid; padding:12px;" width="15%">RELATION WITH BENEFACTOR</th>
    <th style="border: 1px solid; padding:12px;" width="20%">BENEFICIARY NUMBER</th>
    <th style="border: 1px solid; padding:12px;" width="10%">BENEFICIARY PERCENTAGE</th>
     
   </tr>
     ';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->ben_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->ben_relationship.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->ben_number.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->ben_percentage.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
