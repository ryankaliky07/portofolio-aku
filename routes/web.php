<?php

use Illuminate\Support\Facades\Route; /* di gunakan untuk mrndefinisikan url (get,post, dll)*/
use Illuminate\Support\Facades\Auth; /* di gunakan untuk proses login dan logout */
use App\Http\Controllers\AuthController; /* di gunkan untk memanggil controler login */

/*
|--------------------------------------------------------------------------
| route get : untuk menampilkan halaman login
|--------------------------------------------------------------------------
*/
Route::get('/login', function () { /* ---alur kerja----*/
    return view('login');           /* user buka login maka laravel akan menampilkan login blade php*/
})->name('login');
 /*route post: di gunakan untuk menerima DAN meproses data login melalui authcontroler*/
Route::post('/login', [AuthController::class, 'login']) /* menangani request post dari form login */
    ->name('login.process'); /* alurnya jika user sbmit fotm login maka data di kirim ke login laravel memanggil bagian authcontroler login */ 
                             
/*
|--------------------------------------------------------------------------
| middleware: di gunakan untuk membatasi halaman tertentu hanya untuk user login 
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () { /* berfungsi sebagai autentikasi stattus pengguna */
    /* bagiaan halaman tertentu */
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', function () {
        return view('home');
    });
    /*proses logout dan pengamanan sistem*/
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');

});
