<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
//    protected $redirectTo = '/';
    protected function redirectTo()
    {
       switch (auth()->user()->getRoleNames()[0]){
           case 'admin':
               $this->redirectTo ='/admin/';
               break;
           case 'school-admin':
               $this->redirectTo ='/school/classes';
               break;
           case'prof':
               $this->redirectTo ='/enseignent/';
               break;
           case 'tutel':
               $this->redirectTo = '/student/';
               break;
           default:
           break;
       }
       return $this->redirectTo;

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
