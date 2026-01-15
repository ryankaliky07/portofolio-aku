<?php
/*namespace controler*/
namespace App\Http\Controllers;


/*import class*/
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;


/*Deklarasi class*/
class AuthController extends Controller
{
    /*method login*/
    public function login(Request $request)
    {
        /*Validasi data login*/
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        /* proses autentikasi */
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah', 
            ])->withInput();
        }

        /*Regenerate session (keamanan)*/
        $request->session()->regenerate();


        /*Redirect setelah login berhasil*/
        return redirect()->intended('/home');
    }
}




