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
    public function nb()
    {
        return Produit::all()->count();
    }
    public function create_admin(Request $request, Produit $produit)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
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
    public function edit(Request $request, Produit $produit)
    {
        $produit = Produit::find($produit->id = $request->id);
        $produits = $produit->where('id', $produit->id)->first();
        return view('/AdminModif.produitmodif')->with([
            'produits' => $produits,
        ]);
    }
    public function update(Request $request, Produit $produit)
    {
        $produits = $produit->where('id', $produit->id = $request->id)->update([  'name'  =>  $produit->name = $request->name, 'description'  =>  $produit->description = $request->description, 'price'  =>  $produit->price = $request->price, 'goodies'  =>  $produit->goodies = 1, 'fabrication'  =>  $produit->fabrication = $request->fabrication, 'link'  =>  $produit->link = $request->name, 'linkcreation'  =>  $produit->linkcreation = $request->linkcreation, 'created_at' => NOW()]);

        return redirect('/admin-produit');
    }

    public function destroy(Request $request, Produit $produit)
    {
        $produit = Produit::find($produit->id = $request->id);
        $produit->delete();
    }

}
