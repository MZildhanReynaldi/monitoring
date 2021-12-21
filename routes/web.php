<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CRUDPenggunaController;
use App\Http\Controllers\EditprofilController;
use App\Http\Controllers\ProyekController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('sigin');

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('homeadmin', [AdminController::class, 'index'])->name('admin');
        Route::get('pengguna', [CRUDPenggunaController::class, 'view_pengguna'])->name('view_pengguna');
        Route::get('tambah', [CRUDPenggunaController::class, 'view_tambah']);
        Route::post('tambah', [CRUDPenggunaController::class, 'store'])->name('tambah_akun');
        Route::delete('hapus/{id}', [CRUDPenggunaController::class, 'hapus'])->name('hapus_akun');
        Route::get('edit/{id}', [CRUDPenggunaController::class, 'ubah'])->name('edit_akun');
        Route::patch('edit/{id}', [CRUDPenggunaController::class, 'update'])->name('update_akun');
        Route::get('laporanabsensi', [UserController::class, 'laporanabsensi'])->name('laporanabsensi');

        Route::prefix('proyek')->group(function () {
            Route::get('/', [ProyekController::class, 'index'])->name('index');
            Route::get('tambah', [ProyekController::class, 'create'])->name('proyek');
            Route::post('tambah', [ProyekController::class, 'store'])->name('tambah_proyek');
            Route::get('edit/{id}', [ProyekController::class, 'edit'])->name('edit_proyek');
            Route::patch('edit/{id}', [ProyekController::class, 'update'])->name('update_proyek');
            Route::delete('hapus/{id}', [ProyekController::class, 'destroy'])->name('hapus_proyek');
            
        });



        // Route::resource('proyek', ProyekController::class);



    });

    Route::middleware(['pekerja_lapangan'])->group(function () {
        Route::get('user', [UserController::class, 'index'])->name('dashboardpl');
        Route::get('beranda/{id}', [UserController::class, 'beranda'])->name('beranda');
        Route::get('dashboard', [UserController::class, 'dashboard']);
        Route::get('absensi', [UserController::class, 'absensi'])->name('absensi');
        Route::post('absensi', [UserController::class, 'tambah_absen'])->name('tambah_absen');
    });

    Route::patch('update', [EditprofilController::class, 'update'])->name('update');

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
