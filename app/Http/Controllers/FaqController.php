<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Http\Request;


class FaqController extends Controller
{

    public function index()
    {
        return Faq::all();

    }
    public function contact()
    {}

}
