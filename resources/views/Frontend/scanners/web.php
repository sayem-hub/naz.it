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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('/registration', [App\Http\Controllers\Frontend\UserController::class, 'registration'])->name('registration');
Route::post('/registration', [App\Http\Controllers\Frontend\UserController::class, 'doRegistration']);

Route::get('/login', [App\Http\Controllers\Frontend\UserController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Frontend\UserController::class, 'doLogin']);
Route::get('/logout', [App\Http\Controllers\Frontend\UserController::class, 'logout'])->name('logout');
Route::get('/kpi', [App\Http\Controllers\Frontend\KpiController::class, 'kpi'])->name('kpi.home');



//Backend Route
Route::get('admin/login', [App\Http\Controllers\Backend\LoginController::class, 'LoginForm'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Backend\LoginController::class, 'admin_login']);



Route::middleware(['auth'])->group(function () {

    //Frontend Route
    Route::get('/profile', [App\Http\Controllers\Frontend\UserController::class, 'profile'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\Frontend\UserController::class, 'updateProfile']);

    //Printer & Scanner Route

    Route::get('/printers-list',[App\Http\Controllers\Frontend\PrinterScannerController::class, 'printerIndex'])->name('printer.index');
    Route::get('/printer/create',[App\Http\Controllers\Frontend\PrinterScannerController::class, 'printerCreate'])->name('printer.create');
    Route::post('/printer/create',[App\Http\Controllers\Frontend\PrinterScannerController::class, 'printerStore']);
    Route::get('/printer/edit/{id}', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'printerEdit'])->name('printer.edit');
    Route::post('/printer/edit/{id}', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'printerUpdate']);

    Route::get('/scanner-list', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'printerIndex'])->name('scanner.index');
    Route::get('/scanner/create', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'scanner'])->name('scanner.create');
    Route::post('/scanner/create', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'scannerStore']);
    Route::get('/scanner/edit/{id}', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'scanner'])->name('scanner.edit');
    Route::post('/scanner/edit/{id}', [App\Http\Controllers\Frontend\PrinterScannerController::class, 'scanner']);

//PABX Route
        Route::get('/pabx-list',[App\Http\Controllers\Frontend\PabxController::class, 'index'])->name('frontend.pabx.index');
        Route::get('/pabx-list/new',[App\Http\Controllers\Frontend\PabxController::class, 'create'])->name('frontend.pabx.create');
        Route::post('/pabx-list/new',[App\Http\Controllers\Frontend\PabxController::class, 'store']);
        Route::get('/pabx-list/edit/{id}', [App\Http\Controllers\Frontend\PabxController::class, 'edit'])->name('frontend.pabx.edit');
        Route::post('/pabx-list/edit/{id}', [App\Http\Controllers\Frontend\PabxController::class, 'update']);
    //RFID Route
        Route::get('/rfid-list',[App\Http\Controllers\Frontend\RfidController::class, 'index'])->name('rfid.index');
        Route::get('/rfid-list/create',[App\Http\Controllers\Frontend\RfidController::class, 'create'])->name('rfid.create');
        Route::post('/rfid-list/create',[App\Http\Controllers\Frontend\RfidController::class, 'store']);
        Route::get('/rfid-list/edit/{id}',[App\Http\Controllers\Frontend\RfidController::class, 'edit'])->name('rfid.edit');
        Route::post('/rfid-list/edit/{id}',[App\Http\Controllers\Frontend\RfidController::class, 'update']);
        Route::get('/rfid-list/search',[App\Http\Controllers\Frontend\SearchController::class, 'rfidSearch'])->name('rfid.search');

    //FaceID Machine Route
        Route::get('/faceid-list',[App\Http\Controllers\Frontend\FaceidController::class, 'index'])->name('faceid.index');
        Route::get('/faceid-list/create',[App\Http\Controllers\Frontend\FaceidController::class, 'create'])->name('faceid.create');
        Route::post('/faceid-list/create',[App\Http\Controllers\Frontend\FaceidController::class, 'store']);
        Route::get('/faceid-list/edit/{id}',[App\Http\Controllers\Frontend\FaceidController::class, 'edit'])->name('faceid.edit');
        Route::post('/faceid-list/edit/{id}',[App\Http\Controllers\Frontend\FaceidController::class, 'update']);



            //KPI Route
            Route::get('/kpi/smachine',[App\Http\Controllers\Frontend\KpiController::class, 'sewingMachine'])->name('sewing.machine');
            Route::post('/kpi/smachine',[App\Http\Controllers\Frontend\KpiController::class, 'brother_machineStore']);

            //Received Route
            Route::get('/received-items',[App\Http\Controllers\Frontend\HomeController::class, 'received'])->name('received.goods');
            Route::get('/received-items/new',[App\Http\Controllers\Frontend\HomeController::class, 'goodsCreate'])->name('received.goods.new');
            Route::post('/received-items/new',[App\Http\Controllers\Frontend\HomeController::class, 'goodsStore']);
            Route::get('/received-items/search',[App\Http\Controllers\Frontend\SearchController::class, 'receivedSearch'])->name('received.goods.search');

            //Sent Route
            Route::get('/sent-items',[App\Http\Controllers\Frontend\HomeController::class, 'sentItem'])->name('sent.items');
            Route::get('/sent-items/create',[App\Http\Controllers\Frontend\HomeController::class, 'createSentItem'])->name('sent.items.create');
            Route::post('/sent-items/create',[App\Http\Controllers\Frontend\HomeController::class, 'storeSentItem']);



            //Home Computer Route
            Route::get('/computer-user', [App\Http\Controllers\Frontend\HomeController::class, 'computerUser'])->name('computer.user');
            Route::get('/computer/create', [App\Http\Controllers\Frontend\HomeController::class, 'create'])->name('computer.user.create');
            Route::post('/computer/create', [App\Http\Controllers\Frontend\HomeController::class, 'store']);
            Route::get('/computer/edit/{id}', [App\Http\Controllers\Frontend\HomeController::class, 'edit'])->name('computer.user.edit');
            Route::post('/computer/edit/{id}', [App\Http\Controllers\Frontend\HomeController::class, 'update']);
            Route::get('/computer/search', [App\Http\Controllers\Frontend\SearchController::class, 'compSearch'])->name('computer.search');
            Route::get('/computer-user/previewPdf', [App\Http\Controllers\Frontend\PdfController::class, 'compPdf'])->name('computer.pdf');
            Route::get('/computer-user/generatePDF', [App\Http\Controllers\Frontend\PdfController::class, 'generatePDF'])->name('pdf.generate');

            //Home CC Camera Route
            Route::get('/cc-camera', [App\Http\Controllers\Frontend\HomeController::class, 'ccamera'])->name('cc-camera');
            Route::get('/cc-camera/create', [App\Http\Controllers\Frontend\HomeController::class, 'cam_create'])->name('camera.create');
            Route::post('/cc-camera/create', [App\Http\Controllers\Frontend\HomeController::class, 'cam_store']);
            Route::get('/cc-camera/edit/{id}', [App\Http\Controllers\Frontend\HomeController::class, 'cam_edit'])->name('camera.edit');
            Route::post('/cc-camera/edit/{id}', [App\Http\Controllers\Frontend\HomeController::class, 'cam_update']);

    Route::middleware('is_admin')->prefix('admin')->group(function(){

        Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [App\Http\Controllers\Backend\LoginController::class, 'logout'])->name('admin.logout');

        //Import/Export Route
        Route::get('importExport', [App\Http\Controllers\Backend\MaatwebsiteController::class, 'importExport'])->name('import.export');
        Route::get('computer/export', [App\Http\Controllers\Backend\MaatwebsiteController::class, 'export'])->name('computer.export');
        Route::post('import', [App\Http\Controllers\Backend\MaatwebsiteController::class, 'import'])->name('computer.import');

        Route::get('cc-camera/export', [App\Http\Controllers\Backend\MaatwebsiteController::class, 'cameraExport'])->name('camera.export');

        //Computer Route
        Route::get('/computers', [App\Http\Controllers\Backend\ComputerController::class, 'computer'])->name('admin.computer');

        Route::get('/computers/create', [App\Http\Controllers\Backend\ComputerController::class, 'create'])->name('admin.computer.create');
        Route::post('/computers/create', [App\Http\Controllers\Backend\ComputerController::class, 'store']);

        Route::get('computers/edit/{id}', [App\Http\Controllers\Backend\ComputerController::class, 'edit'])->name('admin.computer.edit');
        Route::post('computers/edit/{id}', [App\Http\Controllers\Backend\ComputerController::class, 'update']);

        Route::get('computers/delete/{id}', [App\Http\Controllers\Backend\ComputerController::class, 'delete'])->name('admin.computer.delete');


        //Outgoing Route

        Route::get('/outgoing', [App\Http\Controllers\Backend\OutgoingController::class, 'outgoing'])->name('admin.outgoing');

        Route::get('/outgoing/create', [App\Http\Controllers\Backend\OutgoingController::class, 'create'])->name('admin.outgoing.create');
        Route::post('/outgoing/create', [App\Http\Controllers\Backend\OutgoingController::class, 'store']);

        Route::get('outgoing/edit/{id}', [App\Http\Controllers\Backend\OutgoingController::class, 'edit'])->name('admin.outgoing.edit');
        Route::post('outgoing/edit/{id}', [App\Http\Controllers\Backend\OutgoingController::class, 'update']);
        Route::get('outgoing/delete/{id}', [App\Http\Controllers\Backend\OutgoingController::class, 'delete'])->name('admin.outgoing.delete');

        //Incoming Route
        Route::get('/incoming', [App\Http\Controllers\Backend\IncomingController::class, 'incoming'])->name('admin.incoming');
        Route::get('/incoming/create', [App\Http\Controllers\Backend\IncomingController::class, 'create'])->name('admin.incoming.create');
        Route::post('/incoming/create', [App\Http\Controllers\Backend\IncomingController::class, 'store']);

        Route::get('incoming/edit/{id}', [App\Http\Controllers\Backend\IncomingController::class, 'edit'])->name('admin.incoming.edit');
        Route::post('incoming/edit/{id}', [App\Http\Controllers\Backend\IncomingController::class, 'update']);

        Route::get('incoming/delete/{id}', [App\Http\Controllers\Backend\IncomingController::class, 'delete'])->name('admin.incoming.delete');

        //Ccamera Route

        Route::get('/cameras', [App\Http\Controllers\Backend\CcameraController::class, 'index'])->name('admin.ccam');
        Route::get('/cameras/create', [App\Http\Controllers\Backend\CcameraController::class, 'create'])->name('admin.ccam.create');
        Route::post('/cameras/create', [App\Http\Controllers\Backend\CcameraController::class, 'store']);

        Route::get('/cameras/edit/{id}', [App\Http\Controllers\Backend\CcameraController::class, 'edit'])->name('admin.ccam.edit');
        Route::post('/cameras/edit/{id}', [App\Http\Controllers\Backend\CcameraController::class, 'update']);
        Route::get('/cameras/delete/{id}', [App\Http\Controllers\Backend\CcameraController::class, 'delete'])->name('admin.ccam.delete');

        //Question Route
        Route::get('/questions', [App\Http\Controllers\Backend\QuestionsController::class, 'questions'])->name('admin.questions');
        Route::get('/questions/ka', [App\Http\Controllers\Backend\QuestionsController::class, 'questions_ka'])->name('admin.questions.ka');
        Route::get('/questions/kha', [App\Http\Controllers\Backend\QuestionsController::class, 'questions_kha'])->name('admin.questions.kha');
        Route::get('/questions/ga', [App\Http\Controllers\Backend\QuestionsController::class, 'questions_ga'])->name('admin.questions.ga');

    });



});

