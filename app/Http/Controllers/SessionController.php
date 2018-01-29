<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy', 'create']);
    }

    public function create()
    {
        return view('sessions/create');
    }

    public function store()
    {

//        dd(request(['email', 'password']));
        if (! auth()->attempt([
           'email' => request('email'),
           'password' => request('password')
        ])
        ) {
//            dd(request('email') .request('password'));
            return back()->withErrors([
                'message' => 'Please check your  and try again'
            ]);
        }

        return redirect()->route('home');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
