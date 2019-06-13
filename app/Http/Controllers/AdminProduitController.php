<?php

namespace App\Http\Controllers;
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
            'price' => ['required', 'number'],
            'content' => ['required'],
            'goodies' => ['required'],
            'description' => ['required'],
            'link' => ['required'],
            'fabrication' => ['required'],
            'linkcreation' => ['required'],

        ]);

        $produit = new Produit;
        $produit->name = $request->name;
        $produit->image =  $request->image;
        $produit->price =  $request->price;
        $produit->content =  $request->content;
        $produit->goodies = $request->goodies;
        $produit->description =  $request->description;
        $produit->link =  $request->link;
        $produit->fabrication =  $request->fabrication;
        $produit->linkcreation =  $request->linkcreation;
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
