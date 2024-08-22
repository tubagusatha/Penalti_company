<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Products;
use App\Models\ProductsGallery;
use App\Models\sizes;
use App\Models\userGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{

//     public function __construct()
// {
//     $this->middleware('showActive');
// }
public function detail($id){
    if (!Products::check()) {
        return redirect('/');
    }
    
    $categories = Category::all();
    $userId = Auth::id();
    $sizes = sizes::where('product_id', $id)->get();
    $product = Products::findOrFail($id);  // This returns a single product object
    $gallery = ProductsGallery::where('product_id', $id)->get();
    $img = userGallery::where('user_id', $userId)->latest()->first();
    $galleries = ProductsGallery::where('product_id', $id)->get();

    dd($product);

    return view('detail.index', compact('categories', 'img', 'product', 'gallery', 'sizes', 'galleries'));

}

public function checkQty(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Products::find($productId);

        if ($product) {
            return response()->json(['availableQty' => $product->qty]);
        }

        return response()->json(['message' => 'Product not found'], 404);
    }

    public function updateQty(Request $request)
    {
        $productId = $request->input('product_id');
        $increment = $request->input('increment');

        $product = Products::find($productId);

        if ($product) {
            if ($increment) {
                $product->qty = max(0, $product->qty - 1); // Ensure qty doesn't go below 0
            } else {
                $product->qty = $product->qty + 1;
            }

            $product->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found'], 404);
    }

    public function carts_detail($id){
        $categories = Category::all();
        $img = userGallery::where('user_id', $id)->first();
        $product = Products::where('name_products', $id)->get();

        // dd($product);
        return view('detail.carts.index', compact('categories', 'img', 'product'));
    }

    public function payment_detail($id){
        $categories = Category::all();
        $img = userGallery::where('user_id', $id)->first();
        $addresses = Address::where('user_id', $id)->get(); // Adjust the condition as per your requirement
    
        return view('detail.payment.index', compact('categories', 'img', 'addresses'));
    }
    

}
