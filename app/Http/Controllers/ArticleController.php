<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = \App\ArticleModel::all();

        return view('article')->with('data', $data);
    }
}
