<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {

        $nims_users = User::orderBy('id','desc')->paginate(300);

        return view('Backend.nimsUser.userIndex', compact('nims_users'));

    }

}
