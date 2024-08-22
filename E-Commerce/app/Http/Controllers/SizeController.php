<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\sizes;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::get();
        $size = sizes::get();
        $sizeId = $size->pluck('id');
    
        // Mengambil ID produk untuk setiap produk
        $productIds = $products->pluck('id');
    
    
        $data = [
            'products' => $products,
            'size' => $size,
            'sizeId' => $sizeId,
            'productIds' => $productIds
        ];
        


        return view('admin_ui.crud.size.index',  $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'ukuran' => 'required|string|max:100',
        'product_ids' => 'required|array',
        'product_ids.*' => 'exists:products,id', // Validate each product ID
    ]);

    $ukuran = $validatedData['ukuran'];
    $productIds = $validatedData['product_ids'];

    foreach ($productIds as $productId) {
        sizes::create([
            'ukuran' => $ukuran,
            'product_id' => $productId,
        ]);
    }

    return redirect('/admin_panel/product')->with('success', 'Sizes created successfully!');
}
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    // Menghapus produk berdasarkan ID yang diberikan
    $sizes = sizes::findOrFail($id);
    
    // Melakukan penghapusan produk
    $sizes->delete();

    return redirect('/admin_panel/sizechart');
    }
}
