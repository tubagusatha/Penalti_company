<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use App\Models\userGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuItemController extends Controller
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

        return view('welcome', compact('products', 'categories', 'img', 'user'));
    }

    

    public function showz($id)
{
    $categories = Category::all();
    $categoryz = Category::findOrFail($id);
    $userId = Auth::id();

        // Dapatkan gambar terbaru dari galeri pengguna, atau null jika tidak ada
        $img = userGallery::where('user_id', $userId)->latest()->first();
    // dd($category);
    $products = Products::with('gallery')->where('category_id', $id)->get();

    return view('detail.tshirt.index', compact('categories',  'categoryz', 'products', 'img' ));
}


//     public function nav($id)
// {

//     // dd($id);
//     $category = Category::where('id', $id)->firstOrFail();
//     $products = Products::with('gallery')->where('category_id', $id)->get();

//     return view('layout.nav', compact('products', 'category'));
// }

}
