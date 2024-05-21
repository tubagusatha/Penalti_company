<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(){
        return view('detail.index');
    }
    public function detail_tshirt(){
        return view('detail.barang.tshirt.index');
    }
    public function detail_shirt(){
        return view('detail.barang.shirt.index');
    }
    public function detail_pants(){
        return view('detail.barang.pants.index');
    }
    public function detail_accessories(){
        return view('detail.barang.accessories.index');
    }
    public function carts_detail(){
        return view('detail.carts.detail.index');
    }
}
