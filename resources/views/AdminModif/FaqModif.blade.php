
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
<form method="post" action="{{route('faq_update.update')}}" style="position: absolute; top: 200px; left: 90px;">

        <br class="input-group mb-3 m-auto task">

        <input type="hidden" name="id" class="form-control"  value="{{$faqs->id}}">
        <br>
        <label>Catégorie</label>
        <input type="text" name="name" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$faqs->name}}">
        <br>
        <label>Question</label>
        <input type="text" name="question" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$faqs->question}}">
         <br>
        <label>Réponse</label>
        <input type="text" name="answer" class="form-control" style="width: 300%;border-radius: 0px;border: Solid #6C8EAD 3px;" value="{{$faqs->answer}}">
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