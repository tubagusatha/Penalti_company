<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin_ui.index');
    }

    public function user(){
        return view('admin_ui.crud.users.index');
    }

    public function charts(){
        return view('admin_ui.charts');
    }

    public function signin(){
        return view('admin_ui.auth.sign-in.index');
    }

    public function signup(){
        return view('admin_ui.auth.sign-up.index');
    }

    public function resetpassword(){
        return view('admin_ui.auth.reset-password.index');
    }

    public function forgotpassword(){
        return view('admin_ui.auth.forgot-password.index');
    }

    public function profilelock(){
        return view('admin_ui.auth.profile-lock.index');
    }   
}
