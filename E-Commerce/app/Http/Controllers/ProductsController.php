<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Database\QueryException;
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
    public function index(Request $request)
{
    $search = $request->input('search');
    
    // Query to get all products or search by name_products
    $products = Products::when($search, function ($query, $search) {
        return $query->where('name_products', 'like', '%' . $search . '%');
    })->get();

$category = Category::get();

    // Mengambil ID produk untuk setiap produk
    $productIds = $products->pluck('id');


    $data = [
        'products' => $products,
        'category' => $category,
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
        try {
            // Validasi data yang diterima dari request
            $validatedData = $request->validate([
                'name_products' => 'required|string|max:100',
                'description_products' => 'nullable|string',
                'detail_products' => 'nullable|string',
                'starting_price' => 'required|integer|min:0',
                'prices_products' => 'required|integer|min:0',
                'qty' => 'required|integer|min:0',
                'show_products' => 'nullable|boolean',
                'category_id' => 'required|exists:categories,id', // Validasi untuk category_id
            ]);
    
            $validatedData['slug'] = Str::slug($validatedData['name_products']);
    
            // Use the Product model (assuming it should be singular)
            Products::create($validatedData);
    
            // Redirect URL to match your route definition
            return redirect('/admin_panel/product')->with('success', 'Product berhasil dibuat');
        } catch (QueryException $e) {
            // Tangani kesalahan terkait constraint foreign key
            return back()->with('error', "Nama produk sudah ada.");
        }
    }
    




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mengambil satu produk berdasarkan ID
    $products = Products::findOrFail($id);
    $category = Category::get();

    // Memasukkan ID produk ke dalam array
    $productIds = [$products->id];

    $data = [
        'product' => $products,
        'category' => $category,
        'productIds' => $productIds,
    ];

    return view('admin_ui.crud.gallery.index', $data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {

    // dd($id);
    // Temukan produk berdasarkan ID
    $product = Products::findOrFail($id);
        $category = Category::all();
    // $last = Category::where('id', $id)->get();
    // dd($lastz);
    
    return view('admin_ui.crud.products.update', compact('product', 'category'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name_products' => 'required|string|max:100',
            'description_products' => 'nullable|string',
            'detail_products' => 'nullable|string',
            'starting_price' => 'required|integer|min:0',
            'prices_products' => 'required|integer|min:0',
            'qty' => 'required|integer|min:0',
            'show_products' => 'nullable|boolean',
            'category_id' => 'required|exists:categories,id',
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


public function bin() {

    $bin_item = Products::onlyTrashed()->get();

    $data = [
        'products' => $bin_item
    ];

    return view('admin_ui.crud.recyclebin.index', $data);
    }

    public function permanentDelete($id)
{
    // Retrieve the trashed product by its ID
    $product = Products::withTrashed()->findOrFail($id);
    
    // Permanently delete the product
    $product->forceDelete();

    // Redirect back or to another appropriate page
    return redirect()->back()->with('success', 'Product permanently deleted from the recycle bin.');
}


public function restore($id)
{
    // Cari produk yang dihapus secara lunak
    $product = Products::withTrashed()->findOrFail($id);

    // Memulihkan produk
    $product->restore();

    // Redirect ke halaman terkait atau ke halaman recycle bin
    return redirect()->route('product.bin')->with('success', 'Product restored successfully');
}

}
