<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class   ProductsGalleryController extends Controller
{

    public function index($id)
{
    $product = Products::findOrFail($id);

    return view('admin_ui.crud.gallery.index', compact('product'));
}

    

        public function create($id)
        {     
             
        // Mengambil satu produk berdasarkan ID
         $product = Products::findOrFail($id);

        // Memasukkan ID produk ke dalam array
         $productIds = [$product->id];

        $data = [
        'product' => $product,
        'productIds' => $productIds,
        ];

        return view('admin_ui.crud.gallery.create', $data);
        }
    
        public function store(Request $request, $productId) 
        {
            $product = Products::findOrFail($productId); 
                
            if ($request->hasFile('files') && $product) { 
                $files = $request->file('files');
        
                foreach($files as $file) {
                    $imageName = time() .'.'. $file->getClientOriginalExtension();
                    $file->storeAs('public/gallery', $imageName); // Simpan gambar ke penyimpanan dengan nama unik
                     $url_image = "storage/gallery/".$imageName;
                    ProductsGallery::create([
                        'product_id' => $product->id,
                        'url_image' => $url_image,
                    ]);
                }
            }
        
            return redirect()->route('product.gallery.index', $product->id);
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
        public function update(Request $request, $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy($product_id, $image_id)
        {
            // Temukan item galeri berdasarkan ID yang terkait dengan produk
            $galleryItem = ProductsGallery::where('product_id', $product_id)->findOrFail($image_id);
            
            // Hapus item galeri
            $galleryItem->delete();
            
            // Redirect kembali ke halaman yang benar
            return redirect()->route('product.gallery.index', ['id' => $product_id])->with('success', 'Gallery item deleted successfully');
        }
                


}
