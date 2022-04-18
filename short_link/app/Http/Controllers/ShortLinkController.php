<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortLink;

class ShortLinkController extends Controller
{
    /**  
     * It is used to show the resource list.  
     *  
     * @return \Illuminate\Http\Response  
     */  
    public function index()  
    {  
        $shortLinks = ShortLink::latest()->get();  
     
        return view('shortenLink', compact('shortLinks'));  
    }  
       
    /**  
     * It is used to show the resource list.  
     *  
     * @return \Illuminate\Http\Response  
     */  
    public function store(Request $request)  
    {  
        $request->validate([  
           'link' => 'required|url'  
        ]);  
     
        $input['link'] = $request->link;  
        $input['code'] = str_random(3);  
     
        ShortLink::create($input);  
    
        return redirect('generate-shorten-link')  
             ->with('success', 'Shorten Link Generated Successfully!');  
    }  
     
    /**  
     * It is used to show the resource list.  
     *  
     * @return \Illuminate\Http\Response  
     */  
    public function shortenLink($code)  
    {  
        $find = ShortLink::where('code', $code)->first();  
     
        return redirect($find->link);  
    }  
}
