<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
       return Auth::user();
    }
    public function update(Request $request)
    {


        // $request->user() returns an instance of the authenticated user...
    }
}
