@php

    if(isset($edit) && !empty($edit)){
        $method = 'PUT';
        $url = route(('beers.update'), compact('beer'));
    }

    else {
        $method = 'POST';
        $url = route(('beers.store'));
    };

@endphp

<form action="{{ $url }}" method="{{$method}}" style="width: 75%; margin: 50px auto;">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="name">Nome</label>
        <input class="form-control" type="text" name="name" placeholder="Nome" value = "{{isset($beer) ? $beer -> name : ''}}">
    </div>

    <div class="form-group">
        <label for="gradazione">Gradazione</label>
        <input class="form-control" type="text" name="gradazione" placeholder="Gradazione" value = "{{isset($beer) ? $beer -> gradazione : ''}}">
    </div>

    <div class="form-group">
        <label for="descrizione">Descrizione</label>
        <input class="form-control" type="text" name="descrizione" placeholder="Descrizione" value = "{{isset($beer) ? $beer -> descrizione : ''}}">
    </div>

    <input type="submit" value="Invia">
</form>
