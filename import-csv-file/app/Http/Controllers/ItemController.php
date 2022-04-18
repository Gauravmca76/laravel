<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**  
     * It will display application dashboard.  
     *  
     * It will return \Illuminate\Http\Response  
     */  
    public function pdfview(Request $request)  
    {  
        $items = DB::table("salarieds")->get();  
        view()->share('items',$items);  
  
        if($request->has('download')){  
            $pdf = PDF::loadView('pdfview');  
            return $pdf->download('pdfview.pdf');  
        }  
  
        return view('pdfview');  
    }  
}
