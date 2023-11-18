<?php
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\propertyController; //add the ControllerNameSpace
use App\Http\Controllers\SlideController;
use App\Http\Controllers\MostafedController; //add the ControllerNameSpace
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BackupControllerl;
//add the ControllerNameSpace


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('new', function () {
    return view('new');
});
Route::get('upload', function () {
    return view('upload');
});
Route::get('member', function () {
    return view('member');
});

Route::get('backup', function () {
    return view('backup');
});
Route::get('index', function () { return view('property/index');});
Route::get('create', function () { return view('property/create');});
Route::get('edit', function () {  return view('property/edit');});
Route::get('headerbar', function () {return view('layouts/headerbar');});
Route::get('messages', function () { return view('layouts/messages');});
Route::get('index_mo', function () { return view('mostafed/index_mo');});
Route::get('create_mo', function () {return view('mostafed/create_mo');});
Route::get('edit_mo', function () {
    return view('mostafed/edit_mo');
});

     Route::get('store_mo', function () {
        return view('mostafed/store_mo');
    });
    Route::get('store_sl', function () {
        return view('slide/store_sl');
    });
    Route::get('show_mo', function () {
        return view('mostafed/show_mo');
    });
    Route::get('index_sl', function () {
        return view('slide/index_sl');
    });
    Route::get('creat_sl', function () {
        return view('slide/creat_sl');
    });Route::get('edit_sl', function () {
        return view('slide/edit_sl');
    });
    Route::get('order', function () {
        return view('slide/order');
    });
    Route::get('indexB', function () {
        return view('books/indexB');
    });Route::get('createB', function () {
        return view('books/createB');
    });
    
Route::resource("/property", propertyController::class);

Route::get('/index', [App\Http\Controllers\propertyController::class, 'index'])->name('index');
Route::post('/create', [App\Http\Controllers\propertyController::class, 'create'])->name('create');
Route::get('/edit', [App\Http\Controllers\propertyController::class, 'edit'])->name('edit');
Route::get('/show', [App\Http\Controllers\propertyController::class, 'show'])->name('show');
Route::get('/update', [App\Http\Controllers\propertyController::class, 'update'])->name('update');
Route::get('/exportpro', [App\Http\Controllers\propertyController::class, 'exportpro'])->name('exportpro');
Route::get('/generate', [App\Http\Controllers\propertyController::class, 'generate'])->name('generate');

Route::resource("/mostafed",MostafedController::class);

Route::get('/index_mo', [App\Http\Controllers\MostafedController::class, 'index_mo'])->name('mostafed.index_mo');
Route::post('/create_mo', [App\Http\Controllers\MostafedController::class, 'create_mo'])->name('mostafed.create_mo');
Route::post('/edit', [App\Http\Controllers\MostafedController::class, 'edit'])->name('edit');
Route::get('/show', [App\Http\Controllers\MostafedController::class, 'show'])->name('show');
Route::get('/update', [App\Http\Controllers\MostafedController::class, 'update'])->name('update');
Route::get('/store', [App\Http\Controllers\MostafedController::class, 'store'])->name('store');
Route::get('/exportmo',[App\Http\Controllers\MostafedController::class, 'exportmo'])->name('exportmo');;


Route::resource("/slide",SlideController::class);
Route::get('/create_sl', [App\Http\Controllers\SlideController::class, 'create_sl'])->name('create_sl');
Route::get('/index_sl', [App\Http\Controllers\SlideController::class, 'index_sl'])->name('index_sl');
Route::post('/store_sl', [App\Http\Controllers\SlideController::class, 'store_sl'])->name('store_sl');
Route::get('/edit', [App\Http\Controllers\SlideController::class, 'edit'])->name('edit');
Route::get('/order', [App\Http\Controllers\SlideController::class, 'order'])->name('order');
Route::post('/update', [App\Http\Controllers\SlideController::class, 'update'])->name('update');
Route::get('/show', [App\Http\Controllers\SlideController::class, 'show'])->name('show');
Route::get('/generate', [App\Http\Controllers\SlideController::class, 'generate'])->name('generate');
Route::get('/export', [App\Http\Controllers\SlideController::class, 'export'])->name('export');
Route::post('/import', [App\Http\Controllers\SlideController::class, 'import'])->name('import');

Route::resource('books' , BookController::class);
Route::get('indexB', [App\Http\Controllers\BookController::class, 'indexB'])->name('indexB');
Route::get('createB', [App\Http\Controllers\BookController::class, 'createB'])->name('createB');
Route::get('books/{uuid}/download', 'BookController@download')->name('b-ooks.download');
Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('store');

Route::post('logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/backup', 'BackupController@index');
Route::get('/backup/create', 'BackupController@create');
Route::get('/backup/download/{file_name}', 'BackupController@download');
Route::get('/backup/delete/{file_name}', 'BackupController@delete');















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
