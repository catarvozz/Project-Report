<?php
use App\Http\Controllers\mainController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/welcome',['middleware' => 'guest',mainController::class, 'index'])->name('welcome');

Route::get('/allglobal',['middleware' => 'guest',mainController::class, 'allglobal'])->name('allglobal');

Route::get('/allirdept',['middleware' => 'guest',mainController::class, 'allirdept'])->name('allirdept');

Route::get('/allirdeptsummary',['middleware' => 'guest',mainController::class, 'allirdeptsummary'])->name('allirdeptsummary');

Route::get('/allsummary',['middleware' => 'guest',mainController::class, 'allsummary'])->name('allsummary');

Route::get('/allticketing',['middleware' => 'guest',mainController::class, 'allticketing'])->name('allticketing');

Route::get('/edcglobal',['middleware' => 'guest',mainController::class, 'edcglobal'])->name('edcglobal');

Route::get('/komplemenvoucher',['middleware' => 'guest',mainController::class, 'komplemendanvoucher'])->name('komplemenvoucher');

Route::get('/souvenirfnb',['middleware' => 'guest',mainController::class, 'souvenirfnb'])->name('souvenirfnb');

Route::get('/penyewaan',['middleware' => 'guest',mainController::class, 'penyewaan'])->name('penyewaan');

Route::get('/penjualanlain',['middleware' => 'guest',mainController::class, 'penjualanlain'])->name('penjualanlain');

Route::get('/summaryticketing',['middleware' => 'guest',mainController::class, 'summaryticketing'])->name('summaryticketing');

Route::get('/summaryglobal',['middleware' => 'guest',mainController::class, 'revenuesummary'])->name('summaryglobal');

// Route::get('/laporanmenu',['middleware' => 'guest',menu_restoController::class, 'menuresto'])->name('laporanmenu');

// Route::get('/laporansetoran',['middleware' => 'guest',setoranController::class, 'setoran'])->name('laporansetoran');

Route::get('/login',['middleware' => 'guest',mainController::class, 'login'])->name('login');

Route::get('/masterusers',['middleware' => 'guest',mainController::class, 'masterusers'])->name('masterusers');

Route::get('/formmasterusers',['middleware' => 'guest',mainController::class, 'formmasterusers'])->name('formmasterusers');

Route::get('/masterpecahanuangs',['middleware' => 'guest',mainController::class, 'masterpecahanuangs'])->name('masterpecahanuangs');

Route::get('/formmasterpecahanuangs',['middleware' => 'guest',mainController::class, 'formmasterpecahanuangs'])->name('formmasterpecahanuangs');

Route::get('/masteritems',['middleware' => 'guest',mainController::class, 'masteritems'])->name('masteritems');

Route::get('/formmasteritems',['middleware' => 'guest',mainController::class, 'formmasteritems'])->name('formmasteritems');

// route CRUD
Route::get('/penjualanlain/forminsert',['middleware' => 'guest',mainController::class, 'penjualanlaininsert'])->name('forminsert');

Route::post('/penjualanlain/penjualanlainstore',['middleware' => 'guest',mainController::class, 'penjualanlainstore'])->name('penjualanlainstore');

Route::get('/penjualanlain/penjualanlainedit/{reportsetoranpenjualanlain}',['middleware' => 'guest',mainController::class, 'penjualanlainedit'])->name('penjualanlainedit');

Route::post('/penjualanlain/penjualanlainupdate/{reportsetoranpenjualanlain}',['middleware' => 'guest',mainController::class, 'penjualanlainupdate'])->name('penjualanlainupdate');


Route::get('/penyewaan/forminsertpenyewaan',['middleware' => 'guest',mainController::class, 'penyewaaninsert'])->name('forminsertpenyewaan');

Route::post('/penyewaan/penyewaanstore',['middleware' => 'guest',mainController::class, 'penyewaanstore'])->name('penyewaanstore');

Route::get('/penyewaan/penyewaanedit/{reportsetoranpenyewaan}',['middleware' => 'guest',mainController::class, 'penyewaanedit'])->name('penyewaanedit');

Route::post('/penyewaan/penyewaanupdate/{reportsetoranpenyewaan}',['middleware' => 'guest',mainController::class, 'penyewaanupdate'])->name('penyewaanupdate');

// profile
Route::get('/userprofile',['middleware' => 'guest',mainController::class, 'userprofile'])->name('userprofile');

Route::get('/userpassword',['middleware' => 'guest',mainController::class, 'userpassword'])->name('userpassword');

//rincianuang
Route::get('/rincianuang',['middleware' => 'guest',mainController::class, 'rincianuang'])->name('rincianuang');

//edc
Route::get('/edc',['middleware' => 'guest',mainController::class, 'edc'])->name('edc');

//masterkategori
Route::get('/masterkategori',['middleware' => 'guest',mainController::class, 'masterkategori'])->name('masterkategori');

//formmasterkategori
Route::get('/formmasterkategori',['middleware' => 'guest',mainController::class, 'formmasterkategori'])->name('formmasterkategori');

//formeditmasteruser
Route::get('/formeditmasteruser',['middleware' => 'guest',mainController::class, 'editusers'])->name('formeditmasteruser');

//formeditmasteruang
Route::get('/formeditmasteruang',['middleware' => 'guest',mainController::class, 'edituangs'])->name('formeditmasteruang');

//formeditmasteritem
Route::get('/formeditmasteritem',['middleware' => 'guest',mainController::class, 'edititems'])->name('formeditmasteritem');

//formeditmasterkategori
Route::get('/formeditmasterkategori',['middleware' => 'guest',mainController::class, 'editkategori'])->name('formeditmasterkategori');

