<h1>NOTICIA</h1>
@if ($noticia!=null)
    <h3> {{$noticia->titulo}}  ---  Categoria:{{$noticia->categoria}}</h3>
    <p> {{$noticia->texto}}</p>
@else
    <p>NO EXISTE ESA NOTICIA</p>
@endif
@if(Session::has('notice'))
    El notice
    <p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
