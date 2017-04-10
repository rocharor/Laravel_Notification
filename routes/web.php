<?php

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

use App\Notifications\NotifyMyAccount;

Auth::loginUsingId(1);

Route::get('/', function () {
    // Auth::user()->notifications[0]->markAsRead(); // Marca como lida
    // Auth::user()->unreadNotifications // Traz as notificações não lidas
    // Auth::user()->notifications // traz todas as notificações

    // if (Auth::check()) {
        // Auth::user()->notify(new NotifyMyAccount()); // Seta uma nova notificação
    // }
    return view('welcome');
});
