<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocteursController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialitésController;
use App\Models\Rendezvous;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('contactemail', [EmailController::class, 'bar'])->name('email.bar');

require __DIR__.'/auth.php';

Route::resource('/Patient', PatientsController::class);
Route::resource('/Docteur', DocteursController::class);
Route::resource('/Service', ServicesController::class);
Route::resource('/Specialité', SpecialitésController::class);
Route::resource('/Facture', FacturesController::class);
Route::resource('RV', RendezvousController::class);

Route::resource('contactmail', EmailController::class);
