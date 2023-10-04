<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('auth');
    }

    public function authenticated(LoginRequest $request): RedirectResponse
    {
        $request->validated();

        if(Auth::attempt(['nis' => $request->nis, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->with(['error' => 'Username atau Password anda salah!!']);
    }

    public function username(): string
    {
        return 'nis';
    }


}
