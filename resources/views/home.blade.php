Usuario esta registrado y te llamas:
{{Auth::user()->name}}
@if (Auth::check())
  USUARIO REGISTRADO
@else
  USUARIO NO REGISTRADO
@endif

<p><a href={{url("noticias/")}}>Ir a noticias</a></p>
<p><a href={{url("categorias/")}}>Ir a categorias</a></p>
