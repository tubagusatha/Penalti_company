<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(){
        return view('detail.index');
    }
    public function detail_tshirt(){
        return view('detail.tshirt.index');
    }
    public function detail_shirt(){
        return view('detail.shirt.index');
    }
    public function detail_pants(){
        return view('detail.pants.index');
    }
    public function detail_accessories(){
        return view('detail.accessories.index');
    }

}
