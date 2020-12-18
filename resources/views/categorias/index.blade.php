<h1>CATEGORIAS:</h1>
@foreach($categorias as $categoria)
    <form action='{{url("categorias/$categoria->id")}}' method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Eliminar">
        <a href='{{url("categorias/$categoria->id/edit")}}'>Editar</a>
        <a href="{{url('categorias/'.$categoria->id)}}">Ver</a>
        {{$categoria->titulo}}---  {{$categoria->descripcion}}

    </form>
@endforeach
<p><a href={{url("categorias/create")}}>Crear categoria nueva</a></p>

<a href={{url("logout")}}>Salir</a></p>
