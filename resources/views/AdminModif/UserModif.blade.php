
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
<form method="post" action="{{route('user_update.update')}}" style="position: absolute; top: 200px; left: 90px;">

        <br class="input-group mb-3 m-auto task">

        <input type="hidden" name="id" class="form-control"  value="{{$users->id}}">
        <br>
        <label>Prénom</label>
        <input type="text" name="lastname" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->lastname}}">
        <br>
        <label>Nom</label>
        <input type="text" name="firstname" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->firstname}}">
         <br>
        <label>Email</label>
        <input type="text" name="email" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->email}}">
        <br>
        <label>Tel</label>
        <input type="text" name="tel" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->tel}}">
        <label  class="mt-3">Admin</label>
        <select class="custom-select"  style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->admin}}" >
            <option value="1">Admin</option>
            <option value="0">Pas Admin</option>
        </select>
        <br>
        <label>Adresse</label>
        <input type="text" name="adresse" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->adresse}}">
        <br>
        <label>Mot de passe</label>
        <input type="text" name="password" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$users->password}}">
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