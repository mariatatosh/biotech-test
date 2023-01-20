<?php

use App\Http\Controllers\User;
use App\Http\Controllers\Admin;
use App\Models\Payment;
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

Auth::routes([
    'register' => false,
]);

Route::view('/', 'home')->name('home');
Route::post('/payment', User\Payment\Actions\PaymentStoreAction::class)->name('payment.store');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/payments', static function (): object {
        return view('admin.payment.list', ['payments' => Payment::all()]);
    })
        ->name('admin.payments.list');

    Route::delete('/payments/{id}', Admin\Payment\Actions\PaymentDestroyAction::class)
        ->name('admin.payments.destroy');

    Route::get('/payments/{id}/edit', static function (int $id): object {
        return view('admin.payment.edit', ['payment' => Payment::find($id)]);
    })
        ->name('admin.payments.edit');

    Route::patch('/payments/{id}', Admin\Payment\Actions\PaymentUpdateAction::class)
        ->name('admin.payments.update');

    Route::view('/payments/create', 'admin.payment.create')->name('admin.payments.create');

    Route::post('/payments', Admin\Payment\Actions\PaymentStoreAction::class)
        ->name('admin.payments.store');
});
