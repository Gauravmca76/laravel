<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    public function index()
    {
        $invoice_data = $this->get_invoice_data();
        return view('dynamic_pdf')->with('invoice_data',$invoice_data);
    }

    public function get_invoice_data()
    {
        $invoice_data = DB::table('invoice_data')->select('id','inv_num','inv_disp_num','inv_from','inv_to','inv_kam','inv_client','inv_amount_withouttax','inv_amount','amtword')->get();
        return $invoice_data;
    }

    public function pdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_invoice_data_to_html());
        return $pdf->stream();
    }

    public function convert_invoice_data_to_html()
    {
        $invoice_data = $this->get_invoice_data();
        $output = '
        <h3 align="center">Invoice Data</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
        <th style="border: 1px solid;">ID</th>
        <th style="border: 1px solid;">Invoice Number</th>
        <th style="border: 1px solid;">Invoice Disp Number</th>
        <th style="border: 1px solid;">From Date</th>
        <th style="border: 1px solid;">To Date</th>
        <th style="border: 1px solid;">Invoice Name</th>
        <th style="border: 1px solid;">Client Name</th>
        <th style="border: 1px solid;">Amount without tax</th>
        <th style="border: 1px solid;">Final amount</th>
        <th style="border: 1px solid;">Amount in words</th>
    </tr>
        ';  
        foreach($invoice_data as $invoice)
        {
        $output .= '
        <tr>
        <td style="border: 1px solid;">'.$invoice->id.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_num.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_disp_num.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_from.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_to.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_kam.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_client.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_amount_withouttax.'</td>
        <td style="border: 1px solid;">'.$invoice->inv_amount.'</td>
        <td style="border: 1px solid;">'.$invoice->amtword.'</td>
        </tr>
        ';
        }
        $output .= '</table>';
        return $output;
    }
}
