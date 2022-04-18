<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SalariedExport;  
use App\Imports\SalariedImport;  
use Maatwebsite\Excel\Facades\Excel;

class SalariedController extends Controller
{
    /** 
    * It will return \Illuminate\Support\Collection 
    */  
    public function importExportView()  
    {  
       return view('import');  
    }  
     
    /** 
    * It will return \Illuminate\Support\Collection 
    */  
    public function export()   
    {  
        return Excel::download(new SalariedExport, 'salaried.csv');  
    }  
     
    /** 
    * It will return \Illuminate\Support\Collection 
    */  
    public function import()   
    {  
        Excel::import(new SalariedImport,request()->file('file'));  
             
        return back();  
    }  
}
