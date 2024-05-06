<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum'])->only('store', 'update', 'delete');

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
{ 
    $products = Products::get();

    // Mengambil ID produk untuk setiap produk
    $productIds = $products->pluck('id');


    $data = [
        'products' => $products,
        'productIds' => $productIds,
    ];

        return view('admin_ui.crud.products.index', $data);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     
         
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_products' => 'required|string|max:100',
            'description_products' => 'nullable|string',
            'starting_price' => 'required|integer|min:0',
            'prices_products' => 'required|integer|min:0',
            'qty' => 'required|integer|min:0',
            'show_products' => 'nullable|boolean',
        ]);
    
        $validatedData['slug'] = Str::slug($validatedData['name_products']);
    
        // Change "Products" to "Product"
        Products::create($validatedData);
    
        // Change redirect URL to match your route definition
        return redirect('/admin_panel/product');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mengambil satu produk berdasarkan ID
    $products = Products::findOrFail($id);

    // Memasukkan ID produk ke dalam array
    $productIds = [$products->id];

    $data = [
        'product' => $products,
        'productIds' => $productIds,
    ];

    return view('admin_ui.crud.gallery.index', $data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::findOrFail($id);
        return view('admin_ui.crud.products.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name_products' => 'required|string|max:100',
            'description_products' => 'nullable|string',
            'starting_price' => 'required|integer|min:0',
            'prices_products' => 'required|integer|min:0',
            'qty' => 'required|integer|min:0',
            'show_products' => 'nullable|boolean',
        ]);
    
        // Perbarui nilai show_products berdasarkan nilai checkbox
        $validatedData['show_products'] = $request->has('show_products');
    
        $validatedData['slug'] = Str::slug($validatedData['name_products']);
    
        $product = Products::findOrFail($id);
        $product->update($validatedData);
    
        return redirect('/admin_panel/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Menghapus produk berdasarkan ID yang diberikan
    $product = Products::findOrFail($id);
    
    // Melakukan penghapusan produk
    $product->delete();

    // Mengirimkan respons JSON untuk menandai penghapusan berhasil
    return response()->json(['success' => true]);
}
    
}
