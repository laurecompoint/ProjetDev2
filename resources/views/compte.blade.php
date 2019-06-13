@extends('layouts.app')

        <link rel="stylesheet" href="css/app.css">

        <div class="info-user" cols="5">
            <h3 class="mt-5">Information</h3>
            <p class="mt-5"><strong>Nom : </strong>  {{ Auth::user()->lastname }} </p>
            <p><strong>Prénom : </strong>  {{ Auth::user()->firstname }}</p>
            <p><strong>Adresse :  </strong> {{ Auth::user()->adresse }}</p>
            <p><strong>Mail : </strong> {{ Auth::user()->email }}</p>
            <p><strong>Numéro de téléphone : </strong> {{ Auth::user()->tel }}</p>
            <a href="profile-modif" class="btn button-compte" role="button" aria-pressed="true">Modifier vos info</a>
        </div>