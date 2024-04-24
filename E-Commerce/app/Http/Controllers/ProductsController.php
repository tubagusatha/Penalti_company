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
        
        return view('products.index');
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
        'qty' => 'required|integer|min:0',
        'prices_products' => 'required|integer|min:0',
    ]);

    $validatedData['slug'] = Str::slug($validatedData['name_products']);

    // Change "Products" to "Product"
    Products::create($validatedData);

    // Change redirect URL to match your route definition
    return redirect('/indexProduct');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit');
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
        //
    }
}
