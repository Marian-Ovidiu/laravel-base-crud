<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{asset('js/app.js')}}"></script>
        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


        <table class="table table-striped table-dark" style="width: 75%; margin: 15px auto;">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Graduazione alcolica</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($beers as $beer)
              <tr>
                <th scope="row">{{$beer->id}}</th>
                <td><a href="{{route('beers.show', ['beer' => $beer -> id])}}" style="color:white; text-decoration:none;">{{$beer->name}}</a></td>
                <td>{{$beer->gradazione}}</td>
                <td>{{$beer->descrizione}}</td>
                <td>

                    <button type="button" class="btn btn-primary">
                         <a href="{{route('beers.show', ['beer' => $beer -> id])}}" style="color:white"><i class="fa fa-eye"></i></a>
                    </button>

                     <button type="button" class="btn btn-primary">
                        <a href="{{route('beers.edit', ['beer' => $beer -> id])}}" style="color:white"><i class="far fa-edit"></i></a>
                    </button>

                    <form action="{{route('beers.destroy', ['beer' => $beer -> id])}}" method="DELETE">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                           <i class="fas fa-meteor"></i>
                        </button>
                    </form>
                </td>

            </tr>
              @endforeach
            </tbody>
          </table>
    </body>
</html>
