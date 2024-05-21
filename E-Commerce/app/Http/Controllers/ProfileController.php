<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($id){

        $categories = Category::all();
    $categoryz = Category::findOrFail($id);
    // dd($category);
    $products = Products::with('gallery')->where('category_id', $id)->get();

        return view('profile.index', compact('categories',  'categoryz', 'products' ));
    }
}
