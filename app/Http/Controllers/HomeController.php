<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('compte');
    }
    public function profile()
    {
        return view('profil');
    }
    public function profile_udapte(User $user,Request $request)
    {
        $user = Auth::user()

            ->update([  'lastname'  =>  $user->lastname = $request->lastname,
                'fristname'  =>  $user->fristname = $request->fristname,
                'email'  =>  $user->email = $request->email,
                'adresse'  =>  $user->adresse = $request->adresse,
                'tel'  =>  $user->tel = $request->tel,
                'password'  =>  $user->password = $request->password,
                'created_at' => NOW()]);
    }
}
