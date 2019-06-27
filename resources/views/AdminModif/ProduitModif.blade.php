
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<form method="post" action="{{route('produit_update.update')}}" style="position: absolute; top: 200px; left: 90px;">

        <br class="input-group mb-3 m-auto task">

        <input type="hidden" name="id" class="form-control"  value="{{$produits->id}}">
        <br>
        <label>Nom</label>
        <input type="text" name="name" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$produits->name}}">
        <br>
        <label>Description</label>
        <input type="text" name="description" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$produits->description}}">
         <br>
        <label>Prix</label>
        <input type="text" name="price" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$produits->price}}">
        <br>
        <input type="hydden" name="link" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$produits->link}}">
        <br>
        <input type="text" name="linkcreation"  type="hydden" value="creation-{{$produits->name}}" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$produits->linkcreation}}">
        <br>
        <label>Fabrication</label>
        <input type="text" name="fabrication" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$produits->fabrication}}">
        <br>
        {{csrf_field()}}

        <div class="input-group-append">
            <button class="btn text-white" style="background-color: #3D628D" type="submit">Modifier</button>
        </div>

</form>
<div id="app" class="background">



</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>