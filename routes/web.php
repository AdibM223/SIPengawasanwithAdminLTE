<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\SertifController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdministratorController;
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

//REGISTER






Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('guestuser');
Route::get('/useradmin', [AdministratorController::class, 'indexuser'])->name('useradmin')->middleware('administrator');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/masterregis', [MasterController::class, 'indexregis'])->middleware('guestuser');
Route::get('/masterregis/tambahregis', [MasterController::class, 'tambahregis'])->middleware('guestuser');
Route::post('/masterregis/inputmasterregis', [MasterController::class, 'inputregis'])->middleware('guestuser');
Route::get('/masterregis/deletemasterregis/{id}', [MasterController::class, 'hapusregis'])->middleware('guestuser');
Route::get('/masterregis/editmasterregis/{id}', [MasterController::class, 'editregis'])->middleware('guestuser');
Route::post('/masterregis/updatemasterregis', [MasterController::class, 'updateregis'])->middleware('guestuser');
Route::get('/masterregis/cari', [MasterController::class, 'cariregis'])->middleware('guestuser');
Route::get('/masterbu/cari', [MasterController::class, 'caribu'])->middleware('guestuser');



Route::get('/masterbu', [MasterController::class, 'indexbu'])->middleware('guestuser');
Route::get('/masterbu/tambahbu', [MasterController::class, 'tambahbu'])->middleware('guestuser');
Route::post('/masterbu/inputmasterbu', [MasterController::class, 'inputbu'])->middleware('guestuser');
Route::get('/deletemasterbu/{id}', [MasterController::class, 'hapusbu'])->middleware('guestuser');
Route::get('/masterbu/editmasterbu/{id}', [MasterController::class, 'editbu'])->middleware('guestuser');
Route::post('/masterbu/updatemasterbu', [MasterController::class, 'updatebu'])->middleware('guestuser');

Route::get('/mapsbu/{id}', [MasterController::class, 'indexmapsbu'])->middleware('guestuser');
Route::get('/mapsregis/{id}', [MasterController::class, 'indexmapsregis'])->middleware('guestuser');

Route::get('/regisbu', [RegisController::class, 'indexregis'])->middleware('guestuser');
Route::get('/regisbu/datacanvasing/{id}', [RegisController::class, 'indexcanvasing'])->middleware('guestuser');
Route::post('/regisbu/inputcanvasing', [RegisController::class, 'inputcanvasing'])->middleware('guestuser');
Route::get('/regisbu/dataupayalain/{id}', [RegisController::class, 'indexupaya'])->middleware('guestuser');
Route::post('/regisbu/inputupayalain', [RegisController::class, 'inputupayalain'])->middleware('guestuser');
Route::get('/regisbu/deleteupayalain/{id}', [RegisController::class, 'hapusupayalain'])->middleware('guestuser');
Route::get('/regisbu/deletecanvasing/{id}', [RegisController::class, 'hapuscanvasing'])->middleware('guestuser');

Route::get('/regisbu/tambahupayalain/{id}', [RegisController::class, 'tambahupaya'])->middleware('guestuser');
Route::get('/regisbu/tambahcanvasing/{id}', [RegisController::class, 'tambahcanvasing'])->middleware('guestuser');

 Route::get('/regisbu/edittahap1/{id}', [RegisController::class, 'registahap1'])->middleware('guestuser');
 Route::get('/regisbu/edittahap2/{id}', [RegisController::class, 'registahap2'])->middleware('guestuser');
 Route::get('/regisbu/edittahap3/{id}', [RegisController::class, 'registahap3'])->middleware('guestuser');
 Route::get('/regisbu/edittahap4/{id}', [RegisController::class, 'registahap4'])->middleware('guestuser');
 Route::get('/regisbu/edittahap5/{id}', [RegisController::class, 'registahap5'])->middleware('guestuser');

 Route::post('/regisbu/updatetahap1', [RegisController::class, 'updatetahap1'])->middleware('guestuser');
 Route::post('/regisbu/updatetahap2', [RegisController::class, 'updatetahap2'])->middleware('guestuser');
 Route::post('/regisbu/updatetahap3', [RegisController::class, 'updatetahap3'])->middleware('guestuser');
 Route::post('/regisbu/updatetahap4', [RegisController::class, 'updatetahap4'])->middleware('guestuser');
 Route::post('/regisbu/updatetahap5', [RegisController::class, 'updatetahap5'])->middleware('guestuser');
 Route::get('/regisbu/export_excel', [RegisController::class, 'export_excel'])->middleware('guestuser');

Route::get('/ajuansertif', [SertifController::class, 'indexajuan'])->middleware('guestuser');
Route::get('/ajuansertif/penyerahan/{id}', [SertifController::class, 'penyerahan'])->middleware('guestuser');
Route::get('/ajuansertif/tambahajuan', [SertifController::class, 'tambahajuan'])->middleware('guestuser');
Route::post('/ajuansertif/inputajuan', [SertifController::class, 'inputajuan'])->middleware('guestuser');
Route::get('/ajuansertif/editajuan/{id}', [SertifController::class, 'editajuan'])->middleware('guestuser');
Route::post('/ajuansertif/updateajuan', [SertifController::class, 'updateajuan'])->middleware('guestuser');
Route::get('/ajuansertif/deleteajuan/{id}', [SertifController::class, 'deleteajuan'])->middleware('guestuser');
Route::get('/ajuansertif/cetaktandaajuan/{id}', [SertifController::class, 'cetaktandaterima'])->middleware('guestuser');


//route regster new guest user
Route::get('/useradmin/tambahuser', [AdministratorController::class, 'register'])->name('register')->middleware('administrator');
Route::post('/useradmin/inputuser', [AdministratorController::class, 'actionregister'])->name('actionregister')->middleware('administrator');
Route::get('/useradmin/edituser/{id}', [AdministratorController::class, 'registerupdate'])->name('registerupdate')->middleware('administrator');
Route::post('/useradmin/updateuser', [AdministratorController::class, 'actionregisterupdate'])->name('actionregisterupdate')->middleware('administrator');
Route::get('/useradmin/deleteuser/{id}', [AdministratorController::class, 'registerdelete'])->name('registerdelete')->middleware('administrator');

//route for preload
Route::get('/preload', [AdministratorController::class, 'regispreload'])->name('regispreload');
Route::post('/preload/inputuser', [AdministratorController::class, 'actionregispreload'])->name('actionregispreload');

//route dashboard tahap
Route::get('/dashboard/tahap1', [HomeController::class, 'indexdsbregis1'])->middleware('guestuser');
Route::get('/dashboard/tahap2', [HomeController::class, 'indexdsbregis2'])->middleware('guestuser');
Route::get('/dashboard/tahap3', [HomeController::class, 'indexdsbregis3'])->middleware('guestuser');
Route::get('/dashboard/tahap4', [HomeController::class, 'indexdsbregis4'])->middleware('guestuser');
Route::get('/dashboard/tahap5', [HomeController::class, 'indexdsbregis5'])->middleware('guestuser');
Route::get('/dashboard/tahapcanvas', [HomeController::class, 'indexdsbregiscanvas'])->middleware('guestuser');
Route::get('/dashboard/tahapupaya', [HomeController::class, 'indexdsbregisupaya'])->middleware('guestuser');