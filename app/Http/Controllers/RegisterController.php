<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(UserRegisterRequest $request)
    {
        try {
            User::create($request->fields());
            return back()->with('success', 'User registered successfully!, Please login');
        } catch (Exception $exception) {
            return back()->with('error', 'Something Error Found. Please try again');
        }
    }
}
