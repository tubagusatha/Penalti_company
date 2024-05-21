<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(){
        return view('detail.index');
    }

    
}
