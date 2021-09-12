<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }

    public function username()
    {
        return 'username';
    }
    
    public function index(){
        return view('webadmin.login');
    }
    
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
    protected function authenticated(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_admin ==1) {
                return redirect()->route('webadmin.home');            
            }
            return redirect('login');
        }
        $request->session()->flash('error', 'Cek kembali username dan password anda');
        // return redirect('login')->withSuccess('Cek kembali username dan password anda');
        return redirect('login');
    }
}
