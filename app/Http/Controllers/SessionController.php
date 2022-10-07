<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        if(auth()->attempt($attributes)){
            return redirect('/')->with('status', 'Welcome ' . auth()->user()->name );
        }
    }
}
