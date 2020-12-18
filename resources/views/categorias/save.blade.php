<h1> Guardar Categoria </h1>
<form action='{{url("categorias/$categoria->id")}}' method="POST">
    @csrf
    @if ($categoria->id)
        <input type="hidden" name="_method" value="PUT">
    @endif

    <br>Titulo:<input type="text" name="titulo" value="{{$categoria->titulo}}">
    <br>Descripcion:<input type="text" name="descripcion" value="{{$categoria->descripcion}}">

    <br><input type="submit" value="Guardar">
</form>

<p><a href={{url("categorias")}}>Cancelar</a></p>

