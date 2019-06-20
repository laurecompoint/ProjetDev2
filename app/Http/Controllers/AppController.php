<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{

    public function index ()
    {
        return view('app');
    }
    public function indexadmin ()
    {

        if (Auth::user()->admin == 0) {
            return redirect('/');
        }
        return view('appadmin');
    }
    public function getUser ()
    {
        return Auth::user();
    }

}
