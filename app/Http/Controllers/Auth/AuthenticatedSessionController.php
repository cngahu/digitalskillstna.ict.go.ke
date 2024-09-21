<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
//    public function store(LoginRequest $request): RedirectResponse
//    {
//        $request->authenticate();
//
//        $request->session()->regenerate();
//
//        return redirect()->intended(RouteServiceProvider::HOME);
//    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $notification = array(
            'message' => 'Login Successfully',
            'alert-type' => 'success'
        );

//        dd($request->user()->role);

        $url='';
        if ($request->user()->role==([ 'Super Admin',  'Graphic Designer'])) {
            $url = '/backend/dashboard';
        }
        elseif ($request->user()->role=='admin') {

            $url = '/backend/dashboard';
        }
//        elseif ($request->user()->hasRole('advertising')) {
//            $url = '/backend-dashboard';
//        }
//        elseif ($request->user()->hasRole('designer')) {
//            $url = '/designer-dashboard';
//        }
//
//        elseif ($request->user()->hasRole('user')) {
//            $url = '/frontend/dashboard';
//        }
//        elseif ($request->user()->hasRole('Requestor')) {
//            $url = '/frontend/dashboard';
//        }
//
//        elseif ($request->user()->hasRole('manager')) {
//            $url = '/manager-dashboard';
//        }
//        elseif ($request->user()->hasRole('News Agent')) {
//            $url = '/news-dashboard';
//        }

        else
            dd('Here');


//        elseif ($request->user()->role == 'user'){
//            $url='/frontend/dashboard';
//        }

        return redirect()->intended($url)->with($notification);
        // return redirect()->intended(RouteServiceProvider::HOME);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/frontend/login');
    }
}
