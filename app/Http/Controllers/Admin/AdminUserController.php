<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        return User::all();

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
            'admin' => $request['admin'],
            'password' => Hash::make($request['password']),
        ]);

    }
    public function destroy(Request $request, User $user)
    {
        $user = User::find($user->id = $request->id);
        $user->delete();
    }
}
