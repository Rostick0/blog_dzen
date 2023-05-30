<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show_login(): View
    {
        return view('login');
    }

    public function store_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, true)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        if (Auth::check()) return redirect()->intended('/profile/' . Auth::id());

        return redirect('/login');
    }

    public function show_register(): View
    {
        return view('register');
    }

    public function store_register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|min:4|max:255|email|unique:users',
            'telephone' => 'min:3|max:20|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
            'avatar' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('avatar')) {
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/upload/image', $fileNameToStore);

            $avatar = $fileNameToStore;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'avatar' => $avatar,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/profile/' . Auth::id());
    }

    public function show_profile(int $id): View
    {
        return view('profile');
    }

    public function show_profile_edit(): View
    {
        return view('profile_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
