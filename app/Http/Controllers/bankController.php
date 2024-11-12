<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bank;

class bankController extends Controller
{

    public function bank_store(Request $request)
    {

        $user = bank::create([
            'u_id'=>$request->user_id,
            'name' => $request->name,
            'accno' => $request->accno,
           'card' => $request->card,
           'cvv' => $request->cvv,
           'date' => $request->date,
            
        ]);

        return redirect()->route('bank');
    }
    
    public function bank(){
    
           
        return view('bank');
       
    }



}
