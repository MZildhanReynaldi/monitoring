<?php

namespace App\Http\Controllers;

use App\Models\proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $proyek = proyek::all();
        return view('dashboardadmin', compact('user','proyek'));
    }

    
}
