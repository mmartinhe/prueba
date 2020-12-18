<H1>FORMULARIO PARA EL REGISTRO:</H1>
<form name =formulario method="post" action="{{url('/usuario/registro')}}">
    @csrf
    <br>Nombre: <input  type="text" name="name"
                        id="name">
    <br>Correo: <input  type="text" name="email"
                        id="email">
    <br>pasword: <input  type="text" name="password"
                         id="password">
    <input type="submit" value="registrar">
</form>
