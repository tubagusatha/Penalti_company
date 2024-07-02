<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use App\Models\userGallery;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id){
        if(!Auth::check()){
            return redirect('/');
        }
        $type = 'password';
        $user = User::findOrFail($id);
        $user_gallery = UserGallery::where('user_id', $id)->get();
        $addresses = Address::where('user_id', $id)->get();

    //     // dd($id); 
        $categories = Category::all();
    // $categoryz = Category::findOrFail($id);
    // // dd($category);
    // $products = Products::with('gallery')->where('category_id', $id)->get();
    $userId = Auth::id();

        // Dapatkan gambar terbaru dari galeri pengguna, atau null jika tidak ada
        $img = UserGallery::where('user_id', $userId)->latest()->first();

        return view('profile.index' ,compact('categories', 'user', 'user_gallery', 'img', 'addresses', 'type'));
    }

    public function store(Request $request, $userId) 
    {


        $user = User::findOrFail($userId); 
            
        if ($request->hasFile('files') && $user) { 
            $files = $request->file('files');
    
            foreach($files as $file) {
                $imageName = time() .'.'. $file->getClientOriginalExtension();
                $file->storeAs('public/profile', $imageName); // Simpan gambar ke penyimpanan dengan nama unik
                 $url_image = "storage/profile/".$imageName;
                userGallery::create([
                    'user_id' => $user->id,
                    'url_image' => $url_image,
                ]);
            }
        }

        
    
        return redirect()->route('profile', $user->id);
    }

    public function update(Request $request, $userId) 
    {
        $user = User::findOrFail($userId); 
    
        // Check if there are files uploaded
        if ($request->hasFile('files') && $user) { 
            // Get the uploaded files
            $files = $request->file('files');
            
            // Process each uploaded file
            foreach ($files as $file) {
                // Generate a unique name for each image
                $imageName = time() .'.'. $file->getClientOriginalExtension();
    
                // Store each image in the storage with a unique name
                $file->storeAs('public/profile', $imageName);
    
                // Build the URL for the stored image
                $url_image = "storage/profile/".$imageName;
                
                // Check if the user already has a profile image
                $existingProfileImage = UserGallery::where('user_id', $user->id)->first();
    
                // If the user has an existing profile image, update it
                if($existingProfileImage) {
                    // Update the URL of the existing profile image
                    $existingProfileImage->update(['url_image' => $url_image]);
                } else {
                    // If the user doesn't have an existing profile image, create a new one
                    UserGallery::create([
                        'user_id' => $user->id,
                        'url_image' => $url_image,
                    ]);
                }
            }
        }
    
        return redirect()->route('profile', $user->id);
    }

    public function updateEmailProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        try{
        // Validasi data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        // Update user email
        $user->email = $validatedData['email'];
        $user->save();

        
        // Redirect to profile page with success message
        return redirect()->route('profile', $user->id)->with('success', 'Email berhasil diperbarui.');
    } catch(QueryException $e) {
        // Tangani kesalahan terkait constraint foreign key
        return back()->with('error', "Tidak bisa memperbarui Email");
    }
    }

    public function updateNumberProfile(Request $request, $id){
        $user = User::findOrFail($id);
        try{
            // Validasi data
            $validatedData = $request->validate([
                'number' => 'required|string'
            ]);
    
            // Update user email
            $user->number = $validatedData['number'];
            $user->save();
    
            
            // Redirect to profile page with success message
            return redirect()->route('profile', $user->id)->with('success', 'Nomor telepon berhasil diperbarui.');
        } catch(QueryException $e) {
            // Tangani kesalahan terkait constraint foreign key
            return back()->with('error', "Tidak bisa memperbarui Nomor telepon");
        }
    }
    
    public function updatePasswordProfile(Request $request, $id){
        $user = User::findOrFail($id);
        try{
            // Validasi data
            $validatedData = $request->validate([
                'password' => 'required|string|min:8|confirmed'
            ]);
    
            // Update user email
            $user->password = $validatedData['password'];
            $user->save();
    
            
            // Redirect to profile page with success message
            return redirect()->route('profile', $user->id)->with('success', 'Password berhasil diperbarui.');
        } catch(QueryException $e) {
            // Tangani kesalahan terkait constraint foreign key
            return back()->with('error', "Tidak bisa memperbarui Password");
        }
    }

    public function destroy($image_id)
{
    // Temukan item galeri berdasarkan ID
    $galleryItem = UserGallery::findOrFail($image_id);
    
    // Hapus item galeri
    $galleryItem->delete();
    
    // Redirect kembali ke halaman yang benar
    return redirect()->back()->with('success', 'Gambar berhasil dihapus');
}

public function cropImageUploadAjax(Request $request)
{
    $folderPath = public_path('upload/');

    $image_parts = explode(";base64,", $request->image);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);

    $imageName = uniqid() . '.png';

    $imageFullPath = $folderPath.$imageName;

    file_put_contents($imageFullPath, $image_base64);

     $saveFile = new userGallery;
     $saveFile->name = $imageName;
     $saveFile->save();

    return response()->json(['success'=>'Crop Image Uploaded Successfully']);
}


}
