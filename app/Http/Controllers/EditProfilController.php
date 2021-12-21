<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class EditProfilController extends Controller
{
    public function view_editprofil()
    {
        return view('editprofil');
    }

    public function update(Request $request)
    {
        $user = User::where('id', auth()->user()->id);

        if ($request->password) {
            $password = bcrypt($request->password);
        } else {
            $password = $user->first()->password;
        }

        if ($request->gambar) {
            $gambar = $request->file('gambar')->store('', 'public');
        } else {
            $gambar = $user->first()->gambar;
        }

        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'password' => $password,
            'gambar' => $gambar,
        ]);

        notify()->success("Data Berhasil Diupdate","Success","topRight");
        return redirect()->back();
    }
}
