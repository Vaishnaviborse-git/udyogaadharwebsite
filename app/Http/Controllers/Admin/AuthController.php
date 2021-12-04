<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
     //validation rules.
     protected $rules = [
        'email'    => 'required|email|exists:admins|min:5|max:191',
        'password' => 'required|string|min:4|max:255',
    ];

    //custom validation error messages.
    protected $messages = [
        'email.exists' => 'These credentials do not match our records.',
    ];

    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        //validate the request.
        $request->validate($this->rules, $this->messages);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            //Authentication passed...
            return redirect()
                ->intended(route('admin.dashboard'))
                ->with('status', 'You are Logged in as Admin!');
        }

        return redirect()
            ->back()
            ->withInput()
            ->withErrors(['email' => 'These credentials do not match our records!']);
    }
}
