<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/user', fn () => auth()->user())->middleware('auth');

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->intended('login');
})->middleware('auth');

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google/redirect', function () {
    $user = Socialite::driver('google')->user();

    $findUser = User::where('email', $user->getEmail())->first();

    if ($findUser) {
        Auth::login($findUser);
        return redirect('user');
    } else {
        $user = [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('wesmangan')
        ];
        User::create($user);
        return redirect('/')->with('message', 'berhasil registrasi, Silahkan Login !');
    }
});
