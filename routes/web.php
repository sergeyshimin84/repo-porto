<?php

use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\CalculatorController as AdminCalculatorController;
use App\Http\Controllers\Admin\CertificateController as AdminCertificateController;
use App\Http\Controllers\Admin\CompetencyController as AdminCompetencyController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\GreetingController as AdminGreetingController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\ReferenceController as AdminReferenceController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompetencyController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\FeedbackController;

use Illuminate\Http\Response;
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
// Route::get('/main', [MainController::class, 'index'])->name('main');

Route::get('/', [MainController::class, 'index'])->name('main');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin');
    Route::resource('main', AdminMainController::class);
    Route::resource('competencies', AdminCompetencyController::class);
    Route::resource('certificates', AdminCertificateController::class);
    Route::resource('portfolios', AdminPortfolioController::class);
    Route::resource('greetings', AdminGreetingController::class);
    Route::resource('feedbacks', AdminFeedbackController::class);
    Route::resource('calculator', AdminCalculatorController::class);

    Route::resource('references', AdminReferenceController::class);
    Route::resource('projects', AdminProjectController::class);
});

Route::get('/competencies', [CompetencyController::class, 'index'])->name('competencies');

Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates');

Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios');

Route::get('/greetings', [GreetingController::class, 'index'])->name('greetings');

Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks');

Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');

Route::get('/references', [ReferenceController::class, 'index'])->name('references');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
