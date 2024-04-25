<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSurveyController;
use App\Models\Location;
use Illuminate\Support\Facades\Form;
use Carbon\Carbon;
use App\Models\ServiceQualityDimension;




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
    return view('try');
});

Route::get('/CitizenCharter', function () {

    /*
    $getTodayClients = ServiceQualityDimension::whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    //{{$getTodayClients->count()}}           ->>Apply inside blade same as other variable

    $getClientFilledSqd1 = ServiceQualityDimension::whereNotNull('sqd0')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    $getClientFilledSqd5 = ServiceQualityDimension::whereNotNull('sqd5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();

    $getClientSqd1Evaluation = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option1')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    $getClientSqd1Evaluation2 = ServiceQualityDimension::whereNotNull('sqd0')->where('sqd0', '=', 'option2')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    $getClientSqd1Evaluation3 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option3')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    $getClientSqd1Evaluation4 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option4')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    $getClientSqd1Evaluation5 = ServiceQualityDimension::where('sqd0', '!=', null)->where('sqd0', '=', 'option5')->whereDate('created_at', Carbon::today()->setTimezone('Asia/Manila'))->get();
    */

    $locations = Location::all();
    $currentDate = Carbon::now()->format('Y-m-d');
    return view('plus', compact('locations', 'currentDate'));
})->name('citizencharter');

Route::get('/Finish-Survey', [ClientSurveyController::class,'finish'])->name('finish');
Route::get('/download', [ClientSurveyController::class,'downloadpdf'])->name('downloadpdf');


Route::get('/admin-login', function () {
    return view('login');
});

Route::get('/print-preview', function () {
    return view('prints.artaprint');
});

/*
Route::get('/summary', function () {
    return view('summary');
});
*/

Route::get('/sqd-1', [ClientSurveyController::class,'directsqd1']);
Route::get('/sqd-2', [ClientSurveyController::class,'directsqd2']);

/*
Route::get('/sqd-1', function () {
    return view('sqd.smiley');
});
*/

/*
Route::get('/sqd-2', function () {
    return view('sqd.smiley2');
});
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Added
Route::post('/submitsurvey', [ClientSurveyController::class,'ccsurvey'])->name('submitsurvey');
Route::post('/submitsqdsurvey', [ClientSurveyController::class,'sqd1post'])->name('submitsqdsurvey');
Route::post('/submitsqd2survey', [ClientSurveyController::class,'sqd2post'])->name('submitsqd2survey');

Route::get('/sqd-1/{ccsurvey}', [ClientSurveyController::class,'sqd1'])->name('sqd1');
Route::post('/submit/sqd-1', [ClientSurveyController::class,'sqd1post']);

Route::get('/summary/{sqd}', [ClientSurveyController::class,'summone'])->name('summone');




require __DIR__.'/auth.php';
