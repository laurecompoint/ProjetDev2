<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return $user = Auth::user();



    }

    public function update(Request $request, User $user)
    {
        User::find($request->id)->update([
            'lastname' => $request->lastname,
            'fristname' => $request->fristname,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
        ]);
        //return User::find(Auth::user()->id)->update([  'lastname'  =>  $user->lastname = $request->lastname, 'fristname'  =>  $user->fristname = $request->fristname, 'email'  =>  $user->email = $request->email, 'adresse'  =>  $user->adresse = $request->adresse, 'tel'  =>  $user->tel = $request->tel, 'created_at' => NOW()]);
        // $request->user() returns an instance of the authenticated user...
    }
}
