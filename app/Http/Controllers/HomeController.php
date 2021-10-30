<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function kategori_all()
    {
        return view('home.kategori_all');
    }

    public function kategori_sub()
    {
        return view('home.kategori_sub');
    }

    public function cara_pembayaran()
    {
        return view('home.cara_pembayaran');
    }

    public function checkout()
    {
        return view('home.checkout');
    }
}
