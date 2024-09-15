<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    public function login(UserLoginRequest $request): RedirectResponse
    {
        try {

            $user = User::query()->where('pin_number', $request->input('pin_number'))
                ->first(['id', 'name', 'email', 'user_type', 'password']);

            if (!empty($user)) {

                $checkHashPassword = Hash::check($request->input('password'), $user->password);

                if ($checkHashPassword) {

                    $authenticateUserInfo = [
                        "id" => $user->id,
                        "name" => $user->name,
                        "email" => $user->email,
                        "user_type" => $user->user_type
                    ];

                    session()->put('logged_session_data', $authenticateUserInfo);
                    return to_route('dashboard');
                } else {
                    return back()->with('error', 'Wrong password');
                }
            }

            return back()->with('error', 'Please give the valid information');
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        return redirect(url('/'))->with('success', 'logout successful ..!');
    }
}
