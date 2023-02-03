<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AboutUsWebController;
use App\Http\Controllers\BanneraboutusController;
use App\Http\Controllers\BannercontactController;
use App\Http\Controllers\BannerhomepageController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\ReturnCarController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MetaController;
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

Route::get('/mobil', function () {
    return redirect('homepage');
});

//banner
Route::get('banner', [BannerController::class, 'indexBanner'])->name('banner');
Route::post('/banner_add', [BannerController::class, 'create'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::get('/banner_delete/{id}', [BannerController::class, 'delete'])->middleware('checkRole:admin')->middleware('checkRole:admin');
// Route::post('/banner_update/{id}', [BannerController::class, 'update'])->middleware('checkRole:admin')->middleware('checkRole:admin');

//bannerhomepage
Route::get('bannerhome', [BannerhomepageController::class, 'indexBanner'])->name('bannerhome');
Route::post('/bannerhome_add', [BannerhomepageController::class, 'create'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::get('/bannerhome_delete/{id}', [BannerhomepageController::class, 'delete'])->middleware('checkRole:admin')->middleware('checkRole:admin');

//banneraboutus
Route::get('banneraboutus', [BanneraboutusController::class, 'indexBanner'])->name('banneraboutus');
Route::post('/banneraboutus_add', [BanneraboutusController::class, 'create'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::get('/banneraboutus_delete/{id}', [BanneraboutusController::class, 'delete'])->middleware('checkRole:admin')->middleware('checkRole:admin');

//bannercontact
Route::get('bannercontact', [BannercontactController::class, 'indexBanner'])->name('bannercontact');
Route::post('/bannercontact_add', [BannercontactController::class, 'create'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::get('/bannercontact_delete/{id}', [BannercontactController::class, 'delete'])->middleware('checkRole:admin')->middleware('checkRole:admin');


//meta
Route::get('/add-meta',[MetaController::class,'addmeta'])->name('add.meta');
Route::post('/store-meta',[MetaController::class,'storemeta'])->name('store.meta');
//Route::get('/list-meta',[MetaController::class,'listmeta'])->name('list.meta');
Route::get('/homepage/{id}',[WebController::class,'index']);

Route::get('/', [DashboardController::class, 'index']);
Route::get("/mobil-matic",[DashboardController::class, 'mobilMatic']);
Route::get("/mobil-manual",[DashboardController::class, 'mobilManual']);
Route::get("/all-cars",[DashboardController::class, 'allCars']);
Route::get('aboutUs', [AboutUsWebController::class, 'indexWeb'])->name('about');
Route::get('aboutUsAdm', [AboutUsController::class, 'indexAdm'])->name('about.adm')->middleware('checkRole:admin');
Route::get('/about_delete/{id}', [AboutUsController::class, 'delete'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::post('/about_add', [AboutUsController::class, 'create'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::post('/about_update/{id}', [AboutUsController::class, 'update'])->middleware('checkRole:admin')->middleware('checkRole:admin');
//web
Route::get('homepage', [WebController::class, 'index']);
Route::get('car_detail/{id}', [WebController::class, 'detailCar'])->name('car.detail');
Route::post('/car_search', [WebController::class, 'searchCar']);
Route::post('/register_customer', [WebController::class, 'registCustomer']);
Route::get('/rental_car/{id}', [WebController::class, 'rentalCar']);
// Route::get('car_detail/{id}/cetak_pdf', [TransactionController::class, 'pdf'])->name('cetak.detail');

//marketing
Route::get('marketing', [MarketingController::class, 'index'])->name('marketing')->middleware('checkRole:admin,marketing');
Route::get('marketing/{id}/cetak_pdf', [MarketingController::class, 'pdfmarketing'])->name('cetak2_pdf')->middleware('checkRole:admin,marketing');
Route::get('cetakall_pdf', [MarketingController::class, 'pdfmarketingall'])->name('cetak3_pdf')->middleware('checkRole:admin,marketing');

Auth::routes();
//user
Route::post('/log_out_admin', [UserController::class, 'log_out_admin']);
Route::post('/log_out_customer', [UserController::class, 'log_out_customer']);
//user admin
Route::get('/users', [UserController::class, 'indexAdmin'])->middleware('checkRole:admin');
Route::get('/user_delete/{id}', [UserController::class, 'deleteAdmin'])->middleware('checkRole:admin');
Route::post('/user_add', [UserController::class, 'createAdmin'])->middleware('checkRole:admin');
Route::post('/user_update/{id}', [UserController::class, 'updateAdmin'])->middleware('checkRole:admin');

//user customer
Route::get('/customers', [UserController::class, 'indexCustomer'])->middleware('checkRole:admin');
Route::get('/customer_delete/{id}', [UserController::class, 'deleteCustomer'])->middleware('checkRole:admin');
Route::post('/customer_add', [UserController::class, 'createCustomer'])->middleware('checkRole:admin');
Route::post('/customer_update/{id}', [UserController::class, 'updateCustomer'])->middleware('checkRole:admin');

//home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [AboutUsWebController::class, 'contact'])->name('contact');
//vendors
Route::get('/vendors', [VendorController::class, 'index'])->middleware('checkRole:admin');
Route::get('/vendor_delete/{id}', [VendorController::class, 'delete'])->middleware('checkRole:admin');
Route::post('/vendor_add', [VendorController::class, 'create'])->middleware('checkRole:admin');
Route::post('/vendor_update/{id}', [VendorController::class, 'update'])->middleware('checkRole:admin');

//banks
Route::get('/banks', [BankController::class, 'index'])->middleware('checkRole:admin');
Route::get('/bank_delete/{id}', [BankController::class, 'delete'])->middleware('checkRole:admin');
Route::post('/bank_add', [BankController::class, 'create'])->middleware('checkRole:admin');
Route::post('/bank_update/{id}', [BankController::class, 'update'])->middleware('checkRole:admin');
//whatsapp
Route::get('/whatsapp', [WhatsappController::class, 'index'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::get('/whatsapp_delete/{id}', [WhatsappController::class, 'delete'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::post('/whatsapp_add', [WhatsappController::class, 'create'])->middleware('checkRole:admin')->middleware('checkRole:admin');
Route::post('/whatsapp_update/{id}', [WhatsappController::class, 'update'])->middleware('checkRole:admin')->middleware('checkRole:admin');

//cars
Route::get('/cars', [CarController::class, 'index'])->middleware('checkRole:admin');
Route::get('/car_delete/{id}', [CarController::class, 'delete'])->middleware('checkRole:admin');
Route::post('/car_add', [CarController::class, 'create'])->middleware('checkRole:admin');
Route::post('/car_update/{id}', [CarController::class, 'update'])->middleware('checkRole:admin');
Route::get('car/{id}/cetak_pdf', [CarController::class, 'pdf'])->name('cetak.pdf')->middleware('checkRole:admin');


//transaction
Route::post('/transaction_add', [TransactionController::class, 'createOnline']);
Route::post('/transaction_get_report', [TransactionController::class, 'getReport']);
Route::post('/transaction_upload/{id}', [TransactionController::class, 'uploadBukti']);
Route::get('/transaction_order/{id}', [TransactionController::class, 'OrderCar']);
Route::get('/transactions', [TransactionController::class, 'index'])->middleware('checkRole:admin');
Route::get('/transaction_return', [TransactionController::class, 'indexReturn'])->middleware('checkRole:admin');
Route::get('/transaction_action/{id}/{status}', [TransactionController::class, 'changeStatus'])->middleware('checkRole:admin');
Route::get('/transaction_print_invoice/{id}', [TransactionController::class, 'print_pdf_invoice'])->middleware('checkRole:admin');
Route::get('/transaction_car/{id}', [TransactionController::class, 'changeStatusDone'])->middleware('checkRole:admin');
Route::get('/report/transactions', [TransactionController::class, 'indexReport'])->middleware('checkRole:admin');

Route::get("/leaderboard-admin" , [LeaderboardController::class, 'index'])->name("leaderboard.admin");
Route::post("/leaderboard-admin-input" , [LeaderboardController::class, 'input'])->name("add.penjualan");


Route::get("/leaderboard" , [LeaderboardController::class, 'marketing_index'])->name("leaderboard.index");

//search
Route::get('/search-product',[DashboardController::class,'search_products'])->name('search.products');
Route::get('/sort-by',[DashboardController::class,'sort_by'])->name('sort.by');
