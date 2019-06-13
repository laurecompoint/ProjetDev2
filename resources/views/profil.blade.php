@extends('layouts.app')
<link rel="stylesheet" href="css/app.css">
<div class="info-user info-profile" cols="6">
    <form method="post" action="{{route('profil.update')}}">
    <h3 class="mt-5">Information</h3> <br>
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control"  value="{{ Auth::user()->lastname }}" placeholder="{{ Auth::user()->lastname }}">
    </div>
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" class="form-control" value="{{ Auth::user()->firstname }}"  placeholder="{{ Auth::user()->firstname }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" value="{{ Auth::user()->email }}"  placeholder="{{ Auth::user()->email }}">
    </div>
    <div class="form-group">
        <label>Adresse</label>
        <input type="text" class="form-control" value="{{ Auth::user()->adresse }}"  placeholder="{{ Auth::user()->adresse }}">
    </div>
    <div class="form-group">
        <label>Numéro de téléphone</label>
        <input type="text" class="form-control" value="{{ Auth::user()->tel }}"  placeholder="{{ Auth::user()->tel }}">
    </div>

        {{csrf_field()}}
    <button class="mt-3 mb-5 button-compte" type="submit">Modifier</button>
    </form>
</div>