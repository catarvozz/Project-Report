<?php
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\all_globalController;
use App\Http\Controllers\all_irdeptController;
use App\Http\Controllers\all_irdeptsumController;
use App\Http\Controllers\all_sumController;
use App\Http\Controllers\all_ticketingController;
use App\Http\Controllers\all_summaryController;
use App\Http\Controllers\edc_globalController;
use App\Http\Controllers\komplemen_voucherController;
use App\Http\Controllers\souvenir_fnbController;
use App\Http\Controllers\penyewaanController;
use App\Http\Controllers\penjualan_lainController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\summary_ticketingController;
use App\Http\Controllers\summary_globalController;
use App\Http\Controllers\menu_restoController;
use App\Http\Controllers\setoranController;
use App\Http\Controllers\master_itemsController;
use App\Http\Controllers\master_pecahanuangsController;
use App\Http\Controllers\master_usersController;
use App\Http\Controllers\userpasswordController;
use App\Http\Controllers\userprofileController;
use App\Http\Controllers\rincianuangController;

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

Route::get('/welcome',['middleware' => 'guest',dashboardController::class, 'index'])->name('welcome');

Route::get('/allglobal',['middleware' => 'guest',all_globalController::class, 'allglobal'])->name('allglobal');

Route::get('/allirdept',['middleware' => 'guest',all_irdeptController::class, 'allirdept'])->name('allirdept');

Route::get('/allirdeptsummary',['middleware' => 'guest',all_irdeptsumController::class, 'allirdeptsummary'])->name('allirdeptsummary');

Route::get('/allsummary',['middleware' => 'guest',all_summaryController::class, 'allsummary'])->name('allsummary');

Route::get('/allticketing',['middleware' => 'guest',all_ticketingController::class, 'allticketing'])->name('allticketing');

Route::get('/edcglobal',['middleware' => 'guest',edc_globalController::class, 'edcglobal'])->name('edcglobal');

Route::get('/komplemenvoucher',['middleware' => 'guest',komplemen_voucherController::class, 'komplemendanvoucher'])->name('komplemenvoucher');

Route::get('/souvenirfnb',['middleware' => 'guest',souvenir_fnbController::class, 'souvenirfnb'])->name('souvenirfnb');

Route::get('/penyewaan',['middleware' => 'guest',penyewaanController::class, 'index'])->name('penyewaan');

Route::get('/penjualanlain',['middleware' => 'guest',penjualan_lainController::class, 'index'])->name('penjualanlain');

Route::get('/summaryticketing',['middleware' => 'guest',summary_ticketingController::class, 'summaryticketing'])->name('summaryticketing');

Route::get('/summaryglobal',['middleware' => 'guest',summary_globalController::class, 'revenuesummary'])->name('summaryglobal');

// Route::get('/laporanmenu',['middleware' => 'guest',menu_restoController::class, 'menuresto'])->name('laporanmenu');

Route::get('/laporansetoran',['middleware' => 'guest',setoranController::class, 'setoran'])->name('laporansetoran');

Route::get('/login',['middleware' => 'guest',logoutController::class, 'login'])->name('login');

Route::get('/masterusers',['middleware' => 'guest',master_usersController::class, 'masterusers'])->name('masterusers');

Route::get('/formmasterusers',['middleware' => 'guest',master_usersController::class, 'formmasterusers'])->name('formmasterusers');

Route::get('/masterpecahanuangs',['middleware' => 'guest',master_pecahanuangsController::class, 'masterpecahanuangs'])->name('masterpecahanuangs');

Route::get('/formmasterpecahanuangs',['middleware' => 'guest',master_pecahanuangsController::class, 'formmasterpecahanuangs'])->name('formmasterpecahanuangs');

Route::get('/masteritems',['middleware' => 'guest',master_itemsController::class, 'masteritems'])->name('masteritems');

Route::get('/formmasteritems',['middleware' => 'guest',master_itemsController::class, 'formmasteritems'])->name('formmasteritems');

// route CRUD
Route::get('/penjualanlain/forminsert',['middleware' => 'guest',penjualan_lainController::class, 'penjualanlaininsert'])->name('forminsert');

Route::post('/penjualanlain/penjualanlainstore',['middleware' => 'guest',penjualan_lainController::class, 'penjualanlainstore'])->name('penjualanlainstore');

Route::get('/penjualanlain/penjualanlainedit/{reportsetoranpenjualanlain}',['middleware' => 'guest',penjualan_lainController::class, 'penjualanlainedit'])->name('penjualanlainedit');

Route::post('/penjualanlain/penjualanlainupdate/{reportsetoranpenjualanlain}',['middleware' => 'guest',penjualan_lainController::class, 'penjualanlainupdate'])->name('penjualanlainupdate');


Route::get('/penyewaan/forminsertpenyewaan',['middleware' => 'guest',penyewaanController::class, 'penyewaaninsert'])->name('forminsertpenyewaan');

Route::post('/penyewaan/penyewaanstore',['middleware' => 'guest',penyewaanController::class, 'penyewaanstore'])->name('penyewaanstore');

Route::get('/penyewaan/penyewaanedit/{reportsetoranpenyewaan}',['middleware' => 'guest',penyewaanController::class, 'penyewaanedit'])->name('penyewaanedit');

Route::post('/penyewaan/penyewaanupdate/{reportsetoranpenyewaan}',['middleware' => 'guest',penyewaanController::class, 'penyewaanupdate'])->name('penyewaanupdate');

// profile
Route::get('/userprofile',['middleware' => 'guest',userprofileController::class, 'userprofile'])->name('userprofile');

Route::get('/userpassword',['middleware' => 'guest',userpasswordController::class, 'userpassword'])->name('userpassword');

//rincianuang
Route::get('/rincianuang',['middleware' => 'guest',rincianuangController::class, 'rincianuang'])->name('rincianuang');

