<?php

namespace App\Http\Controllers;

//use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $name)
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        return view('user.name', [
            'user' => $name,
            'alamat' => $request->alamat
            ]);
    }

    public function list()
    {
        $data = [
            ['name' => 'dandi', 'address' => 'tangerang'],
            ['name' => 'ady', 'address' => 'jkt'],
            ['name' => 'dahrul', 'address' => 'bogor']
        ];
        return view('user.list', [
            'data' => $data
            ]);
    }
}