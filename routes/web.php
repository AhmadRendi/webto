<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

Route::post('/auth', function (\Illuminate\Http\Request $request) {
    // Dummy login data
    $dummyEmail = 'admin@webto.id';
    $dummyPassword = 'password123';

    if ($request->email === $dummyEmail && $request->password === $dummyPassword) {
        Session::put('logged_in', true);
        Session::put('email', $request->email);
        return redirect()->route('landing');
    }

    return back()->withErrors(['email' => 'Email atau password salah!']);
})->name('auth.post');

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect()->route('landing');
})->name('logout');
