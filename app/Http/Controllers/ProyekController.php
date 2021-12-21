<?php

namespace App\Http\Controllers;

use App\Models\proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $proyek = Proyek::all();
        return view('dashboardadmin', compact('user','proyek'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyek.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->gambar) {
            $gambar = $request->file('gambar')->store('', 'public');
        } else {
            $gambar = 'user.png';
        }

        proyek::create([
            'nama_proyek' => $request->nama_proyek,
            'gambar' => $gambar,
            'maps' => $request->maps,
            'kontrak' => $request->kontrak

        ]);

        
        notify()->success("Proyek Berhasil di tambah ","Success","topRight");
        return redirect('proyek');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function show(proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function edit(proyek $proyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proyek $proyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(proyek $proyek)
    {
        //
    }
}
