<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $datakas = \App\KasModel::all();
        $pemasukan = $datakas->where('jenis',0)->sum('nominal');
        $pengeluaran = $datakas->where('jenis',1)->sum('nominal');
        $jumlah = $pemasukan - $pengeluaran;
        $totallist = $datakas->count();

        return view('kas.home')
        ->with('data', $datakas)
        ->with('jumlah', $jumlah)
        ->with('totallist', $totallist);
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
