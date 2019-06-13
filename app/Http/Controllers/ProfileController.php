<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return $user = Auth::user();



    }

    public function update(Request $request)
    {


        // $request->user() returns an instance of the authenticated user...
    }
}
