<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Ppdb;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PpdbController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'name' => 'required|min:4|max:50',
            'school' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'tlp' => 'required',
            'papa' => 'required',
            'mama' => 'required',
        ]);

        $ppdb = new Ppdb();
        $ppdb->nisn = $request->nisn;
        $ppdb->name = $request->name;
        $ppdb->school = $request->school;
        $ppdb->gender = $request->gender;
        $ppdb->email = $request->email;
        $ppdb->tlp = $request->tlp;
        $ppdb->papa = $request->papa;
        $ppdb->mama = $request->mama;
        $ppdb->role = 'user';
        $ppdb->save();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->nisn);
        $user->role = 'user';
        $user->save();

        // dd($request->all()); 
        return redirect('/yield')->with('success', 'berhasil membuat akun!');
    }

    public function login()
    {
        return view('login');
    }


    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => "This email doesn't exists"
        ]);
        $role = User::where('email', $request->email)->first();
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            if ($role->role == "user") {
                return redirect('/dashboard');
            }else{
                return redirect('/admin');
            }
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function dashboard()
    {
        $user = User::find(Auth::user()->id);
        $data = Ppdb::where('id', $user->id)->get();

        return view('dashboard')->with('data', $data);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function payment()
    {
        return view('payment');
    }

    public function admin()
    {
        return view('admin');
    }

    public function yield()
    {
        $ppdb = Ppdb::all();
        return view('yield', compact('ppdb'));
    }
}
