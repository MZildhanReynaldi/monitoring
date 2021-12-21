<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class CRUDPenggunaController extends Controller
{
    //
    public function view_pengguna()
    {
        $user = Auth::user();
        $users = user::all();
        return view('pengguna', compact('user', 'users'));
    }

    //tambah akun
    public function view_tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        if ($request->gambar) {
            $gambar = $request->file('gambar')->store('', 'public');
        } else {
            $gambar = 'user.png';
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'gambar' => $gambar,
            'role' => $request->role,
        ]);

        notify()->success("Tambah Akun Berhasil ","Success","topRight");
        return redirect('pengguna');
    }


    //hapus akun
    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect('pengguna');
    }


    //edit akun
    public function ubah($id)
    {
    
        $akun = User::where('id',$id)->first();
        return view('ubah', compact('akun'));
    }

    //update akun
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id);


        if ($request->gambar) {
            $gambar = $request->file('gambar')->store('', 'public');
        } else {
            $gambar = $user->first()->gambar;
        }

        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'role' => $request->role,
            'gambar' => $gambar,
        ]);

        return redirect('pengguna');
    }
}

