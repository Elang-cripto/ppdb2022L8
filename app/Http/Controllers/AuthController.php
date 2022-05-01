<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function logincek(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/' . Auth::user()->role);
        }
        Alert::error('Astagfirullah', 'Salah Maseeehhhh');
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/regis');
    }

    public function registeradd(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        Alert::success('Alhamdulillah', 'Data baru berhasil ditambahkan');
        return redirect('/register');
    }
}
