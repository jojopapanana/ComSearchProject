<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showParticipantLoginForm()
    {
        return view('auth.participant.login');
    }

    public function participantLogin(Request $request)
    {   
        Auth::guard('participant')->attempt(['username' => $request->username, 'password' => $request->password]);
        
        if (Auth::guard('participant')->check()) {
            return redirect()->route('welcome');
        } else {
            return $this->sendFailedLoginResponse($request);
        }
    }
}
