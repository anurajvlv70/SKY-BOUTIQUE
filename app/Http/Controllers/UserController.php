<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add;
use App\Models\order;

class UserController extends Controller
{
    public function allRecord(){
    
        $userdetails=add::all();
        //  dd($userdetails);
        return view('list',compact('userdetails'));
        
       }
       public function list(){
    
           
        return view('list');
       
    }
    public function allRecord2(){
    
        $userdetails=add::all();
          //dd($userdetails);
        return view('order',compact('userdetails'));
        
       }
       // app/Http/Controllers/YourController.php
public function wishlist()
{
    // Assuming you have a Wishlist model or method to fetch wishlist items
    $wishlistItems = add::where('u_id', auth()->id())->get();

    return view('wishlist', compact('wishlistItems'));
}

public function buy()
{
    // Assuming you have a Wishlist model or method to fetch wishlist items

    return view('buy');
}
public function payment_store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'pin_code' => 'required|numeric',
        'email' => 'required|email',
        'phone' => 'nullable|numeric',
        'payment_type' => 'required|array', // Ensure at least one payment type is selected
        'payment_type.*' => 'in:card,online_payment,cod', // Validate each selected payment type
    ]);

    // Handle payment types (array to string for storage or further processing)
    $paymentTypes = implode(', ', $request->payment_type);

    // Store user payment information
    $user = order::create([
        'name' => $request->name,
        'address' => $request->address,
        'pin_code' => $request->pin_code,
        'email' => $request->email,
        'phone' => $request->phone,
        'payment_type' => $paymentTypes, // Save as a comma-separated string
    ]);

    // Redirect to the dashboard or any confirmation page
    return view('order_last', compact('user'));
    
}
}







