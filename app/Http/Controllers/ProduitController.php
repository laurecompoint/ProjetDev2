<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Http\Requests;
use Illuminate\Http\Request;


class ProduitController extends Controller
{
    public function index()
    {
        return Produit::all()->where('goodies', '==', 1);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return Produit::findOrFail($id);

    }
    public function edit()
    {

    }


    public function update(Request $request, Produit $produit)
    {
        //
    }

    public function destroy()
    {

    }
}
