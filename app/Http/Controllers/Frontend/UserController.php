<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration()
    {
        return view('Frontend.registration');
    }

    public function profile(){
        return view('Frontend.profile');
    }

    public function doRegistration(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'designation'   =>  'required',
            'office_id' =>  'required',
            'phone' =>  'required',
            'email' =>  'required',
            'department' =>  'required',
            'section' =>  'required',
            'company'=> 'required',
        ]);
        $data = [
            'name'=>$request->input('name'),
            'designation'=>$request ->input('designation'),
            'office_id'=>$request->input('office_id'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'password'=>Hash::make('User#852'),
            'department'=>$request->input('department'),
            'section'=>$request->input('section'),
            'company'=>$request->input('company'),
            'role'=>'user',
        ];

        User::create($data);
        return redirect()->route('home');
    }
        public function login()
        {
            return view('Frontend.login');
        }

        public function doLogin(Request $request)
        {
        $cred = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($cred)){
            if (auth()->user()->role=='admin'){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
            return redirect()->route('home');
    }
   return back()->withErrors([
            'email' => 'The provided credentials do not match records.',
        ]);
        }
        public function logout(){
            auth()->logout();
            return redirect()->route('home');
        }
        }


