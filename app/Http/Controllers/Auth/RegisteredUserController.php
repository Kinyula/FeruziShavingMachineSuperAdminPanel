<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        $users = new User();
        $users->name = $request->input('name');
        $users->password = Hash::make($request->input('password'));
        $users->email = $request->input('email');

        $profile_image =  $users->profile_image = $request->file('profile_image')->store('public/profile_images');

        $profile_image = explode('/', $profile_image);
        $profile_image = $profile_image[2];
        $users->profile_image = $profile_image;


        $users->save();

        return redirect(RouteServiceProvider::LOGIN);
    }
}
