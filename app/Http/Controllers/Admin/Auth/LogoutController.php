<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        if($user && $user->username == 'admin'){
            $this->perfromLogout($request);
            return redirect()->route('login.admin');
        }else if($user && empty($user->username)){
            $this->perfromLogout($request);
            return redirect()->route('login.siswa');
        }
    }

    protected function perfromLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
