<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Session;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::check()) {
                Session::create([
                    'ip' => $request->ip(),
                    'user_agent' => $request->server('HTTP_USER_AGENT'),
                    'users_id' => Auth::id()
                ]);

                return redirect()->intended('/profile/' . Auth::id());
            }
        }

        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
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
        ]);

        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => strlen($request->telephone > 5) ? $request->telephone : NULL,
            'password' => Hash::make($request->password),
        ];

        $avatar = NULL;

        if ($request->file('avatar')) {
            $request->validate([
                'avatar' => 'mimes:jpeg,png,jpg',
            ]);

            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/upload/image', $fileNameToStore);

            $avatar = $fileNameToStore;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => strlen($request->telephone > 5) ? $request->telephone : NULL,
            'password' => Hash::make($request->password),
            'avatar' => $avatar,
        ]);

        event(new Registered($user));

        Auth::login($user);

        Session::create([
            'ip' => $request->ip(),
            'user_agent' => $request->server('HTTP_USER_AGENT'),
            'users_id' => Auth::id()
        ]);

        return redirect('/profile/' . Auth::id());
    }

    public function show_profile(int $id): View
    {
        $user = User::find($id);

        $articles = Article::select(
            'articles.*',
            DB::raw('users.name as user_name'),
            DB::raw('users.avatar as user_avatar')
        )
            ->where('users_id', '=', $id)
            ->leftJoin('users', 'users.id', '=', 'articles.users_id')
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('profile', [
            'user' => $user,
            'articles' => $articles
        ]);
    }

    public function show_profile_edit(): View
    {
        $user = User::find(Auth::id());

        return view('profile_edit', [
            'user' => $user
        ]);
    }

    public function store_profile_edit(Request $request)
    {

        $user = User::find(Auth::id());

        dd(Storage::exists('/public/upload/image/' . $user->avatar));

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|min:4|max:255|email|unique:users,email,' . Auth::id(),
            'telephone' => 'min:3|max:20|unique:users,telephone,' . Auth::id(),
        ]);

        $avatar = NULL;

        if ($request->file('avatar')) {
            $request->validate([
                'avatar' => 'mimes:jpeg,png,jpg',
            ]);

            if ($user->avatar && Storage::exists('public/upload/image' . $user->avatar)) {
                Storage::delete('public/upload/image' . $user->avatar);
            }

            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/upload/image', $fileNameToStore);

            $avatar = $fileNameToStore;
        }

        User::where('id', '=', Auth::id())
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'avatar' => $avatar ?? $user->avatar
            ]);

        return back();
    }

    public function store_password_edit(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        $user = User::find(Auth::id());

        if (!Hash::check($request->password_old, $user->password)) {
            throw ValidationException::withMessages([
                'password_old' => trans('auth.failed')
            ]);
        }

        $user->update(['password' => Hash::make($request->password)]);

        return back();
    }
}
