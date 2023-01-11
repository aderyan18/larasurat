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

    public function showdatauser($id)
    {
        $data = User::find($id);
        // dd($data);
        return view('user.edituser', compact('data'));
    }

    public function updatedatauser($id)
    {
        $data = User::find($id);
        $data->name = request('name');
        $data->email = request('email');
        $data->password = bcrypt(request('password'));
        $data->save();
        return redirect('/datauser')->with(
            'status',
            'Data User Berhasil Diubah'
        );
    }

    public function deletedatauser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/datauser')->with(
            'status',
            'Data User Berhasil Dihapus'
        );
    }
}
