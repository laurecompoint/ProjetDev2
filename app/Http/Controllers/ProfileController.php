<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return  Auth::id(1);
    }
    public function update(Request $request)
    {


        // $request->user() returns an instance of the authenticated user...
    }
}
