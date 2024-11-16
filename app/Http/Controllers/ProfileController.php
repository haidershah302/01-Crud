<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function home()
    {
        $rooms = Room::orderBy('created_at', 'desc')->with(['themes' => function ($query) {
            $query->wherePivot('status', true);
        }])->get();
        return Inertia::render('Home', ['rooms' => $rooms]);
    }
    public function user()
    {
        return Inertia::render('Profile/user', ['user' => auth()->user()]);
    }
    public function view(User $user)
    {
        return Inertia::render('Profile/view', ['user' => $user]);
    }
    public function editView()
    {
        return Inertia::render('Profile/edit', ['user' => auth()->user()]);
    }
    public function editPost(Request $request)
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
    public function rechargeView()
    {
        return Inertia::render('Profile/recharge');
    }
    public function exchangeView()
    {
        return Inertia::render('Profile/exchange');
    }
    public function incrementCoin(Request $request)
    {
        $request->validate([
            'coin' => ['required', 'numeric', 'min:1'],
        ]);

        auth()->user()->increment('coins', $request->coin);

        return redirect()->route('profile.recharge');
    }
}
