<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RedirectController extends Controller
{
    
    public function roleRedirection(){
        
        if(Auth::id())
        {
            $role=Auth()->user()->userrole;
            if($role=='admin'){
                return view('dashboard');
            }
            elseif($role=='user'){
                return view('home');
            }      
        }
    }
}
