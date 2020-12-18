<h1> Guardar Noticia </h1>
<form action='{{url("noticias/$noticia->id")}}' method="POST">
    @csrf
    @if ($noticia->id)
        <input type="hidden" name="_method" value="PUT">
    @endif

    <br>Titulo:<input type="text" name="titulo" value="{{$noticia->titulo}}">
    <br>Texto:<input type="text" name="texto" value="{{$noticia->texto}}">
    <br>iD-Categoria:<input type="text" name="categoria_id" value="{{$noticia->categoria_id}}">
    <br><input type="submit" value="Guardar">
</form>

<p><a href={{url("noticias")}}>Cancelar</a></p>

