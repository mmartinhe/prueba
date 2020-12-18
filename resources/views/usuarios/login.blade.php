<form name =formulario method="post" action="{{url('/login')}}">
    @csrf
    <br>Correo: <input  type="text" name="email"
                        id="email">
    <br>Password: <input  type="text" name="password"
                         id="password">
    <input type="submit" value="ACCESO">
</form>
