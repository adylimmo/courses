<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $datakas = \App\KasModel::all();
        $jumlah = \App\KasModel::all()->sum('nominal');

        return view('kas.home')
        ->with('data', $datakas)
        ->with('jumlah', $jumlah);
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
