<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    
    public function index()
    {
        return view('auth.register');
    }
    /**
     * 
    */
    public function store(Request $request)
    {
        // dd($request->email);
        /**
         * Validate the user
         */
        
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

       
        // dd('store');

        /** 
         * Store the User's details.
         */

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        /** 
         * Sign the user in.
         */ 
        auth()->attempt($request->only('email', 'password'));
        // dd('signed in as user');
        /** 
         * Redirect the user.
         * 
         */
        return redirect()->route('home');
    }

   
}
