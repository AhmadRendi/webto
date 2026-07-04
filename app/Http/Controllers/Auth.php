<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    public function auth(Request $request) {
        try{
            $request->validate([
            'email' => 'required|string|emil',
            'password' => 'required|string'
            ]);

            Session::put('email', $request['email']);

            return redirect()->route('dashboard')->with(['success' => 'Login Berhasil']);
        }catch(\Exception $e){
            return redirect()->route('login')->with(['modal_error' => $e->getMessage()]);
        }

        
    }
}
