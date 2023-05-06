<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login()
    {
        
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('loginform.login');
        }

        
    }
    use AuthenticatesUsers;
    
    protected $redirectTo;
    public function redirectTo()
    {
        
    } 

    public function actionlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            switch(Auth::user()->role){
                case 'Administrator':
                    return redirect('useradmin');
                    break;
                case 'Guest':
                    return redirect('dashboard');
                    break;
                default:
                
                return redirect('/');
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    
}
