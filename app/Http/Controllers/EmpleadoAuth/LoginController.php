<?php

namespace App\Http\Controllers\EmpleadoAuth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/inicioAdministrador';

    protected function redirectTo()
    {
      session(['apodo'=>\Auth::user()->nombre]);
      return '/inicioAdministrador';
    }
    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    protected function guard()
    {
        return auth()->guard('empleados'); 
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response 
     */
    public function showLoginForm()
    {
        return view('Empleado-auth.login');
    }

}


