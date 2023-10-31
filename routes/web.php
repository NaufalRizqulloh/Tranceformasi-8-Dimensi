<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CheckboxController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Jawaban;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\JawabanController;
use Carbon\Carbon;
use Helpers\Data\StringHelper;
use Illuminate\Support\Facades\Lang;

use Illuminate\Http\Request;

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
// TESTING
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ds', function () {
    dd('anggap dashboard');
});

Route::get('/t/{user}', function (User $user) {
    
});

Route::get('/t', function () {
    dd(StringHelper::cleanName('  rEyhaN   PuTRA   ariUTAMA'));
});

Route::get('/dn', function () {
    dd('anggap done', request());
});

Route::get('/j', function () {
    return view('alt-form/no-jump');
});

Route::get('/request21', function () {
    return session('answers-21');
});

Route::get('/testform/{jawaban}', [FormController::class, 'show'])->name('testt');

Route::get('/hasil', function () {
    return request();
});

Route::get('/overview', [AdminEventController::class, 'overview']);
Route::get('/chart', [AdminEventController::class, 'show']);
Route::get('/testing', function () {
    return [
        substr('123456789', 0, 4),
        substr('123456789', 0, -3),
        substr('123456789', 2, 3),
        substr('123456789', 2, -3)
    ];
});

Route::get('/wait', function () {
    return view('alt-form/section-wait', [
        'nextDestination' => 'section-2-1',
        'jawaban' => 1
    ]);
});

Route::get('/event-test/{event}', [AdminEventController::class, 'show']);

Route::get('/request', function (Request $request) {
    return view('alt-form/section-1', [
        'questions' => config('form-section1-1.content'),
        'answers' => [],
        'nextDestination' => 'section-1-2',
        'previousDestination' => 'go-dashboard'
    ]);
});

Route::post('/post/{jawaban}', function (Request $request, Jawaban $jawaban) {
    return redirect()->route('testt', [
        'jawaban' => $jawaban,
        'destination' => $request->destination
    ]);
})->name('post');

Route::get('/request-invalid', function (Request $request) {
    return view('form/section-1-1', ['question' => ['1.1' => null]]);
});

/**
 * User route section
 */
Route::get('/home', [UserController::class, 'index'])->middleware('auth')->name('user.dashboard');
Route::get('/user/hasil', [UserController::class, 'downloadHasil'])->middleware('auth')->name('user.dashboard.download');

/**
 * User form route section
 */
Route::get('user/form/{jawaban}', [FormController::class, 'show'])->middleware('auth')->name('user.form.show');
Route::post('user/form', [FormController::class, 'store'])->middleware('auth')->name('user.form.store');
Route::delete('user/form/{jawaban}', [FormController::class, 'destroy'])->middleware('auth')->name('user.form.destroy');

Route::patch('user/form/update/{jawaban}', [FormController::class, 'update'])->middleware('auth')->name('user.form.update');
Route::patch('user/form/update/{jawaban}/back', [FormController::class, 'updateBack'])->middleware('auth')->name('user.form.update.back');
Route::patch('user/form/update/{jawaban}/submit', [FormController::class, 'submit'])->middleware('auth')->name('user.form.update.submit');

Route::post('user/form/save-answer/{jawaban}', [FormController::class, 'saveAnswer'])->middleware('auth')->name('user.form.save-answer');

Route::get('user/form/terimakasih-telah-mengisi', function () {
    return view('form/section-done');
})->middleware('auth')->name('user.form.done');

Route::get('/在漫游于一个旋涡般的资本主义中我与一只戴着单片眼镜的大猩猩进行了一次奇怪的对话他能够通过解释有感知能力的棉花糖的运动来预测外太空的橡皮鸭的情感', function () {
    $jawaban = request('jawaban');
    return view('alt-form/no-jump', ['jawaban' => $jawaban]);
})->name('user.form.jumper');

/**
 * Admin route section
 */
// Route::resource('admin/event', AdminEventController::class)->middleware('admin')->name('admin.event');

Route::middleware('admin')->group(function () {
    Route::resource('admin/event', AdminEventController::class)->names([
        'index' => 'admin.event.index',
        'create' => 'admin.event.create',
        'store' => 'admin.event.store',
        'show' => 'admin.event.show',
        'edit' => 'admin.event.edit',
        'update' => 'admin.event.update',
        'destroy' => 'admin.event.destroy',
    ]);
});

Route::get('admin/event/overview', [AdminEventController::class, 'overview'])->middleware('admin')->name('event.overview');
Route::get('admin/event/update-on-hold/{event}', [AdminEventController::class, 'updateOnHold'])->middleware('admin')->name('update.event.on-hold');
Route::get('admin/update-city', [AdminEventController::class, 'updateCityApi'])->middleware('admin')->name('update.city-api');

/////////

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboardchart', [ChartController::class, 'dashboardchart']);
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('checkbox', CheckboxController::class);
// Route::post('/storeCheckboxes', [CheckboxController::class, 'store'])->name('storeCheckboxes');

Route::get('/dashboard/{user}', []);

Route::get('/charts', [ChartController::class, 'index'])->name('chart.index');

Route::get('/', function () {
    return view('/testing/welcome');
});

Route::get('/tprofile', [ProfileController::class, 'edit'])->name('tprofile.edit');

Route::get('/tfregister', [RegisteredUserController::class, 'create'])->name('tfregister.create');

// Route::get('/home', [JawabanController::class, 'index'])->name('jawaban.index');

Route::get('/section-1', function () {
    return view('.form.section-1-1 ');
});

Route::get('/section-1-2', function () {
    return view('.form.section-1-2');
});

Route::get('/section-2-1', function () {
    return view('form.section-2-1 ');
});

Route::get('/done', function () {
    return view('form.section-done');
});

require __DIR__ . '/auth.php';
