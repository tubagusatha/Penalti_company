<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin_ui.index');
    }

    public function product(){
        return view('admin_ui.crud.products.index');
    }

    public function user(){
        return view('admin_ui.crud.users.index');
    }

    public function setting(){
        return view('admin_ui.setting.index');
    }

    public function carts(){
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
