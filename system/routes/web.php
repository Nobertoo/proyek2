 <?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\AuthController;
 use App\Http\Controllers\PenyakitController;
 use App\Http\Controllers\GejalaController;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\LokasiController;
 use App\Http\Controllers\ClientController;

/*
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


Route::get('/', [ClientController::class, 'beranda']);
Route::get('index', [ClientController::class, 'beranda']);
Route::get('penyakitclient', [ClientController::class, 'penyakit']);



Route::get('datagejala', [HomeController::class, 'showDatagejala']);
Route::get('datalokasi', [HomeController::class, 'showDatalokasi']);
Route::get('client', [HomeController::class, 'showClient']);

/*Crud Penyakit*/
Route::get('datapenyakit', [PenyakitController::class, 'index']);
Route::get('datapenyakit/create', [PenyakitController::class, 'create']);
Route::post('datapenyakit', [PenyakitController::class, 'store']);
Route::get('datapenyakit/{penyakit}/edit', [PenyakitController::class, 'edit']);
Route::put('datapenyakit/update/{penyakit}', [PenyakitController::class, 'update']);
Route::delete('datapenyakit/delete/{penyakit}', [PenyakitController::class, 'destroy']);
/*Crud Gejala*/
Route::get('datagejala', [GejalaController::class, 'index']);
Route::get('datagejala/create', [GejalaController::class, 'create']);
Route::post('datagejala', [GejalaController::class, 'store']);
Route::get('datagejala/{gejala}/edit', [GejalaController::class, 'edit']);
Route::put('datagejala/update/{gejala}', [GejalaController::class, 'update']);
Route::delete('datagejala/delete/{gejala}', [GejalaController::class, 'destroy']);

/*Crud User*/
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/update/{user}', [UserController::class, 'update']);
Route::delete('user/delete/{user}', [UserController::class, 'destroy']);

Route::get('lokasi', [LokasiController::class, 'index']);
Route::get('lokasi/create', [LokasiController::class, 'create']);
Route::post('lokasi', [LokasiController::class, 'store']);
Route::get('lokasi/{lokasi}/edit', [LokasiController::class, 'edit']);
Route::put('lokasi/update/{lokasi}', [LokasiController::class, 'update']);
Route::delete('lokasi/delete/{lokasi}', [LokasiController::class, 'destroy']);




Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);