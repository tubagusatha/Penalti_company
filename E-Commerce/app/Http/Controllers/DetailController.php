<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(){
        $categories = Category::all();
        return view('detail.index',compact('categories'));
    }
}
