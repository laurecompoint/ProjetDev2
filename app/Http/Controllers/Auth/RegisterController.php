<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(Request $request)
    {

    }


    protected function create(Request $request)
    {

        $validator = $request->validate([
        'lastname' => ['required', 'string', 'max:255'],
        'firstname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'adresse' => ['required', 'string', 'max:255'],
        'tel' => ['required', 'string', 'max:255'],
        'password' => ['required', 'string', 'min:8'],
        ]);
        return User::create([
            'lastname' => $request['lastname'],
            'firstname' => $request['firstname'],
            'email' => $request['email'],
            'adresse' => $request['adresse'],
            'tel' => $request['tel'],
            'password' => Hash::make($request['password']),
        ]);


    }
}
