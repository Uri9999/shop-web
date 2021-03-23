<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    //
    public function index() {
        return view('admin.index');
    }
    public function logout() {
        Auth::logout();
        return redirect()->to('login');
    }
}
