<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|max:30',
            'email'=> 'required|unique:users|email',
            'password'=>'required|confirmed|min:5'
            ]);

            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make ($request->password )
            ]);
    }

}
