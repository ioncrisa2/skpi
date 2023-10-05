<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\View\View;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('admin.auth');
    }

    public function authenticated(LoginRequest $request): RedirectResponse
    {
        $request->validated();

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->with(['error' => 'Username atau Password anda salah!!']);
    }

    public function username(): string
    {
        return 'username';
    }
}
