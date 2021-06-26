<?php

use Illuminate\Routing\Route as RoutingRoute;
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

//Frontend Route

 Route::get('/',[App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');


 //Computer Frontend Route
 Route::get('/computer-user',[App\Http\Controllers\Frontend\ComputerFrontController::class, 'computerUser'])->name('computer.user');
 Route::get('/computer/create',[App\Http\Controllers\Frontend\ComputerFrontController::class, 'create'])->name('computer.user.create');
 Route::post('/computer/create',[App\Http\Controllers\Frontend\ComputerFrontController::class, 'store']);
 Route::get('/computer/edit{id}',[App\Http\Controllers\Frontend\ComputerFrontController::class, 'edit'])->name('computer.user.edit');
 Route::post('/computer/edit{id}',[App\Http\Controllers\Frontend\ComputerFrontController::class, 'update']);



//Backend Route
Route::get('admin/login', [App\Http\Controllers\Backend\LoginController::class, 'LoginForm'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Backend\LoginController::class, 'login']);

Route::get('user/login', [App\Http\Controllers\Backend\LoginController::class, 'LoginForm'])->name('user.login');
Route::post('user/login', [App\Http\Controllers\Backend\LoginController::class, 'login']);

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('logout',[App\Http\Controllers\Backend\LoginController::class, 'logout'])->name('admin.logout');

    //Computer Route
    Route::get('/computers', [App\Http\Controllers\Backend\ComputerController::class, 'computer'])->name('admin.computer');

    Route::get('/computers/create',[App\Http\Controllers\Backend\ComputerController::class, 'create'])->name('admin.computer.create');
    Route::post('/computers/create',[App\Http\Controllers\Backend\ComputerController::class, 'store']);

    Route::get('computers/edit/{id}',[App\Http\Controllers\Backend\ComputerController::class, 'edit'])->name('admin.computer.edit');
    Route::post('computers/edit/{id}',[App\Http\Controllers\Backend\ComputerController::class, 'update']);

    Route::get('computers/delete/{id}',[App\Http\Controllers\Backend\ComputerController::class,'delete'])->name('admin.computer.delete');


    //Outgoing Route

    Route::get('/outgoing',[App\Http\Controllers\Backend\OutgoingController::class, 'outgoing'])->name('admin.outgoing');

    Route::get('/outgoing/create',[App\Http\Controllers\Backend\OutgoingController::class, 'create'])->name('admin.outgoing.create');
    Route::post('/outgoing/create',[App\Http\Controllers\Backend\OutgoingController::class, 'store']);

    Route::get('outgoing/edit/{id}',[App\Http\Controllers\Backend\OutgoingController::class, 'edit'])->name('admin.outgoing.edit');
    Route::post('outgoing/edit/{id}',[App\Http\Controllers\Backend\OutgoingController::class, 'update']);
    Route::get('outgoing/delete/{id}',[App\Http\Controllers\Backend\OutgoingController::class,'delete'])->name('admin.outgoing.delete');

    //Incoming Route
    Route::get('/incoming',[App\Http\Controllers\Backend\IncomingController::class, 'incoming'])->name('admin.incoming');
    Route::get('/incoming/create',[App\Http\Controllers\Backend\IncomingController::class, 'create'])->name('admin.incoming.create');
    Route::post('/incoming/create',[App\Http\Controllers\Backend\IncomingController::class, 'store']);

    Route::get('incoming/edit/{id}',[App\Http\Controllers\Backend\IncomingController::class, 'edit'])->name('admin.incoming.edit');
    Route::post('incoming/edit/{id}',[App\Http\Controllers\Backend\IncomingController::class, 'update']);

    Route::get('incoming/delete/{id}',[App\Http\Controllers\Backend\IncomingController::class,'delete'])->name('admin.incoming.delete');

    //Ccamera Route

    Route::get('/cameras',[App\Http\Controllers\Backend\CcameraController::class, 'index'])->name('admin.ccam');
    Route::get('/cameras/create',[App\Http\Controllers\Backend\CcameraController::class, 'create'])->name('admin.ccam.create');
    Route::post('/cameras/create',[App\Http\Controllers\Backend\CcameraController::class, 'store']);

    Route::get('/cameras/edit/{id}', [App\Http\Controllers\Backend\CcameraController::class, 'edit'])->name('admin.ccam.edit');
    Route::post('/cameras/edit/{id}', [App\Http\Controllers\Backend\CcameraController::class, 'update']);
    Route::get('/cameras/delete/{id}', [App\Http\Controllers\Backend\CcameraController::class, 'delete'])->name('admin.ccam.delete');

    //Question Route
    Route::get('/questions',[App\Http\Controllers\Backend\QuestionsController::class, 'questions'])->name('admin.questions');
    Route::get('/questions/ka',[App\Http\Controllers\Backend\QuestionsController::class, 'questions_ka'])->name('admin.questions.ka');
    Route::get('/questions/kha',[App\Http\Controllers\Backend\QuestionsController::class, 'questions_kha'])->name('admin.questions.kha');
    Route::get('/questions/ga',[App\Http\Controllers\Backend\QuestionsController::class, 'questions_ga'])->name('admin.questions.ga');


});

