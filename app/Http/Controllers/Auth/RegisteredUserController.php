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

    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }
    public function facebookLogin(){
        return Socialite::driver('facebook')->redirect();
    }
    public function twitterLogin(){
        return Socialite::driver('twitter')->redirect();
    }

    public function googleLoginCallBack(){
        $data = Socialite::driver('google')->user();
        $provider = 'google';
        $user = $this->userCreate($data, $provider);
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
    public function facebookLoginCallBack(){
        $data = Socialite::driver('facebook')->user();
        $provider = 'facebook';
        $user = $this->userCreate($data, $provider);
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
    public function twitterLoginCallBack(){
        $data = Socialite::driver('facebook')->user();
        $provider = 'twitter';
        $user = $this->userCreate($data, $provider);
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    protected function userCreate($data, $provider){
        $user = User::updateOrCreate([
            'email' => $data->email,
        ], [
            'name' => $data->name,
            'email' => $data->email,
            'oauth_id' => $data->id,
            'password' => '',
            'oauth_provider' => $provider,
            'oauth_token' => $data->token,
            'oauth_refresh_token' => $data->refreshToken,
        ]);

        return $user;
    }
}
