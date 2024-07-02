<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\User;
use App\Models\userGallery;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Dapatkan semua kategori
        $categories = Category::all();
        $user = User::all();

        // Dapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Dapatkan gambar terbaru dari galeri pengguna, atau null jika tidak ada
        $img = UserGallery::where('user_id', $userId)->latest()->first();

        // Jika tidak ada gambar, tetapkan default (null)
        if (!$img) {
            $img = null;
        }

        
        // Jika ada kategori yang dipilih, ambil produk berdasarkan kategori tersebut
        if ($request->has('category')) {
            $categoryId = $request->input('category');
            $products = Products::with('gallery')
                                ->where('category_id', $categoryId)
                                ->where('show_products', true)
                                ->orderBy('id', 'asc')
                                ->take(2)
                                ->get();
        } else {
            // Jika tidak ada kategori yang dipilih, ambil semua produk yang ditampilkan
            $products = Products::with('gallery')
                                ->where('show_products', true)
                                ->orderBy('id', 'asc')
                                ->take(2)
                                ->get();
        }

        return view('welcome', compact('products', 'categories', 'user', 'img'));
    }



    public function footer($name_category) {
        $categories = Category::where('name_category', $name_category)->get(); 
        return view('components.footer', compact('categories'));        
    }

    public function navbar($name_category) {
        $categories = Category::where('name_category', $name_category)->get(); 
        return view('layout.nav', compact('categories'));        
    }
}