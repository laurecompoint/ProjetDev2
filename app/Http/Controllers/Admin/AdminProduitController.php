<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;

class AdminProduitController extends Controller
{
    public function index()
    {
        return Produit::all();

    }

    public function create_admin(Request $request, Produit $produit)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
            'content' => ['required'],
            'description' => ['required'],
            'fabrication' => ['required'],

        ]);

        $produit = new Produit;
        $produit->name = $request->name;
        $produit->image =  $request->image;
        $produit->price =  $request->price;
        $produit->goodies = 1;
        $produit->description =  $request->description;
        $produit->link =  $request->name;
        $produit->fabrication =  $request->fabrication;
        $produit->linkcreation =   $request->name;
        //$produit->content =   $request->content;
        $produit ->save();
    }
    public function update(Request $request, Produit $produit)
    {
        //
    }

    public function destroy(Request $request, Produit $produit)
    {
        $produit = Produit::find($produit->id = $request->id);
        $produit->delete();
    }

}
