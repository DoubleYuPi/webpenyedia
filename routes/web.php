<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Models\Penyedia;

use App\Models\Pekerjaan;
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


Route::get('/',[HomeController::class,'index']);

Route::get('/beranda',[HomeController::class,'redirect']);

//Route::get('/tabel_nilai',[AdminController::class,'tabel_penyedia']);

//Route::get('/chart', [HighchartController::class, 'handleChart']);

Route::get('/admindashboard',[AdminController::class,'admindashboard']);

Route::get('/datapenyedia',[AdminController::class,'tabelpenyedia'])->name('datapenyedia');

Route::get('/tambahpenyedia',[AdminController::class,'tambahpenyedia']);

Route::post('/insertpenyedia',[AdminController::class,'insertpenyedia']);

Route::get('/editpenyedia/{id}',[AdminController::class,'editpenyedia']);

Route::post('/updatepenyedia/{id}',[AdminController::class,'updatepenyedia']);

Route::get('/deletepenyedia/{id}',[AdminController::class,'deletepenyedia']);

Route::get('/datapekerjaan',[AdminController::class,'tabelpekerjaan'])->name('datapekerjaan');

Route::get('/tambahpekerjaan',[AdminController::class,'tambahpekerjaan']);

Route::post('/insertpekerjaan',[AdminController::class,'insertpekerjaan']);

Route::get('/editpekerjaan/{id}',[AdminController::class,'editpekerjaan']);

Route::post('/updatepekerjaan/{id}',[AdminController::class,'updatepekerjaan']);

Route::get('/deletepekerjaan/{id}',[AdminController::class,'deletepekerjaan']);

Route::get('/datauser',[AdminController::class,'tabeluser'])->name('datauser');

Route::get('/tambahuser',[AdminController::class,'tambahuser']);

Route::post('/insertuser',[AdminController::class,'insertuser']);

Route::get('/edituser/{id}',[AdminController::class,'edituser']);

Route::post('/updateuser/{id}',[AdminController::class,'updateuser']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/datanilai_penyedia',[AdminController::class,'tabelnilai_penyedia'])->name('datanilai_penyedia');

Route::get('/nilaipekerjaan/{penyedia}',[AdminController::class,'showpekerjaan'])->name('showpekerjaan');

Route::get('/nilaipekerjaan',[AdminController::class,'showpekerjaanppk'])->name('showpekerjaanppk');

Route::get('/nilai/{id}',[AdminController::class,'nilaipekerjaan']);

Route::post('/updatenilaipekerjaan/{id}',[AdminController::class,'update_nilaipekerjaan']);

Route::get('/bahp/{id}',[AdminController::class,'bahppekerjaan']);

Route::post('/updatebahppekerjaan/{id}',[AdminController::class,'update_bahppekerjaan']);

Route::get('pekerjaans/{id}/download',[AdminController::class,'download'])->name('pekerjaans.download');

Route::get('/profilpenyedia/{penyedia}',[AdminController::class,'showpenyedia'])->name('showpenyedia');

/*Route::get('/penyedias/{penyedia}', function (Penyedia $penyedia) {
    return view('admin.test', [
        'pekerjaans' => $penyedia->pekerjaan
    ],compact('penyedia'));
});*/

/*Route::get('/penyedia/{penyedia:id}', function (Penyedia $penyedia) {
    return view ('penyedia',[
        'title' => $penyedia->nama,
        'nama' => $penyedia->nama,
        'pekerjaan'=>$penyedia->pekerjaan
    ]);
});

Route::get('/penyedia', function () {
    return view ('penyedia',[
        'title' => 'List Penyedia',
        'penyedia'=> Penyedia::all()
    ]);
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
