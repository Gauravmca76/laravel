<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Hash;
use Session;

class LoginController extends Controller
{
    public function index()  
    {  
        return view('home');
    }

    public function login(Request $request)
    {        
        $user = Login::where('username','=',$request->uname)->first();
        if($user)
        {
            if($request->password == $user->password)
            {
                $request->session()->put('disp_name',$user->disp_username);
                $request->session()->put('username',$user->username);
                $request->session()->put('password',$user->password);
                return redirect('home');
            }
            else
            {
                return back()->with('fail','Password Not Match!!!');
            }
        }
        else
        {
            return back()->with('fail','Invalid username!!!');
        }
    }
}
