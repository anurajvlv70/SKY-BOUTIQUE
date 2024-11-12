<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add;
use App\Models\order;
use App\Models\wishlist;
use App\Models\showorder;

class ShowController extends Controller
{
    public function allRecord(){
    
        $userdetails=add::all();
        //  dd($userdetails);
        return view('show',compact('userdetails'));
        
       }
       public function show($id)
{
    dd($id);
    // Retrieve the user details based on the ID
    $user = add::findOrFail($id);
dd($user);
    // Pass the user details to the view
    return view('order_show', compact('user'));
}

public function addToWishlist(Request $request, $productId)
{
    // Assuming user is authenticated
    $userId = auth()->id();

    // Check if the item is already in the wishlist
    $exists = Wishlist::where('user_id', $userId)->where('product_id', $productId)->exists();

    if (!$exists) {
        Wishlist::create([
            'user_id' => $userId,
            'product_id' => $productId,
        ]);
    }

    return redirect()->back()->with('success', 'Item added to wishlist!');
}

public function showWishlist()
{
    $userId = auth()->id(); 
    
    
    $wishlistItems = Wishlist::where('user_id', $userId)
                              ->with('product') 
                              ->get();

    return view('wishlist', compact('wishlistItems'));
}
public function showOrder()
{
    $userId = auth()->id(); 
    
    
    $orderItems = showorder::where('user_id', $userId)
                              ->with('product') 
                              ->get();

    return view('showOrder', compact('orderItems'));
}

public function addToOrderlist(Request $request, $productId)
{
    // Assuming user is authenticated
    $userId = auth()->id();
    //dd($productId);
    //$productId=6;
    // Check if the item is already in the wishlist
    $exists = showorder::where('user_id', $userId)->where('product_id', $productId)->exists();
    //dd($userId,$productId);
    if (!$exists) {
        showorder::create([
            'user_id' => $userId,
            'product_id' => $productId,
        ]);
    }

    return redirect()->back()->with('success', 'Item added to cart!');
}

public function buy($productId)
{
    // Assuming you have a Wishlist model or method to fetch wishlist items

    return view('buy',compact('productId'));
}




}
