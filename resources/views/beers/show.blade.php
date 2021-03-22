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

    <table class="table table-striped table-dark" style="width: 400px; margin: auto;">
        <tbody>
          <tr>
            <th scope="row">{{$beer->name}}
          </tr>
          <tr>
            <th scope="row">{{$beer->gradazione}}</th>
          </tr>
          <tr>
            <th scope="row">{{$beer->descrizione}}</th>
          </tr>
        </tbody>
      </table>

</body>
</html>
