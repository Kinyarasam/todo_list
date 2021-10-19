<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    
    public function index()
    {
        return view('Auth.login');
    }

   
    public function store(Request $request)
    {
        /**
         * Validate user
         */

        $this->validate($request, [
            'email'=> 'required|email',
            'password' => 'required',
        ]);

        /**
         * Sign the user in.
        */
        auth()->attempt($request->only('email', 'password'));

        /**
         * Redirect the user.
         */
        return redirect()->route('home')->with('status', 'You are now signed in as {{ auth()->user()->name }}!');
    }
}
