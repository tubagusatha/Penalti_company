<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::get();
        $categoryId = $category->pluck('id');

        $data = [
            'category' => $category,
            'categoryId' => $categoryId,
        ];

        return view('admin_ui.crud.category.index', $data);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name_category' => 'required|string|max:100',
            
        ]);
    
    
        // Change "Products" to "Product"
        Category::create($validatedData);
    
        // Change redirect URL to match your route definition
        return redirect('/admin_panel/category');
    }

    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            
            // Hapus semua produk terkait secara permanen
            $productsDeleted = $category->products()->delete();
            
            // Hapus kategori
            $category->delete();
            
            return redirect('/admin_panel/categories')->with('success', 'Category deleted successfully.');
        } catch (QueryException $e) {
            // Tangani kesalahan terkait constraint foreign key
            return back()->with('error', "tidak bisa menghapus category '{$category->name_category}'. kamu harus menghapus data product di softdeletes yang berada di halaman product");
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return back()->with('error', 'Failed to delete category. Please try again later.');
        }
        return redirect('admin_panel/category');
    }
}
