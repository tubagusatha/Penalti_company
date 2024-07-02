<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsGallery;
use App\Models\userGallery;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        
    
    // Query to get all products or search by name_products
    $products = Products::when($search, function ($query, $search) {
        return $query->where('name_products', 'like', '%' . $search . '%');
    })->get();

    // Get product IDs
    $productIds = $products->pluck('id');

    $data = [
        'products' => $products,
        'productIds' => $productIds,
    ];

    return view('search_page.index', $data);
}
}
