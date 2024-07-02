<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember_token') ? true : false;
        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        }else{
            return redirect('/')->with('error_messege', 'wrong email or pasword');
        }
    }
    
    public function logout() {
        Auth::logout(); // This will clear the authenticated user's session
    
        return redirect('/'); // Redirect to the homepage or any desired page after logout
    }
    
    

    
    public function register(Request $request) {
        try {
            $request->validate([
                'firstname' => 'required|string|min:2|max:50',
                'lastname' => 'required|string|min:2|max:50',
                'email' => 'required|email|unique:users,email',
                'number' => 'required|string', // Menggunakan regex untuk panjang digit
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            User::create([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'number' => $request->input('number'),
                'password' => Hash::make($request->input('password'))
            ]);
    
            return redirect('/');
        }       
        catch (ValidationException $e) {
            // Tangani kesalahan validasi
            return back()->withErrors($e->errors())->withInput();
        }
        catch (QueryException $e) {
            // Tangani kesalahan query, jika ada
            return back()->with('error', "Tidak bisa mendaftar. Coba lagi nanti.");
        }
    }
        
    
}
