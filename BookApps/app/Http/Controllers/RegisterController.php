<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function register(Request $request) : RedirectResponse {
        $credentials = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'password2' => ['required', 'same:password'],
        ]);
        if ($credentials){
            $credentials['password'] = Hash::make($credentials['password']);
            User::create([
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'gender' => $credentials['gender'],
                'password' => $credentials['password'],
                'role' => 'user'
            ]);
            return redirect()->to('login')->with('success', 'User Berhasil didaftarkan!');
        }
        return back();
        
        
    }
}
