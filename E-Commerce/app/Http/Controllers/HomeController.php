<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Dapatkan semua kategori
        $categories = Category::all();

        // Jika tidak ada kategori yang dipilih, ambil semua produk
        if ($request->has('category')) {
            $categoryId = $request->input('category');
            $products = Products::with('gallery')->where('category_id', $categoryId)->latest()->get();
        } else {
            $products = Products::with('gallery')->latest()->get();
        }

        return view('welcome', compact('products', 'categories'));
    }
}
