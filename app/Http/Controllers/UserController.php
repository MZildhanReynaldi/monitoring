<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\proyek;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $proyek = proyek::all();
        return view('dashboard', compact('user', 'proyek'));
    }

    public function beranda($id)
    {
        $proyek = proyek::where('id',$id)->first();
        return view('beranda_pl', compact('proyek'));
    }

    public function absensi()
    {
        return view('absensi.absensi');
    }

    public function tambah_absen(Request $request)
    {
        $absen = Absensi::where('user_id',auth()->user()->id)->latest()->first();

        $start = Carbon::createFromFormat('H:i','09:00'); 
        $end = Carbon::createFromFormat('H:i','12:00'); 
        $check = Carbon::now()->between($start,$end);

        if ($check == false) {
            notify()->error("Jam Absen Belum Dibuka ","Error","topRight");
            return redirect()->back();
        }


        if ($absen !== null and Carbon::parse($absen->created_at)->translatedFormat('d-m-Y') === Carbon::today()->translatedFormat('d-m-Y') ) {
            notify()->error("Anda Sudah Absen ","Error","topRight");
            return redirect()->back();
        }
        
        Absensi::create([
            'hadir' => $request->hadir,
            'kegiatan' =>$request->kegiatan,
            'kendala' =>$request->kendala,
            'user_id' => auth()->user()->id,
        ]);

        notify()->success("Absen Berhasil ","Success","topRight");
        return redirect()->back();
    }

    public function laporanabsensi()
    {
        $users= Absensi::all();
        
        return view('absensi.laporanabsensi',compact('users'));
    }

}
