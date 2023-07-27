<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanUtamaController;

// AGEN
use App\Http\Controllers\ProfileAgenController;
use App\Http\Controllers\Auth\RegisteredAgenController;
use App\Http\Controllers\LoginAgenController;
use App\Http\Controllers\AgenInfoController;

// ADMIN
use App\Http\Controllers\InformasiAgenController;
use App\Http\Controllers\HalamanAdminController;
use App\Http\Controllers\CekmgmController;
use App\Http\Controllers\InformasiActionController;
use App\Http\Controllers\Auth\RegisteredAdminEduController;
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;



use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});


Route::group(
    ['middleware' => ['guest']],
    function () {
        Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');

        Route::post('/login', [AuthenticatedSessionController::class, 'authenticate']);
        Route::post('/logout', [AuthenticatedSessionController::class, 'logout']);

        Route::get('/register', [RegisteredUserController::class, 'create']);
        Route::post('/register', [RegisteredUserController::class, 'store']);

        //REGISTER ADMIN
        Route::get('/adminedu/register', [RegisteredAdminEduController::class, 'create'])->name('register.adminedu');
        Route::post('/adminedu/register', [RegisteredAdminEduController::class, 'store']);

        //LOGIN ADMIN
        Route::get('/adminedu/login', [AdminAuthenticatedSessionController::class, 'create']);
        Route::post('/adminedu/login', [AdminAuthenticatedSessionController::class, 'store']);

        //CRUD Register AGEN
        Route::get('/agen/register', [RegisteredAgenController::class, 'create'])->name('register.agen');
        Route::post('/agen/register', [RegisteredAgenController::class, 'store']);

        //CRUD Login AGEN
        Route::get('/agen/login', [LoginAgenController::class, 'index']);
        Route::post('/agen/login', [LoginAgenController::class, 'store']);
    }
);

Route::group(
    ['middleware' => ['role:adminedu']], function(){
        //Halaman Utama Admin
        Route::get('/admin_edu', [HalamanAdminController::class, 'index']);

        //Cek MGM
        Route::get('/admin_edu/cek_mgm', [CekmgmController::class, 'index']);

        //CRUD Informasi Agen (Action Delete)
        Route::get('/admin_edu/informasi_agen', [InformasiAgenController::class, 'index']);
        Route::delete('/admin_edu/informasi_agen/{users:id}', [InformasiAgenController::class, 'destroy']);
    }
);

Route::group(
    ['middleware' => ['role:agen']], function(){
        //CRUD Profile
        // Route::get('agen/profile/create', [ProfileAgenController::class, 'create']);
        // Route::post('/agen/profile', [ProfileAgenController::class, 'store']);
        // Route::get('/agen/profile', [ProfileAgenController::class, 'index']);
        // Route::get('/agen/profile/{users:id}', [ProfileAgenController::class, 'show']);
        // Route::get('/agen/edit_profile/{users:id}/edit', [ProfileAgenController::class, 'edit']);
        // Route::post('/agen/edit_profile/{users:id}', [ProfileAgenController::class, 'update']);

        // Route::get('/agen/profile', [ProfileAgenController::class, 'index']);
        // Route::get('/agen/editprofile', [ProfileAgenController::class, 'create']);
        // Route::put('/agen/editprofile/{profile__agen:id}', [ProfileAgenController::class, 'update']);

        
        Route::get('/agen/editprofile', [ProfileAgenController::class, 'create']);
        Route::post('/agen/profile',[ProfileAgenController::class, 'store']);
        Route::get('/agen/profile', [ProfileAgenController::class, 'index']);
        Route::get('/agen/editprofile/{id}', [ProfileAgenController::class, 'show']);

        // Route::get('pengingat/create','PengingatController@create');
        // Route::post('/pengingat','PengingatController@store');
        // Route::get('/pengingat','PengingatController@index');
        // Route::get('/pengingat/{pengingat_id}','PengingatController@show');

        //Informasi
        // Route::get('/agen/informasi', [AgenInfoController::class, 'index']);
        // Route::get('/agen/informasi', function () {
        //     return view('agen.informasi');
        // });
        Route::get('/agen/informasi', [AgenInfoController::class, 'index']);

        //Bantuan
        // Route::get('/agen/bantuan', [AgenBantuanController::class, 'index']);
        Route::get('/agen/bantuan', function () {
            return view('agen.bantuan');
        });
    }
);

//CRUD Halaman Utama untuk Admin, Agen dan Calon Mahasiswa
Route::get('/dashboard', [HalamanUtamaController::class, 'index'])->name('dashboard');

require __DIR__.'/auth.php';
