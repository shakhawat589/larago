<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function facebookLogin(){
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookLoginCallBack(){
        $data = Socialite::driver('facebook')->user();

        dd($data);

        $user = $this->userCreate($data);
        
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    protected function userCreate($data){
        $user = User::updateOrCreate([
            'oauth_id' => $data->id,
        ], [
            'name' => $data->name,
            'email' => $data->email,
            'oauth_token' => $data->token,
            'oauth_refresh_token' => $data->refreshToken,
        ]);

        return $user;
    }
}
