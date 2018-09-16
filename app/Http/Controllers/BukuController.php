<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view('kas.home');
    }
    public function beranda(){
        return view('kas.beranda');
    }

    public function input(){
        return view('kas.input');
    }
    public function edit(){
        return view('kas.edit');
    }
}
