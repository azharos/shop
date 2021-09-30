<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
        // return view('layout.backend');
    }

    public function produk()
    {
        return view('admin.produk');
    }
}
