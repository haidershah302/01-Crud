<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {

        $user = User::create($request->except('avatar'));

        $destinationPath = 'storage/users/'.$user->uid.'-'.$user->name.'/';

        $fileRealName = $request->avatar->getClientOriginalName();

        $fileName = $user->uid. '-' . time() . '-' . $fileRealName;

        $request->avatar->move($destinationPath, $fileName);

        $user->avatar = $fileName;
        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => ['required', 'string', 'phone:AUTO', 'max:18'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ])->onlyInput('phone');
    }
}

