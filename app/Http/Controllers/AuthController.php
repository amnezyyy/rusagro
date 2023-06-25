<?php

namespace App\Http\Controllers;

use App\Libraries\Action\AuthAction;
use App\Libraries\Action\RegisterAction;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $action = new RegisterAction($request->all());
        return $action->heandle();
    }

    public function auth(Request $request)
    {
        $action = new AuthAction($request->all());
        return $action->heandle();
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}

