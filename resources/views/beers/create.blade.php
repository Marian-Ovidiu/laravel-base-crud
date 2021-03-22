<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('beers.store')}}" method="post" style="width: 75%; margin: 50px auto;">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" type="text" name="name" placeholder="Nome">
        </div>

        <div class="form-group">
            <label for="gradazione">Gradazione</label>
            <input class="form-control" type="text" name="gradazione" placeholder="Gradazione">
        </div>

        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <input class="form-control" type="text" name="descrizione" placeholder="Descrizione">
        </div>

        <input type="submit" value="Invia">
    </form>

</body>
</html>
