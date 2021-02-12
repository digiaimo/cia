<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
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

Route::get('/', function ()
{
    return view('welcome');
});

//Route::get('/teste', function ()
//{
//    return view('email.email_register');
//});

Route::group([
    'middleware' => [
    'auth' ]
], function ()
{
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::get('/enviar-self', [RegisteredUserController::class, 'selfPage'])->name('create.self');

    Route::post('/self-enviada', [RegisteredUserController::class, 'self'])->name('self.update');

    Route::get('/enviar-contrato', [RegisteredUserController::class, 'contratoPage'])->name('create.contrato');

    Route::post('/contrato-enviada', [RegisteredUserController::class, 'contrato'])->name('update.contrato');
});

Route::group(['prefix'     => 'admin',
              'middleware' => ['auth', 'admin'],
], function ()
{
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/lista-usuarios', [AdminController::class, 'usersList'])->name('admin.users_list');

    Route::get('/lista-usuarios/{user}', [AdminController::class, 'userShow'])->name('admin.user_show');

    Route::post('/{user}/alterando-status', [AdminController::class, 'updateStatus'])->name('admin.update_status');

    Route::get('contrato/{contrato}', [AdminController::class, 'downloadContrato'])->name('download.contrato');

    Route::get('self/{self}', [AdminController::class, 'downloadSelf'])->name('download.self');

    Route::post('/{user}/apagar-self', [AdminController::class, 'destroySelf'])->name('admin.sef_delet');

    Route::post('/{user}/apagar-contrato', [AdminController::class, 'destroyContrato'])->name('admin.contrato_delet');

    Route::get('/{user}/deletar-usuario', [AdminController::class, 'destroyUser'])->name('admin.destroy_user');

});




//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
