<h1>CATEGORIA</h1>
@if ($categoria!=null)
    <h3> {{$categoria->titulo}}  </h3>
    <p> {{$categoria->descripcion}}</p>
@else
    <p>NO EXISTE ESA NOTICIA</p>
@endif
@if(Session::has('notice'))
    <p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
