<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function addclient()
    {
        return view('addclient');
    }
}