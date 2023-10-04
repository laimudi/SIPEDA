<?php

use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BidangController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\TextFormulirController;
use App\Http\Controllers\Anggota\AnggotaController;
use App\Http\Controllers\Anggota\PendaftaranController;
use App\Http\Controllers\ketua_org\DaftarMhsController;
use App\Http\Controllers\ketua_org\DaftarPengurusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Pengguna
// Route::get('/', function () {
//     return view('pengguna.home');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'sejarah']);


// Login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'storeLogin']);

    Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'storeRegister']);
});




Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
        // Admin
        // Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/profil', ProfilController::class);
        Route::resource('/pengurus', PengurusController::class);
        Route::resource('/bidang', BidangController::class);
        Route::resource('/galeri', GaleriController::class);
        Route::resource('/berita', BeritaController::class);
        Route::resource('/mahasiswa', MahasiswaController::class);
        Route::resource('/pengumuman', PengumumanController::class);
        Route::resource('/agenda', AgendaController::class);
        Route::resource('/textfor', TextFormulirController::class);

        // Cetak Mahasiswa
        Route::get('/admin/mahasiswa/cetak', [MahasiswaController::class, 'cetakPdf'])->name('cetak.pdf');

        // });
    });

    // Anggota
    Route::group(['middleware' => ['role:anggota'], 'prefix' => 'anggota'], function () {
        Route::get('/', [App\Http\Controllers\Anggota\DashboardController::class, 'index'])->name('anggota.dashboard');
        Route::resource('/anggota', AnggotaController::class);
        Route::resource('/pendaftaran', PendaftaranController::class);

        //cetak Formulir
        Route::get('anggota/cetakFormulir/{id}', [\App\Http\Controllers\Anggota\PendaftaranController::class, 'cetakFormulir'])->name('cetak.formulir');
    });



    // Ketua-Org
    Route::group(['middleware' => ['role:ketua_org'], 'prefix' => 'ketua_org'], function () {
        Route::get('/', [App\Http\Controllers\ketua_org\DashboardController::class, 'index'])->name('ketua-org.dashboard');
        Route::resource('/daftarPrs', DaftarPengurusController::class);
        Route::resource('/daftarmhs', DaftarMhsController::class);
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
