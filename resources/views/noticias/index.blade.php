<h1>LISTA DE NOTICIAS</h1>
@foreach($noticias as $noticia)
    <form action='{{url("noticias/$noticia->id")}}' method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Eliminar">
        <a href='{{url("noticias/$noticia->id/edit")}}'>Editar</a>
        <a href="{{url('noticias/'.$noticia->id)}}">Ver</a>
        {{$noticia->getCategoria()->first()->titulo}}: {{$noticia->titulo}}
    </form>
@endforeach
<p><a href={{url("noticias/create")}}>Crear noticia nueva</a></p>
<form action="{{url('noticias/subir')}}" enctype="multipart/form-data" method="POST" >
    @csrf
    <label for="archivo"><b>Archivo: </b></label><br>
    <input type="file" name="archivo" required>
    <input class="btn btn-success" type="submit" value="Enviar" >
</form>
<a href={{url("logout")}}>Salir</a></p>
