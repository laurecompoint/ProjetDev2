<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Http\Requests;
use Illuminate\Http\Request;


class ProduitController extends Controller
{
    public function index()
    {
        return Produit::all()->where('goodies', '==', 1);

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return Produit::findOrFail($id);

    }


}
