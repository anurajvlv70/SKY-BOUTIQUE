<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function product_store(Request $request)
    {
        
    // Validate the request data, including the image
    $request->validate([
        'user_id' => 'required',
        'name' => 'required',
        'rate' => 'required',
        'colors' => 'required',
        'size' => 'required',
        'image'=>'nullable',
    ]);

    $path = null;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);
        $path='image/' . $imageName;


    }
    //dd($request);
        $user= add::create([
            'u_id'=>$request->user_id,
            'name' => $request->name,
            'rate' => $request->rate,
            'colors' => $request->colors,
            'size' => $request->size,
            'image'=>$path,
           
        ]);
        

        return view('dashboard',compact('user'));    
    }
    
    public function product(){
    
          $user=Auth()->user();
        return view('add',compact('user'));
       
    }

    public function dressDel($id){
    
        $user=add::where('id',$id)->first();
        
        $user->delete();
        return redirect()->route('show');
       }

       public function dressEdit(Request $request){
        $id=$request->input('id');
        $user=add::where('id',$id)->first();
        $detail=$user->update([
            'name'=>$request->name,
            'rate'=>$request->rate,
            'colors'=>$request->colors,
            'size'=>$request->size,
        ]);
        return redirect()->route('show');
        }

}
