<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UtamaController;
use App\Http\Controllers\User\RentalController;
use App\Http\Controllers\Admin\InputrentalController;
use App\Http\Controllers\Admin\PaketrentalController;
use App\Http\Controllers\Admin\DatarentalController;
use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\Admin\BokingController;

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
    return view('utama');


});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/utama', [HomeController::class, 'utama'])->name('utama');


//User
Route::get('/rental', [RentalController::class, 'createrental'])->name('user.rental');
Route::get('/paketrental', [RentalController::class, 'paket'])->name('user.paketrental');
Route::post('/rental', [RentalController::class, 'store'])->name('user.rental.store');
Route::get('/informasirental', [RentalController::class, 'informasirental'])->name('user.informasirental');
Route::get('/jenismobil', [RentalController::class, 'pilihan'])->name('user.jenismobil');
Route::get('/mobilboking', [RentalController::class, 'daftarboking'])->name('user.mobilboking');



//Admin
Route::get('/inputrental', [InputrentalController::class, 'create1'])->name('admin.inputrental');
Route::post('/inputrental', [InputrentalController::class, 'store'])->name('admin.inputrental.store');
Route::get('/showinput', [InputrentalController::class, 'showinput'])->name('admin.showinput');
Route::get('/editrental/{input}', [InputrentalController::class, 'editrental'])->name('admin.editrental');
Route::patch('/editrental/{id}', [InputrentalController::class, 'update'])->name('admin.editrental.update');
Route::delete('/showinput/{input}', [InputrentalController::class, 'destroy'])->name('admin.showinput.delete');

Route::get('/inputinfo', [PaketrentalController::class, 'inputinfo'])->name('admin.informasi.inputinfo');
Route::post('/inputinfo', [PaketrentalController::class, 'store'])->name('admin.informasi.inputinfo.store');
Route::get('/showinfo', [PaketrentalController::class, 'showinfo'])->name('admin.informasi.showinfo');
Route::get('/editpaket/{paket}', [PaketrentalController::class, 'editpaket'])->name('admin.informasi.editpaket');
Route::patch('/editpaket/{id}', [PaketrentalController::class, 'update'])->name('admin.informasi.editpaket.update');
Route::delete('/showinfo/{paket}', [PaketrentalController::class, 'destroy'])->name('admin.informasi.showinfo.delete');

Route::get('/datarental', [DatarentalController::class, 'datarental'])->name('admin.datarental');
Route::get('/detailaporan', [DatarentalController::class, 'showlaporan'])->name('admin.detaillaporan');
Route::get('/editlaporan/{id}', [DatarentalController::class, 'editlaporan'])->name('admin.editlaporan');
Route::patch('/update/{id}', [DatarentalController::class, 'updatelaporan'])->name('admin.editlaporan.update');
Route::delete('/detaillaporan/{rental}', [DatarentalController::class, 'destroy'])->name('admin.detaillaporan.delete');

Route::get('/inputmobil', [MobilController::class, 'inputmobil'])->name('admin.mobil.inputmobil');
Route::post('/inputmobil', [MobilController::class, 'store'])->name('admin.mobil.inputmobil.store');
Route::get('/detailmobil', [MobilController::class, 'detailmobil'])->name('admin.mobil.detailmobil');
Route::get('/editmobil/{mobil}', [MobilController::class, 'editmobil'])->name('admin.mobil.editmobil');
Route::patch('/editmobil/{id}', [MobilController::class, 'update'])->name('admin.mobil.editmobil.update');
Route::delete('/detailmobil/{mobil}', [MobilController::class, 'destroy'])->name('admin.mobil.detailmobil.delete');

Route::get('/inputboking', [BokingController::class, 'inputboking'])->name('admin.boking.inputboking');
Route::post('/inputboking', [BokingController::class, 'store'])->name('admin.boking.inputboking.store');
Route::get('/detailboking', [BokingController::class, 'detailboking'])->name('admin.boking.detailboking');
Route::get('/editboking{boking}', [BokingController::class, 'editboking'])->name('admin.boking.editboking');
Route::patch('/editboking/{id}', [BokingController::class, 'update'])->name('admin.boking.editboking.update');
Route::delete('/detailboking/{boking}', [BokingController::class, 'destroy'])->name('admin.boking.detailboking.delete');
