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

    public function updateProfile(Request $request)
    {
        try {
            $request->validate([

                'password' => 'required|confirmed|min:5',
            ]);
            $photo = $request->file('photo');
            if ($photo) {
                if (file_exists('upload/users/' . auth()->user()->photo)) {
                    unlink('upload/users/' . auth()->user()->photo);
                }
                $newName = 'user' . time() . '.' . $photo->getClientOriginalExtension();
                $request->photo->move('upload/users', $newName);
                auth()->user()->update(['photo' => $newName]);
            }
            $data = [
                'designation'=>$request->input('designation'),
                'password' => Hash::make($request->input('password')),

            ];
            auth()->user()->update($data);
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    public function doRegistration(Request $request)
    {

        try{

            $request->validate([
                'name'  =>  'required',
                'designation'   =>  'required',
                'office_id' => 'required|unique:users,office_id',
                'phone' =>  'required| unique:users,phone',
                'email' =>  'required|unique:users,email',
                'department' =>  'required',
                'section' =>  'required',
                'company' => 'required',
            ]);
            $data = [
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'office_id' => $request->input('office_id'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' => Hash::make('User#005'),
                'department' => $request->input('department'),
                'section' => $request->input('section'),
                'company' => $request->input('company'),
                'role' => 'user',
                'photo' => 'demo.jpg',
            ];

            User::create($data);
            return redirect()->route('login')->with('message', 'Registration successful! To login please contact with system admin for password.');

        } catch(\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());
        }


    }
        public function login()
        {
            return view('Frontend.login');
        }

        public function doLogin(Request $request)
        {
        $cred = $request->validate([
            'office_id' => ['required'],
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
            'office_id' => 'The provided credentials do not match records.',
        ]);
        }
        public function logout(){
            auth()->logout();
            return redirect()->route('home');
        }
        }


