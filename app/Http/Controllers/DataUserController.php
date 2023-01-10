<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Str;

class DataUserController extends Controller
{
    public function index()
    {
        $data = User::all();
        // dd($data);
        return view('user.datauser', compact('data'));
    }

    public function adduser()
    {
        return view('user.tambahuser');
    }

    public function insertdatauser(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/datauser')->with(
            'status',
            'Data User Berhasil Ditambahkan'
        );
    }
}
