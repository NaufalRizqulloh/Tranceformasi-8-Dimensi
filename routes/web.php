<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\CheckboxController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

/**
 * User route section
 */
Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
Route::get('/user/hasil', [UserController::class, 'downloadHasil'])->middleware('auth')->name('user.dashboard.download');

/**
 * User form route section
 */
Route::resource('user/form', FormController::class)->middleware('auth');

Route::get('/user/form/terimakasih-sudah-mengisi', function () {
    return view('section-done');
})->middleware('auth')->name('user.form.done');

/**
 * Admin route section
 */
Route::resource('admin/event', AdminEventController::class)->middleware('admin');

Route::get('admin/event/overview', [AdminEventController::class, 'overview'])->middleware('admin')->name('event.overview');

/////////

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('checkbox', CheckboxController::class);
// Route::post('/storeCheckboxes', [CheckboxController::class, 'store'])->name('storeCheckboxes');

Route::get('/dashboard/{user}', []);

Route::get('/test', function () {
    return view('/testing/welcome');
});

Route::get('/tfregister', function () {
    return view('/testing/register');
});


Route::get('/tests', function () {
    return view('/testing/halaman ');
});

Route::get('/section-1', function () {
    return view('.form.section-1-1 ');
});

Route::get('/section-2-1', function(){
    return view('form.section-2-1 ');
});

require __DIR__ . '/auth.php';
