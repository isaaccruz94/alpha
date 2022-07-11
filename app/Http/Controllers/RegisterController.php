<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Register\StoreRequest;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('auth.register');
    }

    public function store(StoreRequest $request):Object
    {
        $user = User::create($request->validated());

        return $user;
    }
}
