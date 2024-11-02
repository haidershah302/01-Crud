<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {

        $user = User::create($request->except('avatar'));

        $destinationPath = 'storage/users/'.$user->id.'-'.$user->name.'/';

        $fileRealName = $request->avatar->getClientOriginalName();

        $fileName = $user->id. '-' . time() . '-' . $fileRealName;

        $request->avatar->move($destinationPath, $fileName);

        $user->avatar = asset('/') . $destinationPath . '/' . $fileName;
        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'avatar' => ['nullable','image', 'mimes:jpeg,jpg,png,svg,webp', 'max:3000'],
            'name' => ['nullable','string', 'max:255'],
            'dob' => ['nullable', 'date'],
            'signature' => ['nullable', 'string', 'max:255'],
        ]);

        auth()->user()->update($request->except('avatar'));

        if ($request->avatar) {
            $destinationPath = 'storage/users/'.auth()->user()->id.'-'.auth()->user()->name.'/';

            $fileRealName = $request->avatar->getClientOriginalName();

            $fileName = auth()->user()->id. '-' . time() . '-' . $fileRealName;

            $request->avatar->move($destinationPath, $fileName);

            auth()->user()->avatar = asset('/') . $destinationPath . '/' . $fileName;

            auth()->user()->save();
        }

        return redirect()->route('profile.user');
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

    public function loginGoogle()
    {
        $userGoogle = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $userGoogle->id,
        ], [
            'name' => $userGoogle->name,
            'email' => $userGoogle->email,
            'avatar' => $userGoogle->avatar,
            'password' => Str::random(10),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}

