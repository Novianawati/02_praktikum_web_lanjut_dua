<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "2041720173 Novianawati";
    }

    public function articles(){
        return "Halaman Artikel dengan Id $id";
    }
}
