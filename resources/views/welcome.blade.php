<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<H1>TRININEWS</H1>
<P>Logeate para entrar en mi web:</P>
<div style="background-color: yellow;width:50%; text-align: center">
    @include('usuarios.login')
</div>

@if(isset($notice))
    <div class="alert alert-success msgInfo" >
        <p> <strong> {{ $notice }} </strong> </p>
    </div>
@endif
<div>
<a href={{url("/login")}}>CREAR NUEVA CUENTA</a>
</div>

<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".msgInfo").fadeOut(1000);
    },2000);
});
</script>
