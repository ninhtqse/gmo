<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getViewLogin()
    {
        return view('GMO.login');
    }

    public function submitLogin(Request $request)
    {
        if (! $request->get('username') || ! $request->get('password')) {
            return back();
        }
        if (\Auth::attempt(['email' => $request->get('username'), 'password' => $request->get('password')])) {
            return redirect()->route('transfer');
        }

        return back();
    }

    public function logout()
    {
        \Auth::logout();

        return redirect('login');
    }
}
