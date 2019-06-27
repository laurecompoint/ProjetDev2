
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
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="position: absolute; top: 380px; left: 80px;">
            <img src="/images/{{ $user->avatar }}"  style="position: absolute; top: -120px; left: 950px;">
            <form enctype="multipart/form-data" action="{{ route('profile.update') }}" method="POST">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="lastname" style="width: 60%;border-radius: 0px;border: Solid #6C8EAD 3px;"  value="{{Auth::user()->lastname}}">
            </div>
                <label>Update Profile Image</label> <br>
                <input type="file" style="width: 60%;border-radius: 0px;border: Solid #6C8EAD 3px;" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
            <div class="form-group mt-3">
                <label>Prénom</label>
                <input type="text" class="form-control" name="firstname" style="width: 60%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{Auth::user()->firstname}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" style="width: 60%;border-radius: 0px;border: Solid #6C8EAD 3px;"  value="{{Auth::user()->email}}">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="adresse" style="width: 60%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{Auth::user()->adresse}}">
            </div>
            <div class="form-group">
                <label>Numéro de téléphone</label>
                <input type="text" class="form-control" name="tel" style="width: 60%;border-radius: 0px;border: Solid #6C8EAD 3px;"  value="{{Auth::user()->tel}}">
            </div>

                <div class="input-group-append">
                    <button class="btn text-white" style="background-color: #3D628D" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="app" class="background">



</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>